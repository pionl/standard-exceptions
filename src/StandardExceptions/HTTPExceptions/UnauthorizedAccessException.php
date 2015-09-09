<?php
namespace StandardExceptions\HttpExceptions;
use StandardExceptions\Traits\ThrowIf;

/**
* Use this exception when an operation relative to HTTP
* results in an unauthorized exception. Note that Forbidden relates
* permissions missing in an authenticated scenario. This exception
* relates to a request that is not authorized due to missing credentials.
* 
* Note that you should not mix HTTP and validation. A validation class
* can be used in another context than an HTTP request. But if your controler
* needs to warn you that your http request is invalid, use this.
*
* Generally speaking a validator returns a validation except caught by the controller
* and the controller throws an HTTP exception that signals the return of an
* HTTP error response (400 or 500).
*
* The HttpException is not a valid response, it's a signal!
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class UnauthorizedAccessException extends \RuntimeException
{
    use ThrowIf;

    public function __construct($message = 'Current credentials and identification is not enough to authorize operation', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }

}