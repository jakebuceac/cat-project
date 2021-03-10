<?php


namespace Tsc\CatStorageSystem\Tests;


use DateTime;
use PHPUnit\Framework\TestCase;
use Tsc\CatStorageSystem\Directory;

class DirectoryTest extends TestCase
{
    protected Directory $directory;

    protected function setUp(): void
    {
        // creates a new Directory object
        $this->directory = new Directory();
    }

    /** @test */
    public function setName_fn_returns_directory_object()
    {
        // declares variable that parses a string into the function setName()
        $directoryName = $this->directory->setName('folder');

        // checks if the variable is a Directory type
        $this->assertSame($this->directory, $directoryName);
    }

    /** @test */
    public function getName_fn_returns_what_is_parsed_in_setName()
    {
        // parses a string into the function setName()
        $this->directory->setName('folder');

        // checks if the getName() function gets the same name that was parsed into the setName() function
        $this->assertEquals('folder', $this->directory->getName());
    }

    /** @test */
    public function setCreatedTime_fn_returns_datetime_object()
    {
        // declares variable that parses a DateTime into the function setCreatedTime()
        $fileCreated = $this->directory->setCreatedTime(new DateTime());

        // checks if the variable is a File type
        $this->assertSame($this->directory, $fileCreated);
    }

    /** @test */
    public function getCreatedTime_fn_returns_what_is_parsed_in_setCreatedTime()
    {
        // declares a variable that creates a new DateTime object
        $fileCreated = new DateTime();

        // parses the variable into the setCreatedTime() function
        $this->directory->setCreatedTime($fileCreated);

        // checks if the getCreatedTime() function gets the same DateTime object that was parsed
        // into the setCreatedTime() function
        $this->assertEquals($fileCreated, $this->directory->getCreatedTime());
    }

    /** @test */
    public function setPath_fn_returns_directory_object()
    {
        // declares variable that parses a string into the function setPath()
        $directoryName = $this->directory->setPath('\my\folder');

        // checks if the variable is a Directory type
        $this->assertSame($this->directory, $directoryName);
    }

    /** @test */
    public function getPath_fn_returns_what_is_parsed_in_setPath()
    {
        // parses a string into the function setPath()
        $this->directory->setPath('\my\folder');

        // checks if the getPath() function gets the same name that was parsed into the setPath() function
        $this->assertEquals('\my\folder', $this->directory->getPath());
    }

}