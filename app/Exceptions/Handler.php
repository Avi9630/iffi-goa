<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Register the exception handling callbacks.
     */
    public function register(): void
    {
        //
    }

    /**
     * Render an exception into an HTTP response.
     */
    public function render($request, Throwable $exception)
    {
        if (app()->environment('production')) {

            // Database crash
            if ($exception instanceof QueryException) {
                return response()->view('errors.503', [], 503);
            }

            // Other unexpected system errors
            if (! $exception instanceof HttpException) {
                return response()->view('errors.500', [], 500);
            }
        }

        return parent::render($request, $exception);
    }
}
