<x-layout>
    <x-slot name="title">Blogs | My Blog</x-slot>
    <x-slot name="main">
        <x-navbar></x-navbar>

        <!-- Hero Section -->
        <section class="bg-light py-5 text-center">
            <div class="container">
                <h2 class="fw-bold text-primary" data-aos="fade-down">Our Blogs</h2>
                <p class="text-muted" data-aos="fade-up">Read the latest articles and updates</p>
            </div>
        </section>

        <!-- Categories Filter -->
        <div class="container my-4">
            <div class="d-flex flex-wrap justify-content-center gap-2" data-aos="zoom-in">
                <a href="#" class="btn btn-outline-primary btn-sm active">All</a>
                @foreach($categories as $category)
                    <a href="category/{{ $category->id }}"
                        class="btn btn-outline-primary btn-sm active">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>

        <!-- Blogs Section -->
        <div class="container my-5">
            <div class="row g-4">


                <!-- Example Blog Card -->
                @foreach($posts as $post)
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{asset('uploads/blogs/'. $post->image )}}" class="card-img-top" alt="Blog Image">
                            <div class="card-body">
                                <span class="badge bg-primary mb-2">{{ $post->category_name }}</span>
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text text-muted">
                                    {{ Str::limit($post->content, 50) }}
                                </p>
                                <a href="{{ url('singlepost/' . $post->id) }}" class="btn btn-sm btn-outline-primary">Read
                                    More</a>
                            </div>
                            <div class="card-footer text-muted small">
                                Posted on {{ $post->created_at }}
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </x-slot>
</x-layout>