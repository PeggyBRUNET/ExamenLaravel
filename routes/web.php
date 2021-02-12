<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasketController;



// Les routes de gestion du panier
Route::get('basket',[ BasketController::class, 'show' ] )->name('show');
Route::post('basket/add/{product}', [ BasketController::class, 'add' ])->name('add');
Route::get('basket/remove/{product}', [ BasketController::class, 'remove' ])->name('remove');
Route::get('basket/empty', [ BasketController::class, 'empty' ])->name('empty');

//Aloïs, j'ai voulu faire un panier mais j'ai une erreur : je voulais à l'aide d'exemple essayer de voir comment mettre
//en place  l'interface. Je pense que ça vient en partie du fait que je n'ai pas réussi  à mettre le provider BasketServiceProvider au tableau
//providers du fichier de configuration config\app.php (Je n'ai pas dû le mettre au bon endroit) :


