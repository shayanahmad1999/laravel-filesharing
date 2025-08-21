<?php

use App\Models\User;
use Grazulex\ShareLink\Facades\ShareLink;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::view('/', 'welcome');

Route::get('/share-pdf', function () {
    // --- Share a File with Expiration --- //

    $file = public_path('sharelink/images_20250723_125316.pdf');
    $link = ShareLink::create($file)
        ->expiresIn(60) // 60 minutes
        ->maxClicks(5)
        // ->withPassword('secret123')
        ->generate();
    echo $link->url;
});

Route::get('/share-route', function () {
    // --- Share a Route --- //
    $link = URL::temporarySignedRoute(
        'user.profile',
        now()->addSeconds(120),
        ['user' => 123]
    );

    return $link;
});

Route::get('/user/profile/{user}', fn($user) => "Hi User {$user}!")
    ->name('user.profile')->middleware('signed');
