<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-container', function (Request $request) {
    $container = $request->input('key');
    return $container;
});

Route::get('/test-provider', function (UserService $userService){
    return $userService->listUsers();
});

Route::get('/test-users', [UserController:: class, 'index']);

Route::get('/test-facade', function(UserService $userService){
    return Response::json($userService->listUsers());
});