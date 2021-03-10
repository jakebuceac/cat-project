<?php

namespace Tsc\CatStorageSystem;

use DirectoryIterator;
use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class FileSystem implements FileSystemInterface
{
    public function createFile(FileInterface $file, $newFile)
    {
        $file = $file->getPath() . '\\' . $file->getName();

        if (!copy($file, $newFile))
        {
            echo "failed to copy $file...\n";
        }

        return $newFile;
    }

    public function renameFile(FileInterface $file, $newName)
    {
        $oldName = $file->getPath() . '\\' . $file->getName();
        $change = $file->getPath() . '\\' . $newName;

        rename($oldName, $change);

        return $change;
    }

    public function deleteFile(FileInterface $file)
    {
        $filePath = $file->getPath() . '\\' . $file->getName();
        return unlink($filePath);
    }

    public function createDirectory(DirectoryInterface $directory)
    {
        $dir = $directory->getPath() . '\\' . $directory->getName();

        if (!mkdir($dir))
        {
            echo "failed to create $dir..\n";
        }
        return $dir;

    }

    public function deleteDirectory(DirectoryInterface $directory)
    {
        $directoryPath = $directory->getPath() . '\\' . $directory->getName();
        return rmdir($directoryPath);
    }

    public function renameDirectory(DirectoryInterface $directory, $newName)
    {
        $oldName = $directory->getPath() . '\\' . $directory->getName();
        $change = $directory->getPath() . '\\' . $newName;

        rename($oldName, $change);

        return $change;
    }

    public function getDirectoryCount(DirectoryInterface $directory)
    {
        $counter = 0;

        $iterator = new DirectoryIterator($directory->getPath() . '\\' . $directory->getName());

        foreach ($iterator as $item) {
            if ($item->isDir() && ! $item->isDot()) {
                $counter++;
            }
        }
        return $counter;
    }

    public function getFileCount(DirectoryInterface $directory, bool $recursive = false)
    {
        $iterator = new FilesystemIterator($directory->getPath() . '\\' . $directory->getName(), FilesystemIterator::SKIP_DOTS);
        return iterator_count($iterator);
    }

    public function getDirectorySize(DirectoryInterface $directory)
    {
        $size = 0;
        $directory = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory->getPath() . '\\' . $directory->getName()));
        foreach ($directory as $file){
            $size += $file->getSize();
    }
       return $size;
    }

    public function getDirectories(DirectoryInterface $directory)
    {
        $directories = [];
        $dir = new DirectoryIterator($directory->getPath() . '\\' . $directory->getName());
        foreach ($dir as $dirInfo)
        {
            if ($dirInfo->isDir() && ! $dirInfo->isDot())
            {
                $directories[] = new Directory($dirInfo->getFilename());
            }
        }
        return $directories;

    }

    public function getFiles(DirectoryInterface $directory)
    {
        $files = [];
        $dir = new DirectoryIterator($directory->getPath() . '\\' . $directory->getName());
        foreach ($dir as $fileInfo)
        {
            if ($fileInfo->isFile() && ! $fileInfo->isDot())
            {
                $files[] = new File($fileInfo);
            }
        }
        return $files;

    }

}