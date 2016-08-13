<?php
namespace Thorns\Fileloader;
use Thorns\Fileloader\Exception\FileNotFoundException;
use Thorns\Fileloader\Exception\IOException;

/**
 * ------------------------------------------------------------
 * Class Fileloader
 * ------------------------------------------------------------
 *
 * @author Luke Watts <luke@affinity4.ie>
 * @since 0.0.1
 *
 * @version 0.0.1
 *
 * @package Thorns\Fileloader
 */
class Fileloader
{
    /**
     * @var string
     */
    private $views_path;
    
    /**
     * @var string
     */
    private $view_file;
    
    /**
     * @var string
     */
    private $view_contents;
    
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

    /**
     * ------------------------------------------------------------
     * View File Contents
     * ------------------------------------------------------------
     * 
     * Returns the Contents of the view passed in by name.
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @param $view_name
     * @return string
     */
    public function viewFileContents($view_name)
    {
        $this->viewFile($view_name)->viewContents();

        return $this->getViewContents();
    }

    /**
     * ------------------------------------------------------------
     * View Contents
     * ------------------------------------------------------------
     * 
     * Sets the Fileloader::view_contents property using the
     * setViewContents() method based on the current value
     * of Fileloader::view_file
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @throws \Exception
     */
    public function viewContents()
    {
        if ($this->getViewFile() !== null) {
            if (stream_is_local($this->getViewsPath()) && !@readfile($this->getViewFile()))
                throw new FileNotFoundException(sprintf('No such view `%s`', $this->getViewFile()));

            $this->setViewContents(file_get_contents($this->getViewFile()));
        } else {
            throw new IOException('Fileloader::view_file property not yet set.');

            return false;
        }
    }

    /**
     * ------------------------------------------------------------
     * View File
     * ------------------------------------------------------------
     *
     * Prepend the Fieloader::view_file property with path and
     * appends .thorn extension
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @param $view_name
     * @return $this
     */
    public function viewFile($view_name)
    {
        $this->setViewFile($view_name);

        $this->setViewFile(sprintf('%s/%s.thorn', $this->getViewsPath(), $this->getViewFile()));

        return $this;
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
