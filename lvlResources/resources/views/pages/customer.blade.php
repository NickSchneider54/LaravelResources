@extends('layout.app')

@section('content')
    
<div class="info">    
    
    <div class="card">
        <div class="card-header">
            <h1>{{$customer->firstName}} {{$customer->lastName}}</h1>
        </div>
        <div class="card-body">
            <h4>{{$customer->address}}</h4>
            <h4>{{$customer->city}}, {{$customer->state}} {{$customer->zip}}</h4>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <a href="/customers/{{$customer->custID}}/edit" class="btn btn-secondary btn-outline-dark float-right">Edit</a>
                </div>
                <div class="col-sm-6">
                    <span class="float-left">
                        {!! Form::open(['action' => ['PagesController@destroy', $customer->custID], 'method' => 'DELETE']) !!}
                            {{Form::submit('DELETE',['class' => 'btn btn-danger'])}}
                        {!! Form::close() !!}
                    </span>
                </div>
            </div>
        </div>
      </div>    
    
</div>

@endsection