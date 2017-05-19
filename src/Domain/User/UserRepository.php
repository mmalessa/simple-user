<?php
namespace Domain\User;

interface UserRepository
{
	public function getById(UserId $userId);

	public function save(User $user);
}