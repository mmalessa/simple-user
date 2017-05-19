<?php
namespace Domain\User;

use Ramsey\Uuid\Uuid;

class UserId
{
	private $value;

	public function __construct($value = null)
	{
		$this->value = ($value !== null) ? (string)$value : Uuid::uuid4()->toString();
	}

	public function getValue() : string
	{
		return $this->value;
	}


	public function __toString() : string
	{
		return $this->value;
	}


}