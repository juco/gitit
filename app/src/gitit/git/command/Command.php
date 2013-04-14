<?php namespace gitit\Git\Command;

use gitit\Models\Repository;

abstract class Command
{
	protected $gitCmd;
	protected $repository;
	protected $command;
	protected $returnValue;
	protected $output;

	public abstract function buildCommand();

	public static function initForRepository(Repository $repository)
	{
		$self = new static();
		$self->repository = $repository;
		$self->gitCmd = "/usr/bin/git --git-dir {$repository->path}/.git ";
		return $self;
	}

	public function execute()
	{
		$this->buildCommand();
		$this->returnValue = exec($this->command, $this->output);
		return $this;
	}

	public function getOutput()
	{
		return $this->output;
	}
}
