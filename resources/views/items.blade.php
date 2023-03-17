@extends('layouts.adminLogin')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success text-center">{{ Session::get('success') }}</div>
    @endif

    <a href="{{ route('logout') }}" class="btn btn-primary">logout</a>

    @forelse ($total_items as $item)
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header"><a href="{{ route('items.show',['id'=>$item->uuid,'db'=>$item->db]) }}">{{ $item->name }}</a></div>
            <div class="card-body">
                <p class="card-text">{{ $item->description }}</p>
            </div>
        </div>
    @empty
        <p>no items</p>
    @endforelse
@endsection
