<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Http\Response;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param \Exception $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Exception $exception
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function render($request, Exception $exception)
    {
        $response = [
            'message' => (string)$exception->getMessage(),
            'status' => 400
        ];

        if ($exception instanceof HttpException) {
            $response['message'] = Response::$statusTexts[$exception->getStatusCode()];
            $response['status'] = $exception->getStatusCode();
        } else {
            if ($exception instanceof ModelNotFoundException) {
                $response['message'] = Response::$statusTexts[Response::HTTP_NOT_FOUND];
                $response['status'] = Response::HTTP_NOT_FOUND;
            }
        }

        /*if ($this->isDebugMode()) {
            $response['debug'] = [
                'exception' => get_class($exception),
                'trace' => $exception->getTrace()
            ];
        }*/

        return response()->json(['error' => $response], $response['status']);
    }

    /**
     * Determine if the application is in debug mode
     *
     * @return Boolean
     */
    public function isDebugMode()
    {
        return (boolean)env('APP_DEBUG');
    }
}
