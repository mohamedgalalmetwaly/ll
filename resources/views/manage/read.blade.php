@extends('layouts.app')
@section('content')
<div class="container">

<div class="form-group">
	<label for="usr">Title:</label>
	{{$ww->title}}
</div>
<div class="form-group">
	<label for="usr">body:</label>
	{{$ww->body}}
</div>
<div class="form-group">
	<table class="table table-striped">
		<tr>
			<td>comments</td>
		</tr>
		@foreach($ww->comment as $c)
		<tr>
			<td>{{$c->comment}}
			</td>
		</tr>
		$endforeach
	</table>


<form action="/read/{{$ww->id}}" method="POST">
	{{csrf_field()}}
  
    
  <div class="form-group">
    <label for="usr">Body:  </label>
    <textarea class="form-control" row="4" cols="50" name="body"></textarea></div>
</br>
    <input type="submit" value="Add New" class="btn btn-primary" />
</form>

</div>
</div>
@endsection



    
   
 
