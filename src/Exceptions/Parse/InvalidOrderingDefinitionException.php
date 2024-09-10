<?php

namespace Devaing\RestAPI\Exceptions\Parse;

use Devaing\RestAPI\Exceptions\ApiException;
use Devaing\RestAPI\Exceptions\ErrorCodes;

class InvalidOrderingDefinitionException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_ORDERING_INVALID;

    protected $message = "Ordering defined incorrectly";
}