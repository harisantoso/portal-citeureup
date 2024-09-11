<?php

use illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
  return view(
    'posts',
    ['title' => 'Blog', 'posts' => [
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
    ]]
  );
});

Route::get('/posts/{slug}', function ($slug) {
  $posts = [
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

  $post = Arr::first($posts, function ($post) use ($slug) {
    return $post['slug'] == $slug;
  });

  return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
  return view('about', ['name' => 'Hari Santoso', 'title' => 'About']);
});

Route::get('/contact', function () {
  return view('contact', ['title' => 'Contact']);
});
