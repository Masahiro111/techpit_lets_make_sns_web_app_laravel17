<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            (object) [
                'id' => 1,
                // 'title' => 'タイトル1',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque laborum quasi repellendus dicta iste voluptas nesciunt, autem quas placeat velit. Dicta voluptas cum, rerum magnam minima repellendus neque voluptatem voluptatibus.',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 1,
                    'name' => 'ユーザー名1',
                    'at_name' => 'hello_my_titter',
                ],
            ],
            (object) [
                'id' => 2,
                // 'title' => 'タイトル2',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque laborum quasi repellendus dicta iste voluptas nesciunt, autem quas placeat velit. Dicta voluptas cum, rerum magnam minima repellendus neque voluptatem voluptatibus.',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 2,
                    'name' => 'ユーザー名2',
                    'at_name' => 'hello_my_titter2',
                ],
            ],
            (object) [
                'id' => 3,
                // 'title' => 'タイトル3',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque laborum quasi repellendus dicta iste voluptas nesciunt, autem quas placeat velit. Dicta voluptas cum, rerum magnam minima repellendus neque voluptatem voluptatibus.',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 3,
                    'name' => 'ユーザー名3',
                    'at_name' => 'hello_my_titter',
                ],
            ],
        ];

        return view('articles.index', compact('articles'));
    }
}
