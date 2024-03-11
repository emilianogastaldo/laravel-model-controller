@extends('layouts.main')

@section('title', 'Movie')

@section('header', 'Movie')

@section('main-content')
    
<div class="container mt-4">
    <div class="row g-4">
        <div class="col-3">
            @include('includes.card')
        </div>                    
    </div>
    <a class="mt-5 btn btn-secondary" href="{{url('/')}}">Torna indietro</a>
</div>
    
@endsection

