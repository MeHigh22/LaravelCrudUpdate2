@extends('layouts.index')

@section('content')
    <section class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$show->id}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Nom : {{$show->nom}}</h6>
            <p class="card-text">Age : {{$show->age}}</p>
            <p class="card-text">Genre : {{$show->genre}}</p>
            <div class="row d-flew justify-content-around">
                <a href="/edit-membre/{{$show->id}}" class="btn btn-primary">EDIT</a>
                <form action="/delete-membre/{{$show->id}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
