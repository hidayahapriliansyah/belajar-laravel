<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adi Muhamad Firmansyah",
            "body" => "
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem, suscipit incidunt impedit officiis aperiam quisquam. Debitis magnam mollitia eligendi. Quis sit quod, earum, optio rerum tempore voluptas reiciendis sed et corrupti, omnis natus? Fugiat quia aperiam quam architecto quis quasi quae delectus, nesciunt, cumque perspiciatis nam. Fugiat, esse omnis modi aperiam porro magnam sequi ipsum nobis sint excepturi eaque. Commodi et suscipit dicta. Velit eveniet nihil doloremque inventore cum, ea, tenetur expedita unde facere at reprehenderit nostrum. Dolor nam ea, maiores odio at cum ullam accusamus quaerat ducimus hic eius, ipsam reprehenderit, quae maxime minima sequi porro fuga dignissimos. Quia."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Hidayah Apriliansyah",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus minus dolore vel qui eligendi aliquid nesciunt? Provident voluptatum culpa ducimus eius. Dolorem ratione quasi in inventore veritatis praesentium culpa, voluptate aliquid corrupti, quibusdam sit nostrum! Ab debitis aspernatur, repellat ut voluptatem non id natus quibusdam aliquid ipsam neque pariatur aperiam facere. Quisquam pariatur cum cumque sit ab ad quam aspernatur fuga amet facilis obcaecati in eveniet maxime quo provident voluptates, impedit, adipisci rem dolores? Repellendus consectetur, praesentium, reiciendis placeat, commodi sint dolores nisi neque velit mollitia quaerat temporibus nam magni quae voluptatibus labore provident corrupti distinctio ratione! Cupiditate deserunt eos, aliquam iure laboriosam dolorum tempora rem facilis corrupti nostrum doloribus, ut quam delectus magni modi quo officiis. Autem perferendis adipisci consequatur in illum fugiat magnam maxime ad eius. Vero, dolorem excepturi. Aliquid atque officia possimus. Nisi, numquam provident eaque sit quasi assumenda itaque, amet voluptates omnis saepe ipsam. Reprehenderit, numquam?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
