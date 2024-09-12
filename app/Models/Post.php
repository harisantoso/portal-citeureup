<?php

namespace App\Models;

use Illuminate\Support\Arr;


class Post
{
  public static function all()
  {
    return [
      [
        'id' => 1,
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1',
        'author' => 'Hari Santoso',
        'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores alias cupiditate magni eius nam inventore sint et tenetur eligendi. Error iusto officia fugiat aspernatur ducimus praesentium quo soluta dolor eveniet.'
      ],
      [
        'id' => 2,
        'slug' => 'judul-artikel-2',
        'title' => 'Judul Artikel 2',
        'author' => 'Winda Indria',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quibusdam rem fugit deleniti laudantium eveniet quidem nemo saepe, repellendus cupiditate accusamus consequatur nisi aspernatur dolorem soluta nihil. Blanditiis, labore laboriosam.'
      ]
    ];
  }

  public static function find($slug): array
  {
    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

    if (! $post) {
      abort(404);
    }

    return $post;
  }
}
