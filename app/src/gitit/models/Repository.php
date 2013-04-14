<?php namespace gitit\Models;

use Eloquent;
use gitit\git\Command\Log as LogCmd;

class Repository extends Eloquent
{
	public $table = 'repository';

	public function buildCommitLog()
	{
		foreach (LogCmd::initForRepository($this)->execute() as $commitLine) {
			echo $commitLine;
		}
	}
}