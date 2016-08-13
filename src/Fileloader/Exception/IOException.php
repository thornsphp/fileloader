<?php
/**
 * Created by PhpStorm.
 * User: LukeWatts85
 * Date: 13/08/2016
 * Time: 09:28
 */

namespace Thorns\Fileloader\Exception;

/**
 * ------------------------------------------------------------
 * IOException class
 * ------------------------------------------------------------
 * 
 * Exception class thrown when a Fileloader operation fails.
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * @since 0.0.1
 *
 */
class IOException extends \RuntimeException implements IOExceptionInterface
{
    /**
     * @var string
     */
    private $path;

    /**
     * IOException constructor.
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     * @param null $path
     */
    public function __construct($message, $code = 0, \Exception $previous = null, $path = null)
    {
        $this->setPath($path);

        parent::__construct($message, $code, $previous);
    }

    /**
     * {@inheritdoc}
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return $this->path;
    }
}