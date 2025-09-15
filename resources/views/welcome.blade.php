<x-layout>
    <x-slot name="title">Welcome | My Blog</x-slot>
    <x-slot name="main">
        <!-- Navbar -->
        <x-navbar></x-navbar>

        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <h1 data-aos="fade-up" data-aos-duration="1000">Welcome to My Blog</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="200">
                    Share your thoughts, explore new ideas, and connect with the world.
                </p>
                <a href="#blogs" class="btn btn-light btn-lg mt-3" data-aos="zoom-in" data-aos-delay="400">Explore
                    Blogs</a>
            </div>
        </section>

        <!-- Blog Preview Section -->
        <section class="py-5" id="blogs">
            <div class="container">
                <h2 class="text-center mb-5" data-aos="fade-down">Latest Posts</h2>
                <div class="row g-4">
                    <!-- Blog Card 1 -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog 1">
                            <div class="card-body">
                                <h5 class="card-title">Blog Post One</h5>
                                <p class="card-text">A quick preview of your blog content. Engaging and short intro text
                                    goes here.</p>
                                <a href="category" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Card 2 -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog 2">
                            <div class="card-body">
                                <h5 class="card-title">Blog Post Two</h5>
                                <p class="card-text">Highlight something interesting to attract readers. Keep it short
                                    and catchy.</p>
                                <a href="category" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Card 3 -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog 3">
                            <div class="card-body">
                                <h5 class="card-title">Blog Post Three</h5>
                                <p class="card-text">Give visitors a reason to click. Summarize the value of the post
                                    here.</p>
                                <a href="category" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Trending Blogs Section -->
        <section class="py-5 bg-white">
            <div class="container" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-center mb-5 fw-bold text-danger">🔥 Most Trending Blogs</h2>
                <div class="row g-4">
                    <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                        <div class="card shadow-sm border-0 h-100">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="https://via.placeholder.com/200x150" class="img-fluid rounded-start"
                                        alt="Trending 1">
                                </div>
                                <div class="col-8">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div>
                                            <h5 class="card-title">Trending Blog One</h5>
                                            <p class="card-text text-muted">A powerful trending article that's gaining
                                                attention.</p>
                                        </div>
                                        <a href="category" class="btn btn-primary mt-2">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                        <div class="card shadow-sm border-0 h-100">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="https://via.placeholder.com/200x150" class="img-fluid rounded-start"
                                        alt="Trending 2">
                                </div>
                                <div class="col-8">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div>
                                            <h5 class="card-title">Trending Blog Two</h5>
                                            <p class="card-text text-muted">Another hot pick loved by readers this week.
                                            </p>
                                        </div>
                                        <a href="category" class="btn btn-primary mt-2">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Newsletter Section -->
        <section class="py-5 bg-light">
            <div class="container text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="fw-bold">Subscribe to Our Newsletter</h2>
                <p class="text-muted">Get the latest blog updates directly in your inbox.</p>
                <form action="/subscribe" method="POST" class="row justify-content-center mt-4">
                    <!-- @csrf -->
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