<?php

use App\Http\Middleware\EndMiddleware;
use App\Http\Middleware\StartMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        
        // // Adiconar a todas as rotas
        // $middleware->prepend([
        //     StartMiddleware::class,
        // ]);

        // // Adicionar no fianl de todas as respostar de todas as rotas
        // $middleware->append([
        //     EndMiddleware::class
        // ]);

        // Criar grupo de middleware
        $middleware->prependToGroup('inicio',  [
            StartMiddleware::class
        ]);

        $middleware->appendToGroup('fim',  [
            EndMiddleware::class
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
