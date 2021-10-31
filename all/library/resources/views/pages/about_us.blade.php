@extends('layouts.app')

@section('pageTitle', 'A Propos')

@section('content')

<section class="py-8">
	{!! ($page->content) !!}
</section>

@endsection