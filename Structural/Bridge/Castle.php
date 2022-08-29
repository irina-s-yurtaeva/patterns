<?php
/**
 * Structural Patterns: Bridge
 */

namespace Patterns\Structural\Bridge;

use Patterns\Structural\Bridge\House;

class Castle extends House
{
	public function clean(): void
	{
		?><pre><b>clean $this->keeper->getName(): </b><?print_r($this->keeper->getName())?>
			1. Clean the first floor
		</pre><?

	}

	public function payTheBuilds(): void
	{
		?><pre>
			<b>clean $this->keeper->getName(): </b><?print_r($this->keeper->getName())?>
				1. Clean the first floor
		</pre><?
		$this->keeper->payTheBuilds();
	}
}