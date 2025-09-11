<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', function () {
    return "LISTADO DE PRODUCTOS";
});

Route::get('products/create', function () {
    return "FORMULARIO DE CREACIÓN DE PRODUCTOS";
});

Route::get('products/{id}/{category?}', function ($id, $category = null) {
    if ($category == null) {
        return "Deatlle de cada producto: " . $id;
    } else {
        return "Deatlle de cada producto: " . $id . " de la categoria: " . $category;
    }
});
