<?php

return [
    /*
    |--------------------------------------------------------------------------
    | OpenAPI Document Path
    |--------------------------------------------------------------------------
    |
    | This value is the path to your OpenAPI description document. It is parsed
    | and used when validating incoming requests. This value can be a link to a
    | file or an HTTP resource.
    |
    | Ex: resource_path('openapi.yaml');
    | Ex: http://my.site/openapi.json
    */
    'document_path' => null,

    /*
    |--------------------------------------------------------------------------
    | Validate Requests
    |--------------------------------------------------------------------------
    |
    | This value is used to determine if we should validate incoming requests
    | against the description document.
    */
    'validate_requests' => true,

    /*
    |--------------------------------------------------------------------------
    | Validate Responses
    |--------------------------------------------------------------------------
    |
    | This value is used to determine if we should validate app responses
    | against the description document.
    */
    'validate_responses' => true,
];