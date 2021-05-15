<?php

use PHPUnit\Framework\TestCase;
use App\validate;

class ValidateTest extends TestCase{
	public function test_email()
	{
		$email=validate::email('ivan.ortizal@ug.edu.ec');
		$this->assertTrue($email);

		$email=validate::email('ivan.ortizal@@ug.edu.ec');
		$this->assertFalse($email);
	}
}