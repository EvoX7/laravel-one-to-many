@extends('layouts.app')


@section('content')
    <div class="container w-25 mt-5">
    </div>
    <div class="container d-flex justify-content-center mt-5">

        <div class="card text-center">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">{{ $category->name }}</h3>
                <div class="w-75" style="background-color:{{ $category->color }} ">
                    <h2>Category</h2>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text font-weight-bold">Author: {{ $post->user->name }}</p>
                <p class="card-text fst-italic">Posted: {{ $post->post_date }}</p>
            </div>
        </div>
    </div>
@endsection
