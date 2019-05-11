@extends('app')
@section('title','Person List')

@section('content')
<div class='row'>
    <div class='col-md-12'>
        <br>
        <table class="table table-striped table-bordered data" id="data">
            <thead>
                <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($person as $persons)
                <tr>
                    <th>{{$persons->full_name}}</th>
                    <th><a href='/update/{{$persons->id}}' class='badge badge-warning' style='padding-top: 7px; padding-bottom: 7px; width:50px;'>Edit</a> <a href='/delete/{{$persons->id}}' class='badge badge-danger' style='padding-top: 7px; padding-bottom: 7px; width:50px;'>Hapus</a></th>
                </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="...">
            <ul class="pagination">

                @if($person->currentPage() == 1)
                <li class="page-item disabled">
                    <a class="page-link" href="{{$person->previousPageUrl()}}" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{$person->previousPageUrl()}}" tabindex="-1">Previous</a>
                </li>
                @endif


                @if($person->lastPage() == app('request')->input('page'))
                <li class="page-item disabled">
                    <a class="page-link" href="{{$person->nextPageUrl()}}" tabindex="-1" aria-disabled="true">Next</a>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{$person->nextPageUrl()}}" tabindex="-1">Next</a>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</div>
@endsection