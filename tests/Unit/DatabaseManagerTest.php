<?php

namespace Tests\Unit;

use App\Database\DatabaseManager;
use Tests\TestCase;

class DatabaseManagerTest extends TestCase
{
    public $dbManager;

    protected function setUp(): void
    {
        parent::setUp();
        $this->dbManager = new DatabaseManager();
    }

    public function test_create_database()
    {
        $this->assertTrue($this->dbManager->create('db_test'));
    }

    public function test_drop_database()
    {
        $this->assertTrue($this->dbManager->drop('db_test'));
    }
}
