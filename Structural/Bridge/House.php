<?php
namespace Patterns\Structural\Bridge;

/**
 * Structural Patterns: Bridge
 */

use Patterns\Decorator\HouseKeeperDecorator;
use Patterns\User;

abstract class House
{
	protected HouseKeeperDecorator $keeper;

	// Владелец должен быть инициализирован в
	// классе путем аггрегации в конструкторе
	public function __construct(HouseKeeperDecorator $keeper)
	{
		$this->keeper = $keeper;
	}

	abstract public function clean(): void;
	abstract public function payTheBuilds(): void;
}