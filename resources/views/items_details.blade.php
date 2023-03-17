@extends('layouts.adminLogin')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success text-center">{{ Session::get('success') }}</div>
    @endif

    <a href="{{ route('logout') }}" class="btn btn-primary">logout</a>

   
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">{{ $item->name }}</div>
            <div class="card-body">
                <p class="card-text">{{ $item->description }}</p>
            </div>
        </div>
   
@endsection
