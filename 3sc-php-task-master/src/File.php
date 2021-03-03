<?php

namespace Tsc\CatStorageSystem;

use DateTime;
use DateTimeInterface;
use Exception;


class File implements FileInterface
{
    public $file;
    public $fileName;
    public $fileSize;
    public $fileCreated;
    public $fileModified;
    public $fileParent;

    public function __construct($file)
    {
        $this->file = $file;

        if (file_exists($file))
        {
            $this->setName(basename($file));
            $this->setSize(filesize($file));
            try {
                $this->setCreatedTime(DateTime::createFromFormat('U', filectime($file)));
            } catch (Exception $e) {
                echo 'hit';
            }
            try {
                $this->setModifiedTime(DateTime::createFromFormat('U', filemtime($file)));
            } catch (Exception $e) {
            }

            $this->setParentDirectory($file = new Directory(dirname($file)));
        } else
            {
                throw new Exception('No such file or directory found');
            }
    }


    public function getName()
    {
        return $this->fileName;
    }

    public function setName($fileName)
    {
       $this->fileName = $fileName;
       return $this;
    }

    public function getSize()
    {
        return $this->fileSize;
    }

    public function setSize($fileSize)
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    public function getCreatedTime()
    {
        return $this->fileCreated;
    }

    public function setCreatedTime(DateTimeInterface $fileCreated)
    {
        $this->fileCreated = $fileCreated;
        return $this;
    }

    public function getModifiedTime()
    {

        return $this->fileModified;
    }

    public function setModifiedTime(DateTimeInterface $fileModified)
    {
        $this->fileModified = $fileModified;
        return $this;
    }

    public function getParentDirectory()
    {
        return $this->fileParent;
    }

    public function setParentDirectory(DirectoryInterface $fileParent)
    {
        $this->fileParent = $fileParent;
        return $this;
    }

    public function getPath()
    {
        return $this->fileParent->getPath() . "\\" . $this->fileParent->getName();
    }
}





