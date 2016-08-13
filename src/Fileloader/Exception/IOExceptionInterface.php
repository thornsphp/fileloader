<?php
namespace Thorns\Fileloader\Exception;

/**
 * ------------------------------------------------------------
 * Interface IOExceptionInterface
 * ------------------------------------------------------------
 * 
 * Interface for Setters and Getters to be implemented
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * @since 0.0.1
 *
 * Interface IOExceptionInterface
 * @package Thorns\Fileloader\Exception
 */
interface IOExceptionInterface
{
    /**
     * ------------------------------------------------------------
     * Set Path
     * ------------------------------------------------------------
     * 
     * Sets the path
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @return string The path
     */
    public function setPath($path);

    /**
     * ------------------------------------------------------------
     * Get Path
     * ------------------------------------------------------------
     * 
     * Returns the path
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @return string The path
     */
    public function getPath();
}