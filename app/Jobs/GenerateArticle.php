<?php

namespace App\Jobs;

use App\Products\ArticleGenerator\ArticleGenerator;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateArticle implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private string $title;
    private array $assumptions;

    /**
     * Create a new job instance.
     */
    public function __construct(array $data)
    {
        $this->title = $data[0];
        $this->assumptions = $data[1];
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        /**
         * @var ArticleGenerator $articleGenerator
         */
        $articleGenerator = app(ArticleGenerator::class);
        $articleGenerator->generateArticle($this->title, $this->assumptions);
    }
}
