<?php
namespace StandardExceptions\IOExceptions;
use StandardExceptions\Traits\ThrowIf;

/**
* Use this exception when an IO operation based on a communication
* protocole receives an unexpected response from the remote host.
*
* For example, establishing an FTP connection on a SFTP server will
* yield unexpected communication dialog. In this event, an 
* UnexpectedResponseException should be thrown.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class UnexpectedResponseException extends \RuntimeException
{
    use ThrowIf;

    public function __construct($message = 'Unexpected response received while communicating with remote host', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}