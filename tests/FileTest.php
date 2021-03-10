<?php

namespace Tsc\CatStorageSystem\Tests;

use PHPUnit\Framework\TestCase;
use Tsc\CatStorageSystem\File;

class FileTest extends TestCase
{
    protected File $file;

    protected function setUp(): void
    {
        $this->file = new File();
    }

    /** @test */
    public function sets_file_name()
    {
        $result = $this->file->setName('cat_1.gif');
        $this->assertSame($this->file, $result);
    }
}