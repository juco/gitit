<?php namespace gitit\Controllers;

use View;
use gitit\Models\Repository;

class RepositoriesController extends BaseController
{
	public function getIndex()
	{
		return View::make('repository.repositories')
			->with('repositories', Repository::all());
	}
}