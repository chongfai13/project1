
@extends('layouts.app')

@section('content')

<!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Contact Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                <!-- Blog entries-->
                <div class="col-lg-6">
                    <!-- Featured blog post -->
                    <div class="card mb-4">
                        <a href="{{ route('post.show', $post->id)}} "><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $post->created_at }}</div>
                            <h2 class="card-title h4">{{$post->title}}</h2>
                            <p class="card-text">{{$post->post_text}}</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->

                 </div>
                    @endforeach



                <!-- Side widgets-->
                <div class="col-lg-6">

                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="list-unstyled mb-0">
                                        @foreach($categories as $category)

                                        <li><a href="{{ route('home')  }}?category_id={{ $category->id }}">{{ $category->name }}</a></li>

                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection