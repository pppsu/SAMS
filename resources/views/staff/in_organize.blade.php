@extends('layout.staff_layout')
@section('title')
Staff
@endsection
@section('css')
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
@endsection
@section('content')
<section>
	<div >
		<div class="row">
			<h3>Organization Information</h3>
		</div>	
		<div class="row">
			<div class="col l1 m1 s12"><a href="addOrganization" class="btn">add</a></div>

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
				<th data-field="ora">Organizetion Name</th>
				<th data-field="adviser">Adviser</th>
				<th data-field="manage"></th>
			</tr>
		</thead>

		<tbody >
			@foreach ($organization as $org)
			<tr class="jsgrid-alt-row">
				<td>{{ $org->org_name }}</td>
				<td>{{ $org->title }}{{ $org->firstname }}  {{ $org->lastname }}</td>
				<td>
					<a href="editOrganization_{{ $org->org_id }}"><i class="Tiny material-icons ">mode_edit</i></a>
					<a href="organizeation/delete/{{ $org->org_id }}"><i class="Tiny material-icons " style="color: red">delete</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</section>
@endsection
@section('js')	
@endsection