<?php

namespace App\Models;


class News
{
     private static $news_posts = [
        
            [
                "title" => "Judul Berita Pertama",
                "slug" => "judul-berita-pertama",
                "author" => "Mohd. Alif Al Jundri",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci pariatur veritatis aut aspernatur ex. Neque quasi consequatur molestias hic recusandae, eos blanditiis deleniti ipsam repellendus deserunt at a voluptas ab fuga adipisci perspiciatis! Magni nemo, sapiente, autem aut amet, harum ipsam repudiandae in tempore modi eveniet ducimus dolores perferendis esse sunt repellat iure corporis aliquid nulla deleniti quidem rerum. At sed totam debitis deleniti repellendus suscipit placeat quam rerum ad excepturi quasi voluptates, asperiores aliquid maxime, reiciendis mollitia odit eligendi!"
            ],
        
            [
                "title" => "Judul Berita Kedua",
                "slug" => "judul-berita-kedua",
                "author" => "Ariza Saputri",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat odit aut suscipit quas et quia minus laudantium reiciendis? Vel minus alias fugiat. Voluptatibus ex amet omnis eius est quis obcaecati. Tempora dolor sed iste inventore suscipit porro et illum eligendi obcaecati, saepe reiciendis dignissimos ratione. Labore maiores similique voluptatem, quaerat perspiciatis minima ducimus nesciunt veritatis, accusantium sunt veniam velit. Facere, neque error quos voluptate illum blanditiis quisquam voluptatibus minima ut illo expedita provident praesentium nisi totam iure dolor est rerum nihil dolore. Asperiores, dolor, deserunt vero voluptatibus earum ea reprehenderit id delectus ad, inventore quis recusandae qui consequatur perspiciatis impedit!"
            ]
        
    ];

    public static function all() 
    {
        return collect(self::$news_posts);
    }

    public static function find($slug)
    {
        $news_posts = static::all() ;
        // $new_post = [];

        // // foreach ($news_posts as $p) {
        // //     if($p["slug"] === $slug) {
        // //     $new_post = $p;
        // //  }
        // // }

        return $news_posts->firstWhere('slug', $slug);
    
    }
}
