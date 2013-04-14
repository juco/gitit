@extends('layouts/common')

@section('title')
	Repo
@stop

@section('content')
	<h2>{{ $repository->name }}</h2>
	<p>
		{{ $repository->description }}
	</p>
@stop