<?php namespace gitit\Controllers;

use View;
use gitit\Models\Repository;

class RepositoryController extends BaseController
{
	public function repository($name)
	{
		$repo = Repository::where('name', '=', $name)->first();
		$repo->buildCommitLog();
		if ( ! $repo) {
			App::abort(404, 'Page not found');
		}

		return View::make('repository.repository')->with('repository', $repo);
	}
}