<?php

use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {
    /* $comment = Comment::find(1);

    return $comment->post; */

    $post = Post::find(2);

    $post->comments()->create([
        'content' => 'Comentario de prueba'
    ]);

    return 'comentario creado';

});


//esto va dentro de prueba

/*  User::create([
        'name' => 'Jose',
        'email' => 'josealbertino4@gmail.com',
        'password' => bcrypt('12345678')
    ]); */

    /* Phone::create([
        'number' => '13456778',
        'user_id' => '1'
    ]); */


    //relacion uno a uno
    /* $user = User::where('id',1)
    ->with('phone') //esta linea carga el metodo en el modelo para traer la relacion del id con la tabla phones
    ->first();

    return $user; */

    /* //relacion inversa
    $phone = Phone::where('id',1)
    ->with('user')
    ->first();

    return $phone; */
