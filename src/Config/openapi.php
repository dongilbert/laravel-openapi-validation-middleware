<?php declare(strict_types=1);

return [
    'document_path' => env('TREBLIG_OPENAPI_DOCUMENT_PATH', resource_path('openapi.json')),
    'validate_requests' => env('TREBLIG_OPENAPI_VALIDATE_REQUESTS', true),
    'validate_responses' => env('TREBLIG_OPENAPI_VALIDATE_RESPONSES', true),
];