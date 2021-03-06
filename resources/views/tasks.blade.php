@extends('layouts.app')

@section('content')


<div class="panel-body">
	@include('common.errors')
	<form action="/task" method="POST" class="form-horizontal">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="task" class="col-sm3 control-label">Task</label>
			<div class="col-sm6">
				<input type="text" name="name" id="task-name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-6">
				<button type="submit" class="btn btn-default">
					<i class="fa fa-plus"></i> Add Task
				</button>
			</div>
		</div>
	</form>
</div>

@endsection