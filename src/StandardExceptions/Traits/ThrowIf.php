<?php
namespace StandardExceptions\Traits;

/**
 * Trait ThrowIf
 * Enables throwing exceptions only if conditon is not met
 *
 * @package StandardExceptions\Traits
 * @author Martin Kluska <martin.kluska@imakers.cz>
 * @license MIT
 */
trait ThrowIf
{
    /**
     * Checks if the values is true. If not throws exception.
     * @param bool $value
     * @param string $message
     * @return bool
     * @throws static
     */
    static public function ifTrue($value, $message = null)
    {
        if ($value === true) {
            if (is_null($message)) {
                throw new static();
            } else {
                throw new static($message);
            }
        }

        return $value;
    }

    /**
     * Checks if the values is false. If not throws exception.
     *
     * @param bool $value
     * @return bool
     * @throws static
     */
    static public function ifFalse($value, $message = null) {
        return static::ifTrue($value === false, $message);
    }

    /**
     * Asserts the value and throws the exception if subclass implements
     * this functiond. Ideal for throwing InvalideStringException::throwIf(value) to
     * met the desired condition
     *
     * @param $value
     *
     * @return mixed
     * @throws static
     */
    static public function throwIf($value) {
        return $value;
    }
}