<?php

namespace App\Exceptions;

use Facade\Ignition\Exceptions\ViewException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Stancl\Tenancy\Contracts\TenantCouldNotBeIdentifiedException;
use Stancl\Tenancy\Exceptions\TenantDatabaseDoesNotExistException;
use Illuminate\Auth\AuthenticationException;
use Throwable;
use App\Traits\Tenant\ApiResponse;

class Handler extends ExceptionHandler
{
    use ApiResponse;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if (
            ($exception instanceof TenantDatabaseDoesNotExistException) ||
            (tenant() && (! tenant('ready')) && $exception instanceof QueryException) ||
            (tenant() && (! tenant('ready')) && $exception instanceof ViewException && $exception->getPrevious() instanceof QueryException)
        ) {
            return response()->view('errors.building');
        }

        if ($exception instanceof TenantCouldNotBeIdentifiedException) {
            return redirect()->route('central.landing');
        }

        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into a response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $request->expectsJson()
                    ? $this->response([],402)
                    : redirect()->guest($exception->redirectTo() ?? route('login'));
    }

}
