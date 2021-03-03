<?php

require 'vendor/autoload.php';

use Tsc\CatStorageSystem\File;
use Tsc\CatStorageSystem\FileSystem;
use Tsc\CatStorageSystem\Directory;

$file1 = new File('images/cat_1.gif');
$file2 = new File('images/cat_2.gif');
$file3 = new File('images/cat_3.gif');

$directory = new Directory('images');
$directory1 = new Directory('images/Directory1');
$directory2 = new Directory('images/Directory2');
$directory3 = new Directory('images/Directory3');
$action = new FileSystem();

//var_dump($file1);

/*echo $action->createDirectory($directory1);
echo $action->createDirectory($directory2);
echo $action->createDirectory($directory3);*/

echo $action->createFile($file1, $directory, 'animal_1.gif');
//echo $action->createFile($file2, 'images/Directory2/animal_2.gif');
//echo $action->createFile($file3, 'images/Directory3/animal_3.gif');

//$file3 = new File('images/Directory3/animal_3.gif');

//echo $action->deleteFile($file3);
//echo $action->deleteDirectory($directory2);

//echo $action->renameFile($file1, 'cat_1.gif');
//echo $action->renameFile($file2, 'cat_2.gif');
/*
echo $action->renameDirectory($directory1, 'images/Folder1');
echo $action->renameDirectory($directory2, 'images/Folder2');*/

//var_dump($action->getDirectoryCount($directory));
//var_dump($action->getFileCount($directory));

//echo $action->getDirectorySize($directory);

//var_dump($action->getDirectories($directory));
//var_dump($action->getFiles($directory));

//var_dump($directory);
//var_dump($file1);





