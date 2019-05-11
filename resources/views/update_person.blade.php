@extends('app')
@section('title','Create New Person')

@section('content')

<div class='row'>
  <div class='col-md-4'>
    <br>
    <h4>UPDATE PERSON</h4>
    <form action='/put/{{$person->id}}' method='post'>
      @csrf
      <div class="form-group">
        <label>Full Name</label>
        <input type="textfield" class="form-control" name='full_name' placeholder="Full Name" value="{{$person->full_name}}">
      </div>
      <button type='submit' class="btn btn-primary">UPDATE</button>
    </form>
  </div>
</div>

@endsection