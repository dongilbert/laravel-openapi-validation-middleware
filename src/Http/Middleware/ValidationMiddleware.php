<?php declare(strict_types=1);

namespace Treblig\OpenAPIValidationMiddleware\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class ValidationMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $this->validateRequest($request);

        $response = $next($request);

        $this->validateResponse($response);

        return $response;
    }

    public function validateRequest(Request $request)
    {

    }

    public function validateResponse(Response $response)
    {

    }
}