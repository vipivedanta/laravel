@extends('layouts.user')

@section('content')
<table class="table table-striped table-bordered table-condensed">
	<th>Name</th>
	<th>E Mail</th>
	<th>User name</th>
	<th>Password</th>

	@foreach($users as $user)
	<tr>
		<td>{{$user->name}}</td>
		<td>{{$user->email}}</td>
		<td>{{$user->username}}</td>
		<td>{{$user->password}}</td>
	</tr>
	@endforeach
</table>

{{link_to_route('users.create','Add new user')}}
<input type="button" value="Submit" class="btn btn-primary" />
@stop

@section('side-menu')
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
@stop