<x-layout>
    <x-slot name="title">Welcome | My Blog</x-slot>
    <x-slot name="main">
        <!-- Navbar -->
        <x-navbar></x-navbar>

        <!-- Hero Section -->
        <section id="hero-slider" class="hero">
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner">


                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="container text-center py-5">
                            <h1 data-aos="fade-up" data-aos-duration="1000">Welcome to Insightful Ink Blog.</h1>
                            <p class="lead" data-aos="fade-up" data-aos-delay="200">
                                Share your thoughts, explore new ideas, and connect with the world.
                            </p>
                            <a href="#blogs" class="btn btn-light btn-lg mt-3" data-aos="zoom-in" data-aos-delay="400">
                                Explore Blogs
                            </a>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="container text-center py-5">
                            <h1 data-aos="fade-up" data-aos-duration="1000">Express Yourself</h1>
                            <p class="lead" data-aos="fade-up" data-aos-delay="200">
                                Share Your thoughts than We Will Upload Post.
                            </p>
                            <a href="contact" class="btn btn-primary btn-lg mt-3" data-aos="zoom-in"
                                data-aos-delay="400">
                                contact Us
                            </a>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="container text-center py-5">
                            <h1 data-aos="fade-up" data-aos-duration="1000">Join the Community</h1>
                            <p class="lead" data-aos="fade-up" data-aos-delay="200">
                                Connect with like-minded people and grow together.
                            </p>
                            <a href="signup" class="btn btn-success btn-lg mt-3" data-aos="zoom-in"
                                data-aos-delay="400">
                                Join Now
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
                </div>
            </div>
        </section>
        <div class="mt-3">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>


        <!-- Blog Preview Section -->
        <section class="py-5" id="blogs">
            <div class="container">
                <h2 class="text-center mb-5" data-aos="fade-down">Latest Posts</h2>
                <div class="row g-4">

                    <!--category bloggs-->
                    @foreach($posts_by_category as $blog)
                        <!-- Blog Card 1 -->
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100">
                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}" class="card-img-top" alt="Blog 1">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $blog->title }}</h5>

                                    <p class="card-text">{{ Str::limit($blog->content, 50) }}</p>


                                    <a href="category/{{ $blog->category_id}}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- Trending Blogs Section -->
        <section class="py-5 bg-white">
            <div class="container" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-center mb-5 fw-bold text-danger">🔥 Most Trending Blogs</h2>
                <div class="row g-4">
                    @foreach($trending as $post)
                        <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="row g-0">
                                    <div class="col-4">
                                        <img src="{{ asset('uploads/blogs/' . $post->image)}}"
                                            class="img-fluid rounded-start" alt="Trending 1">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div>
                                                <h5 class="card-title">{{ $post->title }}</h5>
                                                <p class="card-text text-muted">{{ Str::limit($blog->content, 50) }}</p>
                                            </div>
                                            <a href="singlepost/{{ $post->id }}" class="btn btn-primary mt-2">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </section>


        <!-- Newsletter Section -->
        <section class="py-5 bg-light">
            <div class="container text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="fw-bold">Subscribe to Our Newsletter</h2>
                <p class="text-muted">Get the latest blog updates directly in your inbox.</p>
                <form action="{{ url('newsteller') }}" method="POST" class="row justify-content-center mt-4">
                    @csrf
                    <div class="col-md-6 col-lg-5">
                        <input type="email" name="email" class="form-control form-control-lg rounded-pill"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="col-md-2 col-lg-2 mt-3 mt-md-0">
                        <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill">Subscribe</button>
                    </div>
                </form>
            </div>
        </section>


    </x-slot>
</x-layout>