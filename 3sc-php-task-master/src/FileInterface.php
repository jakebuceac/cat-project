<?php

namespace Tsc\CatStorageSystem;

use \DateTimeInterface;

interface FileInterface
{
  /**
   * @return string
   */
  public function getName();

  /**
   * @param string $fileName
   *
   * @return $this
   */
  public function setName($fileName);

  /**
   * @return int
   */
  public function getSize();

  /**
   * @param int $fileSize
   *
   * @return $this
   */
  public function setSize($fileSize);

  /**
   * @return DateTimeInterface
   */
  public function getCreatedTime();

  /**
   * @param DateTimeInterface $fileCreated
   *
   * @return $this
   */
  public function setCreatedTime(DateTimeInterface $fileCreated);

  /**
   * @return DateTimeInterface
   */
  public function getModifiedTime();

  /**
   * @param DateTimeInterface $fileModified
   *
   * @return $this
   */
  public function setModifiedTime(DateTimeInterface $fileModified);

  /**
   * @return DirectoryInterface
   */
  public function getParentDirectory();

  /**
   * @param DirectoryInterface $fileParent
   *
   * @return $this
   */
  public function setParentDirectory(DirectoryInterface $fileParent);

  /**
   * @return string
   */
  public function getPath();
}
