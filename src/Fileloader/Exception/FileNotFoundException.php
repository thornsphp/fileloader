<?php
namespace Thorns\Fileloader\Exception;

/**
 * ------------------------------------------------------------
 * Class FileNotFoundException
 * ------------------------------------------------------------
 * 
 * Exception throws when a File not found error occurs
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * @since 0.0.1
 *
 * @package Thorns\Fileloader\Exception
 */
class FileNotFoundException extends IOException
{
    /**
     * ------------------------------------------------------------
     * FileNotFoundException constructor.
     * ------------------------------------------------------------
     *
     * Construct error message
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @param null $message
     * @param int $code
     * @param \Exception|null $previous
     * @param null $path
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null, $path = null)
    {
        if (null === $message) {
            if (null === $path) {
                $message = 'File could not be found.';
            } else {
                $message = sprintf('File "%s" could not be found.', $path);
            }
        }

        parent::__construct($message, $code, $previous, $path);
    }
}