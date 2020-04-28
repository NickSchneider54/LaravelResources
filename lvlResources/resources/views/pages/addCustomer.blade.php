@extends('layout.app')

@section('content')
    <div class="edit">
        
        {!! Form::open(['action' => ['PagesController@store'], 'method' => 'POST']) !!}
        <h1>Add new Customer</h1>
        <div class="form-group">
            {{ Form::label('firstName', 'First Name', ['class' => 'control-label']) }}
            {{ Form::text('firstName', '', ['class' => 'form-control', 'placeholder' => 'First Name']) }}
        </div>
        <div class="form-group">
            {{ Form::label('lastName', 'Last Name', ['class' => 'control-label']) }}
            {{ Form::text('lastName', '', ['class' => 'form-control', 'placeholder' => 'Last Name']) }}
        </div>
        <div class="form-group">
            {{ Form::label('address', 'Address', ['class' => 'control-label']) }}
            {{ Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address']) }}        
        </div>    
        <div class="form-group row">
            <div class="col-sm-7">
                {{ Form::label('city', 'City', ['class' => 'control-label']) }}
                {{ Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'City']) }}
            </div>
            <div class="col-sm-2">
                {{ Form::label('state', 'State', ['class' => 'control-label']) }}
                {{ Form::text('state', '', ['class' => 'form-control', 'placeholder' => 'MO']) }}
            </div>
            <div class="col-sm-3">
                {{ Form::label('zip', 'Zip', ['class' => 'control-label']) }}
                {{ Form::text('zip', '', ['class' => 'form-control', 'placeholder' => 'Zip']) }}
            </div>
        </div>
        
        {{Form::submit('Submit',['class' => 'btn btn-block btn-primary'])}}

        {!! Form::close() !!}
    </div>

@endsection