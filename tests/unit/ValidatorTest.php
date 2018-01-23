<?php
namespace tests\unit;

use Codeception\Test\Unit;
use yii2lab\validator\DynamicModel;

class ValidatorTest extends Unit
{
	public $rules = [
		['amount', 'integer'],
		['is', 'boolean'],
	];

	public function testSuccess()
	{
		$validator = new DynamicModel();
		$validator->loadRules($this->rules);
		$validator->loadData([
			'amount' => 100,
			'is' => '1',
		]);
		expect($validator->validate())->equals(true);
	}

	public function testFail()
	{
		$validator = new DynamicModel();
		$validator->loadRules($this->rules);
		$isValid = $validator->validateData([
			'amount' => 'qwe',
			'is' => 'qwe',
		]);
		expect($isValid)->equals(false);
	}
	
}
