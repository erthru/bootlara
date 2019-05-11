@extends('app')
@section('title','Create New Person')

@section('content')

<div class='row'>
  <div class='col-md-4'>
    <br>
    <h4>NEW PERSON</h4>
    <form action='/store' method='post'>
      @csrf
      <div class="form-group">
        <label>Full Name</label>
        <input type="textfield" class="form-control" name='full_name' placeholder="Full Name">
      </div>
      <button type='submit' class="btn btn-primary">SUBMIT</button>
    </form>
  </div>
</div>

@endsection