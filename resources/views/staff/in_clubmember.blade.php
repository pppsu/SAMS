@extends('layout.staff_layout')
@section('title')
Staff
@endsection
@section('css')
@endsection
@section('content')
<style type="text/css">

	table, td, th {    
		border: 1px solid #ddd;
		text-align: center;
	}

	table {
		border-collapse: collapse;
		width: 90%;
	}

	th, td {
		padding: 10px;
	}
</style>
<section>
	<div>
		<div class="row">
			<h3>Member Information</h3>
			<h5>Flower Club</h5>
		</div>	
		<div class="row">
			<div class="col l1 m1 s12"><a href="addMember" class="btn">add</a></div>

			<div class="col l6 m6 s12 offset-l4	">
				<div class="input-field" style="">
					<i class="material-icons prefix">search</i>
					<input placeholder="Organizeation Name" id="icon_prefix" type="text" class="validate">
					<label for="icon_prefix">Search</label>
				</div>
			</div>
		</div>		
	</div>
</section>
<section>
	<table class="striped">	
		<thead>
			<tr>
				<th data-field="ora">PSU Passport</th>
				<th data-field="adviser">Position</th>
				<th data-field="bdate">Name</th>
				<th data-field="edate">Contact</th>
				<th data-field="manage"></th>
			</tr>
		</thead>

		<tbody >
			@foreach ($students as $s)
			<tr class="jsgrid-alt-row">
				<td>{{ $s->psu_passport }}</td>
				<td>{{ $s->position }}</td>
				<td>{{ $s->title }}{{ $s->firstname }}  {{ $s->lastname }}</td>
				<td><a href="#">{{ $s->email }}</a></td>
				<td>
					<a href="editMember{{ $s->stu_id }}"><i class="Tiny material-icons ">mode_edit</i></a>
					<a href="Member/delete/{{ $s->stu_id }}"><i class="Tiny material-icons " style="color: red">delete</i></a>
				</td>
			</tr>
			@endforeach

			<!-- {!! $students->render() !!} -->
		</tbody>
	</table>
</section>
@endsection
@section('js')	
@endsection