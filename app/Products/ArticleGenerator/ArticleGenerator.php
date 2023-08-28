<?php

namespace App\Products\ArticleGenerator;

use App\Api\OpenAiApi;
use App\Models\Article;
use App\Products\ArticleGenerator\Helpers\PromptHelper;
use App\Products\ArticleGenerator\Helpers\SeoPromptHelper;
use Illuminate\Support\Str;
use App\Products\ArticleGenerator\Helpers\SentencesHelper;

class ArticleGenerator
{
    public function __construct(
        private readonly OpenAiApi $openAiApi
    ) {
    }

    public function generateArticle(string $title, array $assumptions, ?Article $articleModel = null, int $maxAssumptionsRealizations = 3): string
    {
        if($articleModel ==  null || empty($articleModel->content) || $articleModel->content === 'x'){
            $prompt = PromptHelper::generatePromptUserArticle(
                title: $title,
                assumptions: array_shift($assumptions),
                currentContentArticle: 'empty'
            );

            $generatedArticleExcerpt = $this->openAiApi->completionChat(
                message: $prompt,
                systemPrompt: PromptHelper::getPromptGenerateArticleSystem()
            );

            $article = $this->openAiApi->completionChat(
                message: $generatedArticleExcerpt,
                systemPrompt: SeoPromptHelper::getPromptSeoAdjustmentArticleSystem()
            );
        }else{
            $article = $articleModel->content;
        }
        $lp = 0;
        do {

            $beforeDeleteAssumption = $assumptions;
            $currentAssumption = array_shift($assumptions);
            $prompt = PromptHelper::generatePromptUserArticle(
                title: $title,
                assumptions: $currentAssumption,
                currentContentArticle: $this->getContentFromDifferentArray($beforeDeleteAssumption, $articleModel->assumptions_all)
            );

            // GENERATE CONTENT OF FRAGMENT
            echo 'Rozpoczęcie generowania treści artykułu ['.$currentAssumption.'] <br/>';
            $generatedArticleExcerpt = $this->openAiApi->completionChat(
                message: $prompt,
                systemPrompt: PromptHelper::getPromptGenerateArticleSystem()
            );
            echo 'Zakończono generowanie treści fragmentu artykułu ['.$currentAssumption.']<br/>';

            // SEO
            echo 'Rozpoczęcie dostosowania SEO <br/>';
            $article .= $this->openAiApi->completionChat(
                message: $generatedArticleExcerpt,
                systemPrompt: SeoPromptHelper::getPromptSeoAdjustmentArticleSystem()
            );
            echo 'Zakończenie dostosowania SEO <br/>';
            $lp++;
        } while (!empty($assumptions) && $lp < $maxAssumptionsRealizations);



        if($articleModel !== null){
            $articleModel->content = $article;
            $articleModel->assumptions = $assumptions;
            $articleModel->save();
        }else{
            Article::create([
                'title' => $title,
                'content' => $article,
                'category_id' => 1,
                'slug' => Str::slug($title),
                'short_content' => 'short_content',
                'published_date' => now(),
                'tags' => 'fddf'
            ]);
        }


        return $article;
    }

    private function getContentFromDifferentArray(array $current, $all): string
    {
        $arrayDiff = array_diff($all, $current);
        $output = '';
        foreach ($arrayDiff as $item){
            $output .= '- '. $item . '; ';
        }
        return $output;
    }
}
