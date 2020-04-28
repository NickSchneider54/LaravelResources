@extends('layout.app')

@section('content')
    <div class="edit">
        
        {!! Form::open(['action' => ['PagesController@update', $customer->custID], 'method' => 'put']) !!}
        <h1>Edit: {{$customer->firstName}} {{$customer->lastName}}</h1>

        <div class="form-group">
            {{ Form::label('firstName', 'First Name', ['class' => 'control-label']) }}
            {{ Form::text('firstName', $customer->firstName, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('lastName', 'Last Name', ['class' => 'control-label']) }}
            {{ Form::text('lastName', $customer->lastName, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('address', 'Address', ['class' => 'control-label']) }}
            {{ Form::text('address', $customer->address, ['class' => 'form-control']) }}        
        </div>    
        <div class="form-group row">
            <div class="col-sm-7">
                {{ Form::label('city', 'City', ['class' => 'control-label']) }}
                {{ Form::text('city', $customer->city, ['class' => 'form-control']) }}
            </div>
            <div class="col-sm-2">
                {{ Form::label('state', 'State', ['class' => 'control-label']) }}
                {{ Form::text('state', $customer->state, ['class' => 'form-control']) }}
            </div>
            <div class="col-sm-3">
                {{ Form::label('zip', 'ZIP', ['class' => 'control-label']) }}
                {{ Form::text('zip', $customer->zip, ['class' => 'form-control']) }}
            </div>
        </div>
        
        {{Form::submit('Submit',['class' => 'btn btn-block btn-primary'])}}

        {!! Form::close() !!}
    </div>

@endsection