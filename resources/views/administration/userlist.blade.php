@extends('administration.layout')

@section('title')
All users
@stop


@section('content')
<div class="container">
		<table class='table table-striped table-hover'>
			<thead>
				<tr>
					<td>
						User ID
					</td>
					<td>
						User name
					</td>
					<td>
						User email
					</td>
					<td>
						User type
					</td>
					<td>
						Created at
					</td>
					<td>
						Status
					</td>
					<td>
						Change User Type
					</td>
					<td>
						Delete
					</td>
				</tr>
			</thead>
			<tbody>
			@foreach($users as $user)
				<tr>
					<td>
						{{ $user->id }}
					</td>
					<td>
						{{ $user->name }}
					</td>
					<td>
						{{ $user->email }}
					</td>
					<td>
						@if( $user->type == 'user')
							<span class="label label-info">User</span>
						@elseif( $user->type == 'company')
							<span class="label label-primary">Company</span>
						@elseif( $user->type == 'admin')
							<span class="label label-success">Admin</span>
						@elseif( $user->type == 'moderator')
							<span class="label label-success">Moderator</span>
						@endif
					</td>
					<td>
						{{ $user->created_at }}
					</td>
					<td>
						@if( !$user->status )
							<span class="label label-default">Disabled</span>
						@endif
					</td>
					<td>
						@if( $user->status )

							@if( $user->type == 'user')
								<a href="{{ url('/makeModerator/'.$user->id) }}" class='btn btn-default'>Make Moderator</a>
							@endif
							@if( $user -> type == 'moderator' )
								<a href="{{ url('/makeUser/'.$user->id) }}" class='btn btn-default'>Make User</a>
								<a href="{{ url('/makeAdmin/'.$user->id) }}" class='btn btn-default'>Make Admin</a>
							@elseif( $user -> type == 'admin' )
								Already admin
							@endif

						@else

						@endif

					</td>
					@unless($user->type == 'admin')
					<td>
						<a href="{{ url('/deleteUser/'.$user->id) }}" class='btn btn-danger'>Delete</a>
					</td>
					@endunless
				</tr>
			@endforeach
			</tbody>
		</table>
<div>
@stop
