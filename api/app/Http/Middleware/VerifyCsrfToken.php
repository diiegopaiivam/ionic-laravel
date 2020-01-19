<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://localhost/cadastro/',
        'http://localhost:8000/perfil/',
        'http://localhost:8000/cadastro/',
        'http://localhost:8000/usuario/*',
        'api/*',
        'http://localhost:8000/usuario/',
        'http://localhost:8000/perfil/*',
        'http://localhost:8000/usuario/{id}',
        'http://localhost:8000/perfil/{id}',
        
    ];
}
