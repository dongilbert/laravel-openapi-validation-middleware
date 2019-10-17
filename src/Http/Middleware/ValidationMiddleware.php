<?php declare(strict_types=1);

namespace Treblig\OpenAPIValidationMiddleware\Http\Middleware;

use Closure;
use HKarlstrom\OpenApiReader\OpenApiReader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidationMiddleware
{
    private $openApiReader;

    /**
     * ValidationMiddleware constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        $this->openApiReader = new OpenApiReader(config('openapi.document_path'));
    }

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