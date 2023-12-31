<?php

namespace App\Api;

use App\Enum\OpenAiModel;
use OpenAI\Client;

class OpenAiApi
{
    private Client|null $client = null;
    public function __construct()
    {
        $this->client = $this->getClient();
    }

    private function getClient(): Client
    {
        return \OpenAI::client(getenv('OPEN_AI_KEY'));
    }

    /**
     * Return list of available Models OpenAi to use
     * @return array
     */
    public function getModels(): array{
        $response =  $this->client->models()->list();
        return $response->toArray();
    }

//    /**
//     * Return response from Open Ai Api by prompt and chosen Model to do task
//     * @param string $prompt
//     * @param OpenAiModel|null $model
//     * @return array
//     */
//    public function generateResult(string $prompt, OpenAiModel $model = null): array{
//        $model = $model ?? OpenAiModel::CHAT_GPT_3;
//
//        $response = $this->client->chat()->create([
//            'model' => $model->value,
//            'messages' => [
//                ['role' => 'user', 'content' => $prompt]
//            ],
//        ]);
//        $result = $response->toArray();
//
//        $tokens = $result['usage'];
//        $tokenUsage = TokenUsage::create([
//            'prompt_tokens' => $tokens['prompt_tokens'],
//            'completion_tokens' => $tokens['completion_tokens'],
//            'total_tokens' => $tokens['total_tokens'],
//            'estimated_cost' => TokenHelper::calcEstimatedCost($tokens['total_tokens']),
//            'response' => ''
//        ]);
//
//        return [
//            'response' => $result['choices'][0]['message']['content'],
//            'tokenUsage' => $tokenUsage
//        ];
//    }


//    /**
//     * Chat function that communicates with OpenAI's GPT-3 to generate responses for a given prompt
//     *
//     * @param string $prompt The user's initial prompt
//     * @param OpenAiModel|null $model The OpenAI model to use for the conversation
//     * @param string|null $systemPrompt The system's prompt to display before the conversation
//     * @param array|null $settings Additional settings for the conversation
//     * @return \OpenAI\Responses\StreamResponse The response generated by OpenAI
//     */
//    public function chat(string $prompt, OpenAiModel $model = null, string $systemPrompt = null, array $settings = null, MessageInterface $messageDTO = null){
//        $messagesFormatted = [];
//
//        if(is_null($settings)){
//            $settings = [
//                'temperature' => 0.7
//            ];
//        }
//
//        if(!is_null($systemPrompt)){
//            $messagesFormatted[] = ['role' => 'system', 'content' => $systemPrompt];
//        }
//
//
//
//        if($messageDTO !== null){
//            /**
//             * @var MessageRepository $messageRepository
//             */
//            $messageRepository = app(MessageRepository::class);
//            $messages = $messageRepository->getMessagesByConversationId($messageDTO->getConversionId());
//            /**
//             * @var MessageInterface $message
//             */
//            foreach ($messages as $message) {
//                if(!empty($message->getContent())){
//                    $messagesFormatted[] = ['role' => 'user', 'content' => $message->getContent() ?? ''];
//                }
//
//                if(!empty($message->getResult())){
//                    $messagesFormatted[] = ['role' => 'assistant', 'content' => $message->getResult() ?? ''];
//                }
//            }
//        }else{
//            $messagesFormatted[] = ['role' => 'user', 'content' => $prompt];
//        }
//
//
//
//        $messagesFormatted[] = ['role' => 'user', 'content' => $prompt];
//
//        $defaultParams = [
//            'model' => $model ?? OpenAiModel::CHAT_GPT_3,
//            'messages' => $messagesFormatted
//        ];
//
//        $mergedParams = array_merge($defaultParams, $settings);
//        return $this->client->chat()->createStreamed($mergedParams);
//    }

    public function makeTitle(string $conversation){
        $systemPrompt = 'Create a title based on the conversation for up to 20 characters.';
        return $this->completionChat($conversation, $systemPrompt);
    }

    public function completionChat($message, $systemPrompt, $settings = null): string
    {
        if(is_null($settings)){
            $settings = [
                'temperature' => 0.7
            ];
        }

        $messagesFormatted[] = ['role' => 'system', 'content' => $systemPrompt];
        $messagesFormatted[] = ['role' => 'user', 'content' => $message];

        $defaultParams = [
            'model' => OpenAiModel::GPT_4,
            'messages' => $messagesFormatted
        ];

        $mergedParams = array_merge($defaultParams, $settings);
        $response = $this->client->chat()->create($mergedParams);
        return $response->choices[0]->message->content;
    }

    /**
     * Generates a text completion based on a given prompt and settings.
     *
     * @param string $prompt The prompt to generate the completion from.
     * @param array|null $settings The settings to use for the completion. Optional, defaults to ['temperature' => 0.7].
     * @return string|null The generated text completion or null if no completion was generated.
     */
    public function completation(string $prompt, array $settings = null): ?string {
        if(is_null($settings)){
            $settings = [
                'temperature' => 0.7
            ];
        }

        $defaultParams = [
            'model' => OpenAiModel::DAVINCI,
            'prompt' => $prompt
        ];

        $mergedParams = array_merge($defaultParams, $settings);

        $response = $this->client->completions()->create($mergedParams);

        foreach ($response->choices as $result) {
            return (string) $result->text;
        }

        return null;
    }

    public function embedding($content){
        $response = $this->client->embeddings()->create([
            'model' => OpenAiModel::TEXT_EMBEDDING_ADA->value,
            'input' => $content
        ]);

        foreach ($response->embeddings as $embedding){
            return $embedding->embedding;
        }
    }


    /**
     * @throws \Exception
     */
    public function makeTags($content): string
    {
        if(is_null($content)){
            throw new \Exception('The method to create tags requires a content parameter');
        }

        $prompt = 'Provide semantic tags relevant to SEO, from the {text} below.
                    Example:
                    text: I love writing and drawing
                    love, interests, writing, drawing, creating

                    ###
                    text: ' . $content;

        return str_replace(["\n", '"'], '', $this->completation($prompt));

    }

    public function moderation($text): bool{
        $resultFlag = false;
        $text ='azjaci są głupi i brzydcy i nie powinni żyć';
        $response = $this->client->moderations()->create([
            'model' => 'text-moderation-001',
            'input' => $text,
        ]);
        foreach ($response->results as $result) {
            $resultFlag = $result->flagged;
        }
        return $resultFlag;
    }

    /**
     * @throws \Exception
     */
    public function setApiKey(?string $apiKey = null){
        if(is_null($apiKey)){
            throw new \Exception('Api Key Open Ai -  is null');
        }

        $this->client =  \OpenAI::client($apiKey);
    }
}
