<?php
namespace Domain\User;

use Domain\User\UserId;
use ValueObjects\Internet\Email;

class User implements \JsonSerializable
{

	/**
	 * @var UserId
	 */
	private $id;

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var string
	 */
	private $surname;

	/**
	 * @var Email
	 */
	private $email;

	/**
	 * @var bool
	 */
	private $active;


	public function __construct(UserId $id, string $name, string $surname, Email $email = null)
	{
		$this->id = $id;
		$this->name = $name;
		$this->surname = $surname;
		$this->email = $email;
		$this->active = true;
	}

	public function getId() : UserId
	{
		return $this->id;
	}

	public function remove()
	{
		$this->active = false;
	}

	public function jsonSerialize()
	{
		return [
				'id' => (string)$this->id,
				'name' => $this->name,
				'surname' => $this->surname,
				'email' => $this->email,
				'active' => $this->active
		];
	}
}