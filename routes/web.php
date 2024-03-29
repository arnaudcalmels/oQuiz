<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', [
    'as' => 'home',
    'uses' => 'MainController@home',
]);

$router->get('/quiz/{id}', [
    'as' => 'quiz',
    'uses' => 'QuizController@quiz',
]);

$router->post('/signin', [
    'as' => 'signin',
    'uses' => 'UserController@signin',
]);

$router->post('/signup', [
    'as' => 'signup',
    'uses' => 'UserController@signup',
]);

$router->get('/logout', [
    'as' => 'user_logout',
    'uses' => 'UserController@logout',
]);

$router->get('/signup-confim', [
    'as' => 'signup-confirm',
    'uses' => 'MainController@signupConfirm',
]);

$router->get('/account', [
    'as' => 'account',
    'uses' => 'UserController@profile',
]);

$router->post('/quiz/{id}', [
    'as' => 'quiz',
    'uses' => 'QuizController@quiz',
]);

$router->get('/tag', [
    'as' => 'tag',
    'uses' => 'TagController@tags',
]);

$router->get('/quiz/tag/{id}', [
    'as' => 'quiz-by-tag',
    'uses' => 'QuizController@listByTag',
]);