@extends('layout.app')

@section('content')
    <div class="info">
        <h1>Customers</h1>
        <ul class="list-group">
            @foreach ($customers as $customer)
                <li class="list-group-item">
                    <h4>
                        <a href="/customers/{{$customer->custID}}">{{$customer->firstName}} {{$customer->lastName}}</a>
                    </h4>                    
                </li>
            @endforeach            
        </ul>        
    </div>
@endsection