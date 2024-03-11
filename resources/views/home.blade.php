@extends('layouts.main')

@section('title', 'Home')

@section('header', 'Movies')
@section('main-content')
<div class="container">
    <div class="row g-4">
        @forelse ( $movies as $movie )
        <div class="col-3">
            @include('includes.card')
        </div>                    
        @empty
            {{abort(404)}}
        @endforelse
    </div>
</div>    
@endsection