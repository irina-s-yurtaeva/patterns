<?php
namespace Patterns\Decorator;

use Patterns\User;

class HouseKeeperDecorator extends User
{
	protected User $user;
	protected int $cash;

	public function __constructor(User $user)
	{
		$this->user = $user;
		$this->decorate();
	}

	public function decorate(): void
	{
		if ($this->user instanceof HouseKeeperDecorator)
		{
			$this->user->decorate();
		}
	}

	public function payTheBuilds()
	{

	}
}