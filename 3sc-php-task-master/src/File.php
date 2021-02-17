<?php

namespace Tsc\CatStorageSystem;

use DateTimeInterface;


class File implements FileInterface
{
    public $fileName;
    public $fileSize;
    public $fileCreated;
    public $fileModified;
    public $fileParent;


    public function getName()
    {
        return basename($this->fileName);
    }

    public function setName($fileName)
    {
       $this->fileName = $fileName;
    }

    public function getSize()
    {
        return $this->fileSize = fileSize($this->fileName);
    }

    public function setSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }

    public function getCreatedTime()
    {
        return $this->fileCreated = date("F d Y H:i:s.", filectime($this->fileName));

    }

    public function setCreatedTime(DateTimeInterface $fileCreated)
    {
        $this->fileCreated = $fileCreated;
    }

    public function getModifiedTime()
    {
        return $this->fileModified = date("F d Y H:i:s.", filemtime($this->fileName));

    }

    public function setModifiedTime(DateTimeInterface $fileModified)
    {
        $this->fileModified = $fileModified;
    }

    public function getParentDirectory()
    {

    }

    public function setParentDirectory(DirectoryInterface $fileParent)
    {
        // TODO: Implement setParentDirectory() method.
    }

    public function getPath()
    {
        // TODO: Implement getPath() method.
    }
}



