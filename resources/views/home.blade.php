@extends('layouts/main')
@section('container')

    <div id="home_heading">
        <img src="https://fpcover.cdnpk.net/image/20211222122845.jpg" alt="cover" id="home_cover">
        <div id="greetings">    
            <h1><strong> {{ $heading }} </strong></h1>
            <p>Download High-Quality Images. Free Stock Photos, Vectors & PSD</p>
            <form class="d-flex mt-3">
                <input class="form-control me-2 py-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-light" type="submit">Search</button>
            </form>
            <small>Example : <strong>Text effect T shirt mockup Pattern </strong></small>
        </div>
    </div>
    <div class="post__cards ">
        <div class="home_caption mt-3 border-bottom " style="width: 100%; text-align:center;">
            <p><strong>Check out some of today’s popular shots</strong></p>
        </div>

        <div class="container d-flex align-items-center justify-content-center my-3 px-3 py-3">
            
            {{-- cards here --}}
            @if ($posts->count())
            
            <div class="container d-flex justify-content-center">
                <div class="row px-5">
                    @foreach ($posts as $post)
                        <div class="col-md-4 mb-5 d-flex justify-content-center gx-0 px-0">
                            <div class="card" style="width: 25rem; height: 27.5rem;">
                                <img src="https://source.unsplash.com/random/?{{ $post->category }}" class="card-img-top " alt="post_cover" style="width: 100%; height: 100%; object-fit: cover;">
                                <div class="card-body d-flex justify-content-between align-items-center py-2">
                                    <p class="mb-0" >By: {{ $post->user->username }} </p>
                                    
                                    <div class="like_and_views d-flex align-items-center fs-6">
                                        <ion-icon name="heart" class="me-2"></ion-icon>
                                        <p class="me-2 mb-0">{{ $post->like_count }}</p>
                                        <ion-icon name="eye" class="me-2"></ion-icon>
                                        <p class="me-2 mb-0">{{ $post->views_count }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    @endforeach
                </div>
            </div>
            
            

            @else
            <p class="text-center fs-4">No Post Found.</p>
            @endif
        </div>
    
    </div>
@endsection