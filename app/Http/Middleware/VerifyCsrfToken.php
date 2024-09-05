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
        'api/*', // Excluir todas las rutas que comienzan con /api de la verificación CSRF
        'sanctum/csrf-cookie', // Excluir el endpoint CSRF cookie
    ];
}