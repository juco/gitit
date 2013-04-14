<?php namespace gitit\Git\Command;

class Log extends Command
{

	public function buildCommand()
	{
		$this->command = "{$this->gitCmd} --no-pager log --pretty=\"%h:%t:%an:%ae:%s\"";

		return $this;
	}
}