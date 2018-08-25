@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    This is list page
                </div>

                @auth
                <a href="{{ route('review.create') }}">Write</a>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection
