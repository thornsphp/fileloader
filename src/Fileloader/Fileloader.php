<?php
namespace Thorns\Fileloader;

/**
 * ------------------------------------------------------------
 * Class Fileloader
 * ------------------------------------------------------------
 *
 * @author Luke Watts <luke@affinity4.ie>
 * @since 0.0.1
 *
 * @package Thorns\Fileloader
 */
class Fileloader
{
    /**
     * @var string
     */
    public $views_path;
    
    /**
     * @var string
     */
    public $view_file;
    
    /**
     * @var string
     */
    public $view_contents;
    
    /**
     * ------------------------------------------------------------
     * Fileloader constructor
     * ------------------------------------------------------------
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @param string $views_path
     */
    public function __construct($views_path)
    {
        $this->setViewsPath($views_path);
    }
    
    public function viewFile($view_name)
    {
        $this->setViewFile($view_name);
        
        return sprintf('%s/%s.thorn', $this->getViewsPath(), $this->getViewFile());
    }
    
    /**
     * ------------------------------------------------------------
     * Set Views Path
     * ------------------------------------------------------------
     *
     * Sets the views path
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @param string $views_path
     */
    public function setViewsPath($views_path)
    {
        $this->views_path = $views_path;
    }
    
    /**
     * ------------------------------------------------------------
     * Get Views Path
     * ------------------------------------------------------------
     *
     * Returns the views path
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @return string
     */
    public function getViewsPath()
    {
        return $this->views_path;
    }
    
    /**
     * ------------------------------------------------------------
     * Set View File
     * ------------------------------------------------------------
     *
     * Sets the $view_file property.
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @param string $view_file
     */
    public function setViewFile($view_file)
    {
        $this->view_file = $view_file;
    }
    
    /**
     * ------------------------------------------------------------
     * Get View File
     * ------------------------------------------------------------
     *
     * Returns the $view_file property
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @return string
     */
    public function getViewFile()
    {
        return $this->view_file;
    }
    
    /**
     * ------------------------------------------------------------
     * Set View Contents
     * ------------------------------------------------------------
     *
     * Sets the $view_contents property.
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @param string $view_contents
     */
    public function setViewContents($view_contents)
    {
        $this->view_contents = $view_contents;
    }
    
    /**
     * ------------------------------------------------------------
     * Get View Contents
     * ------------------------------------------------------------
     *
     * Returns the $view_contents property
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @return string
     */
    public function getViewContents()
    {
        return $this->view_contents;
    }
}
