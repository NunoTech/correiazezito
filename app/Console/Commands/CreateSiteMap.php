<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;

class CreateSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para criar sitemap';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // create new sitemap object
        $sitemap = App::make("sitemap");

        // get all posts from db
        $posts = Post::orderBydesc('id')->take('10')->get();

        // add items to the sitemap (url, date, priority, freq)
        $sitemap->add('https://www.correiazezito.com.br', $posts[0]->updated_at, '1.0', 'daily');

        // add every post to the sitemap
        foreach ($posts as $post)
        {
            $sitemap->add("https://www.correiazezito.com.br/blog/{$post->slug}", $post->updated_at, '0.9', 'never');
        }

        // generate your sitemap (format, filename)
        $sitemap->store('xml', 'sitemap');
        // this will generate file mysitemap.xml to your public folder
    }
}
