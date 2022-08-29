<?php
namespace Patterns;

abstract class User
{
	protected string $name;

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	public function setName(string $name)
	{
		$this->name = $name;
	}
}