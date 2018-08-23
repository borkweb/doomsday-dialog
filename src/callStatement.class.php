<?php

namespace DoomsdayDialog\CallStatement;

use DoomsdayDialog\Statements;

class callStatement {
	public function __construct() {
		$statements = new Statements();

		echo $statements->get( 'intro' );
	}
}