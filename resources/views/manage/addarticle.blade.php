@extends('layouts.app')
@section('content')
<div class="container">
<form action="add" method="POST">
	{{csrf_field()}}
  
      <div class="form-group">
    <label for="usr">Titel:</label>
    <input type="text" name="title" class="form-control" >
  </div>
  <div class="form-group">
    <label for="usr">Body:  </label>
    <textarea class="form-control" row="4" cols="50" name="body"></textarea></div>
</br>
    <input type="submit" value="Add New" class="btn btn-primary" />

    
   
 
 
</form>
</div>
@endsection