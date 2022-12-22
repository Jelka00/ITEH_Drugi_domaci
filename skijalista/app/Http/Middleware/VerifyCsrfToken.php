<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'http://127.0.0.1:8000/users',
        'http://127.0.0.1:8000/users/10',
        'http://127.0.0.1:8000/posts',
        'http://127.0.0.1:8000/posts/2',
        'http://127.0.0.1:8000/restourants',
        'http://127.0.0.1:8000/restourants/2'
    ];
}
