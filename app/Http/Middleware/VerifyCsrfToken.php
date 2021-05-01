<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/igrejas/cadastrar',
        '/igrejas/editar',
        '/igrejas/excluir',
        '/hinos/cadastrar',
        '/hinos/editar',
        '/hinos/excluir',
        '/eventos/cadastrar'
    ];
}
