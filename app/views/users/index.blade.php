<table border="1">
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