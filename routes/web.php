<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feed', function () {
    $feedItems = json_decode(json_encode([
        [
            'profile' => [
                'displayName' => 'Michael',
                'avatar' => '/images/michael.png',
                'handle' => '@mmich_jj'
            ],
            'postedDateTime' => '3h',
            'content' => <<<str
            <p>
                I made this! <a href="#">#myartwork</a> <a href="#">#pixl</a>
                <img src="/images/simon-chilling.png" alt="" />
            </p>
            str,
            'likeCount' => 23,
            'commentCount' => 34,
            'repostCount' => 45,
            'replies' => [
                [
                    'profile' => [
                        'displayName' => 'Simon',
                        'avatar' => '/images/simon-chilling.png',
                        'handle' => '@simonswiss'
                    ],
                    'likeCount' => 5,
                    'commentCount' => 2,
                    'repostCount' => 1,
                    'postedDateTime' => '1h',
                    'content' => '<p>Heh — this looks just like me!</p>',

                ],
            ]
        ],
    ]));

    return view('feed', compact('feedItems'));
});

Route::get('/profile', function () {
    $feedItems = json_decode(json_encode([
        [
            'profile' => [
                'displayName' => 'Michael',
                'avatar' => '/images/michael.png',
                'handle' => '@mmich_jj'
            ],
            'postedDateTime' => '3h',
            'content' => <<<str
            <p>
                I made this! <a href="#">#myartwork</a> <a href="#">#pixl</a>
                <img src="/images/simon-chilling.png" alt="" />
            </p>
            str,
            'likeCount' => 23,
            'commentCount' => 34,
            'repostCount' => 45,
            'replies' => [
                [
                    'profile' => [
                        'displayName' => 'Simon',
                        'avatar' => '/images/simon-chilling.png',
                        'handle' => '@simonswiss'
                    ],
                    'likeCount' => 5,
                    'commentCount' => 2,
                    'repostCount' => 1,
                    'postedDateTime' => '1h',
                    'content' => '<p>Heh — this looks just like me!</p>',

                ],
            ]
        ],
    ]));
    
    return view('profile', compact('feedItems'));
});