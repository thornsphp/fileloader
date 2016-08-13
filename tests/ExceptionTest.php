<?php
namespace Thorns\Fileloader\Test;

use PHPUnit\Framework\TestCase;
use Thorns\Fileloader\Exception\FileNotFoundException;
use Thorns\Fileloader\Exception\IOException;

/**
 * ------------------------------------------------------------
 * Class IOExceptionTest
 * ------------------------------------------------------------
 *
 * Tests the IOException class
 *
 * @author Luke Watts <luke@affinity4.ie>
 * @since 0.0.1
 */
class ExceptionTest extends TestCase
{
    /**
     * @expectedException \Thorns\Fileloader\Exception\FileNotFoundException
     * @expectedExceptionMessage File not found
     */
    public function testFileNotFoundException()
    {
        throw new FileNotFoundException('File not found');
    }

    /**
     * @expectedException \Thorns\Fileloader\Exception\IOException
     * @expectedExceptionMessage IO Exception occurred
     */
    public function testIOException()
    {
        throw new IOException('IO Exception occurred');
    }
}