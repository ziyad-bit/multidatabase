@extends('layouts.adminLogin')
@section('content')
    @if (Session::has('error'))
        <div class="alert alert-danger text-center">{{ Session::get('error') }}</div> 
    @endif
    
    <div class="card text-white bg-dark mb-3" style="max-width: 26rem;margin:auto;margin-top: 150px">
        <div class="card-header">user login</div>
        <div class="card-body">
            <form action="{{ route('post.login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-success" style="margin-top: 10px">login</button>
            </form>
        </div>


    </div>
@endsection
