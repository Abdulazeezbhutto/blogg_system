<x-layout>
    <x-slot name="title">Category | My Blog</x-slot>
    <x-slot name="main">
        <x-navbar></x-navbar>
        <!-- Hero / Category Header -->
        <section class="bg-light py-5 text-center">
            <div class="container">
                <h2 class="fw-bold text-primary" data-aos="fade-down">Category: {{ $category->name }}</h2>
                <p class="text-muted" data-aos="fade-up">
                    Explore all the blogs under <span class="fw-semibold">{{ $category->name }}</span> category
                </p>
            </div>
        </section>

        <!-- Blogs Section -->
        <div class="container my-5">
            <div class="row g-4">
                <!-- Blog Card -->
                @foreach ($posts as $post)
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset('uploads/blogs/'.$post->image) }}" class="card-img-top" alt="Blog Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text text-muted">
                                    {{ Str::limit($post->content, 50) }}
                                </p>
                                <a href="{{ url("singlepost/ $post->id ") }}" class="btn btn-sm btn-outline-primary">Read More</a>
                            </div>
                            <div class="card-footer text-muted small">
                                Posted on {{ $post->created_at }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-5">
                <nav>
                    {{ $posts->links('pagination::bootstrap-5') }}
                </nav>
            </div>
        </div>
    </x-slot>
</x-layout>