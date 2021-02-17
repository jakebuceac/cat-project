<?php

namespace Tsc\CatStorageSystem;

use \DateTimeInterface;

class Directory implements DirectoryInterface
{
    public $directoryName;
    public $directoryCreated;
    public $directoryPath;


    public function getName()
    {
        $this->directoryName = dirname("images/cat_1.gif");
        return $this->directoryName;
    }

    public function setName($directoryName)
    {
        $this->directoryName = $directoryName;
    }

    public function getCreatedTime()
    {
        return $this->directoryCreated = date("F d Y H:i:s.", filectime($this->directoryName));
    }

    public function setCreatedTime(DateTimeInterface $directoryCreated)
    {
        $this->directoryCreated = $directoryCreated;
    }

    public function getPath()
    {
        $this->directoryPath = getcwd();
    }

    public function setPath($directoryPath)
    {
        $this->directoryPath = $directoryPath;
    }
}






