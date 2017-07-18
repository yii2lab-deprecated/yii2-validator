<?php
namespace api\tests\unit\helpers;

use Codeception\Test\Unit;
use yii2lab\validator\Validator;

class ValidatorTest extends Unit
{
	
	public function testLogin()
	{
		$validator = new Validator();
		$result = $validator->encode($this->decoded);
		expect($result)->equals($this->encoded);
	}
	
}
