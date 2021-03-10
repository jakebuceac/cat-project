<?php

namespace Tsc\CatStorageSystem;

use phpDocumentor\Reflection\Types\Boolean;

interface FileSystemInterface
{
  /**
   * @param FileInterface   $file
   * @param string $newFile
   *
   *
   * @return FileInterface
   */
  public function createFile(FileInterface $file, $newFile);

  /**
   * @param FileInterface $file
   * @param string $newName
   *
   * @return FileInterface
   */
  public function renameFile(FileInterface $file, $newName);

  /**
   * @param FileInterface $file
   *
   * @return bool
   */
  public function deleteFile(FileInterface $file);


  /**
   * @param DirectoryInterface $directory
   *
   * @return DirectoryInterface
   */
  public function createDirectory(DirectoryInterface $directory);

  /**
   * @param DirectoryInterface $directory
   *
   * @return bool
   */
  public function deleteDirectory(DirectoryInterface $directory);

  /**
   * @param DirectoryInterface $directory
   * @param string $newName
   *
   * @return DirectoryInterface
   */
  public function renameDirectory(DirectoryInterface $directory, $newName);

  /**
   * @param DirectoryInterface $directory
   *
   * @return int
   */
  public function getDirectoryCount(DirectoryInterface $directory);

    /**
     * @param DirectoryInterface $directory
     * @param bool $recursive
     *
     * @return int
     */
  public function getFileCount(DirectoryInterface $directory, bool $recursive);

  /**
   * @param DirectoryInterface $directory
   *
   * @return int
   */
  public function getDirectorySize(DirectoryInterface $directory);

  /**
   * @param DirectoryInterface $directory
   *
   * @return DirectoryInterface[]
   */
  public function getDirectories(DirectoryInterface $directory);

  /**
   * @param DirectoryInterface $directory
   *
   * @return FileInterface[]
   */
  public function getFiles(DirectoryInterface $directory);
}
