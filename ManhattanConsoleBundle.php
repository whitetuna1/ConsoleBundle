<?php

namespace Manhattan\Bundle\ConsoleBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ManhattanConsoleBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
