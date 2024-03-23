@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Buyer Dashboard</h1>
        <!-- Add your buyer dashboard content here -->

        <!-- Logout button -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
@endsection

