@extends('layouts/common')

@section('title')
	Repo
@stop

@section('content')
	<ul>
	@foreach($repositories as $repository)
		<li>
			{{ Html::link("/repository/{$repository->name}", $repository->name) }}
		</li>
	@endforeach
	</ul>
@stop