<?php

namespace App\Products\ArticleGenerator\Helpers;

class SentencesHelper
{

    /**
     * Return count of sentences in string
     * @param  string  $text
     * @return int
     */
    public static function countSentences(string $text): int
    {
        $sentences = preg_split('/(?<=[.!?])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
        return count($sentences);
    }

    /**
     * Return first X sentences from string
     * @param  string  $text
     * @param  int  $count
     * @return string
     */
    public static function getFirstSentences(string $text, int $count): string
    {
        // Divides text into sentences using a period as a separator
        $sentences = preg_split('/(?<=[.!?])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

        // Takes the first X sentences
        $firstSentences = array_slice($sentences, 0, $count);

        // Combines sentences back into text
        return implode(' ', $firstSentences);
    }

    /**
     * Return last X sentences from string
     * @param  string  $text
     * @param  int  $count
     * @return string
     */
    public static function getLastSentences(string $text, int $count): string
    {
        // Divides text into sentences using a period as a separator
        $sentences = preg_split('/(?<=[.!?])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

        // Takes the last X sentences
        $lastSentences = array_slice($sentences, -$count);

        // Combines sentences back into text
        return implode(' ', $lastSentences);
    }

}
