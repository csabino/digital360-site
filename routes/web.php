<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/sobre', [SiteController::class, 'about'])->name('about');
Route::get('/servicos', [SiteController::class, 'services'])->name('services.index');
Route::get('/servicos/{slug}', [SiteController::class, 'serviceShow'])->name('services.show');
Route::get('/produtos', [SiteController::class, 'products'])->name('products.index');
Route::get('/produtos/{slug}', [SiteController::class, 'productShow'])->name('products.show');
Route::get('/contato', [SiteController::class, 'contact'])->name('contact');
Route::post('/contato', [SiteController::class, 'contactStore'])->name('contact.store');

// Hotsites de produtos — páginas estáticas sem menu/rodapé, linkadas apenas via "Link do produto" no painel.
Route::view('/ponto-vivo', 'hotsite.ponto-vivo')->name('hotsite.ponto-vivo');
Route::view('/orquestra-ia', 'hotsite.orquestra-ia')->name('hotsite.orquestra-ia');
