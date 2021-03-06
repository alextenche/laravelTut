<ul>
	<li>
		{{ Form::label('user_id', 'author') }}
		{{ Form::select('user_id', User::lists('name', 'id')) }}
		{{ $errors->first('user_id', '<p class="error">:message</p>') }}
	</li>
	<li>
		{{ Form::label('title', 'title') }}
		{{ Form::text('title') }}
		{{ $errors->first('title', '<p class="error">:message</p>') }}
	</li>
	<li>
		{{ Form::label('body', 'body') }}
		{{ Form::textarea('body') }}
		{{ $errors->first('body', '<p class="error">:message</p>') }}
	</li>
	<li>
		{{ Form::submit('Save') }}
	</li>
</ul>