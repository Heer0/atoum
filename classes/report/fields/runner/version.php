<?php

namespace mageekguy\atoum\report\fields\runner;

use \mageekguy\atoum;
use \mageekguy\atoum\report;

abstract class version extends report\fields\runner
{
	protected $author = null;
	protected $number = null;

	public function getAuthor()
	{
		return $this->author;
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function setWithRunner(atoum\runner $runner, $event = null)
	{
		if ($event === atoum\runner::runStart)
		{
			$this->author = atoum\test::author;
			$this->number = atoum\test::getVersion();
		}

		return $this;
	}

}

?>