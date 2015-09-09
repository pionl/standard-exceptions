<?php
namespace StandardExceptions\IOExceptions;
use StandardExceptions\Traits\ThrowIf;

/**
* Use this exception when an IO operation tries to write some content to
* a file but cannot do so due to filesystem permissions.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class FileNotWritableException extends \RuntimeException
{
    use ThrowIf;

    public function __construct($message = 'Cannot write to specified file resource', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}