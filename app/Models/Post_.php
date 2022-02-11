<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Aldi Majide',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit non ipsum incidunt, ullam atque magnam itaque hic assumenda optio nostrum eligendi doloribus quo fuga dolore reprehenderit officia? Libero hic cumque ad vero autem quae? Culpa deleniti amet explicabo porro cupiditate molestiae sint laudantium. Quam molestiae ratione sed facilis. Eius minima possimus maiores pariatur delectus, dolor in modi quod dolorum repellendus? Magni, illo alias debitis officia perspiciatis doloribus fuga dolorum. Commodi quo sequi odit distinctio ex optio possimus repellat, laborum rem?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Uhuy',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias architecto nobis voluptate nesciunt eos repellat doloribus quas animi ducimus rem. Quidem iure nihil ducimus ea at eveniet voluptate libero laborum quibusdam repudiandae. Adipisci fugit rem provident, eligendi iure ducimus eveniet asperiores assumenda. Possimus ex asperiores quod animi odit enim optio corrupti, soluta voluptates quam tempore ipsa iusto provident reiciendis ullam repellat quo magnam adipisci, cupiditate dolorem incidunt voluptatibus maiores nemo ipsum! Veniam adipisci accusantium porro et. Quis quaerat omnis eos error maxime ratione tempore, asperiores labore sapiente temporibus! Alias, sequi odit ea totam iusto cupiditate cumque facere iure tempora. Magni?'
        ],
    ];

    public static function all()
    {
        // self utk property static
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // static utk method static
        $posts = static::all();

        // jauh lebih simple jika dijadikan collection
        return $posts->firstWhere('slug', $slug);
    }
}
