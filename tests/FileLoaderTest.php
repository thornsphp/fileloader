<?php
namespace Thorns\Fileloader\Test;

use Thorns\Fileloader\Fileloader;

/**
 * ------------------------------------------------------------
 * Class FileLoaderTest
 * ------------------------------------------------------------
 *
 * @author Luke Watts <luke@affinity4.ie>
 * @since 0.0.1
 *
 * @package Thorns\Test
 */
class FileLoaderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    public $root_path;
    
    /**
     * @var string
     */
    public $views_path;
    
    /**
     * ------------------------------------------------------------
     * FileLoaderTest constructor.
     * ------------------------------------------------------------
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     * @param null|string $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct()
    {
        $this->root_path = dirname(__DIR__);
        $this->views_path = $this->root_path . '/views';
        
        $this->fileloader = new Fileloader($this->views_path);
    }
    
    /**
     * ------------------------------------------------------------
     * Test View File
     * ------------------------------------------------------------
     *
     * Tests the Fileloader::viewFile() method works as expected
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     */
    public function testViewFile()
    {
        $view_name = 'home';
        
        $this->assertEquals($this->fileloader->viewFile($view_name), sprintf('%s/%s.thorn', $this->views_path, $view_name));
    }
    
    /**
     * ------------------------------------------------------------
     * Test Set/Get View Contents
     * ------------------------------------------------------------
     *
     * Tests the Fileloader::$view_contents setter and getter
     * methods work as expected.
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     */
    public function testSetGetViewContents()
    {
        $view_contents = 'view content';

        $this->fileloader->setViewContents($view_contents);
        
        $this->assertEquals($this->fileloader->getViewContents(), $view_contents);
    }
    
    /**
     * ------------------------------------------------------------
     * Test Set/Get View File
     * ------------------------------------------------------------
     *
     * Tests the Fileloader::$view_file setter and getter methods
     * work as expected.
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     */
    public function testSetGetViewFile()
    {
        $view_name = 'home';
        $this->fileloader->setViewFile($view_name);
        
        $this->assertEquals($this->fileloader->getViewFile(), $view_name);
    }
    
    /**
     * ------------------------------------------------------------
     * Test Set/Get Views Path
     * ------------------------------------------------------------
     *
     * Tests the Fileloader::$views_path setter and getter methods
     * work as expected.
     *
     * @author Luke Watts <luke@affinity4.ie>
     * @since 0.0.1
     *
     */
    public function testSetGetViewsPath()
    {
        $this->assertEquals($this->fileloader->getViewsPath(), $this->views_path);
    }
}
