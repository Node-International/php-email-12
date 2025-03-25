<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/userHelper.php';

use PHPUnit\Framework\TestCase;

class UserHelperTest extends TestCase
{
    private array $users;

    protected function setUp(): void
    {
        $this->users = [
            ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
            ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com'],
        ];
    }

    public function testGetEmailByIdReturnsValidEmailFormat()
    {
        foreach ($this->users as $user) {
            $email = getEmailById($this->users, $user['id']);
            $this->assertTrue(filter_var($email, FILTER_VALIDATE_EMAIL) !== false, "Email format is invalid");
        }
    }

    public function testGetEmailByIdReturnsNullForInvalidId()
    {
        $email = getEmailById($this->users, 10);
        $this->assertNull($email);
    }
}