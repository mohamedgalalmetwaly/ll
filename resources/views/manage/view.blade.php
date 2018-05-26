@extends('layouts.app')
@section('content')
<div class="container">
	<table class="table table-striped">
		<tr>
			<td>title</td>
		</tr>
			@foreach($articl as $arr)
			<tr>
				<td><a href="{{ "/read/".$arr->id}}">{{$arr->title}}</a></td>
			</tr>
			@endforeach
			</table>
			<a href="add">add new articles</a>
		</div>


@endsection