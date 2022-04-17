@extends('admin.admin-app')


@section('header')

<div class="">
    <form method="POST" action="{{ route('admin.logout') }}">
    	@csrf
		<button type="submit">Logout</button>	
	</form>
</div>


@endsection('header')


@section('content')

<div class="">
	Admin dashboard
</div>
@endsection('content')

