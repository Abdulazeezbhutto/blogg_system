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
                <a href="category" class="btn btn-outline-primary btn-sm active">All</a>
                <a href="category" class="btn btn-outline-primary btn-sm">Tech</a>
                <a href="category" class="btn btn-outline-primary btn-sm">Design</a>
                <a href="category" class="btn btn-outline-primary btn-sm">Lifestyle</a>
                <a href="category" class="btn btn-outline-primary btn-sm">Business</a>
            </div>
        </div>

        <!-- Blogs Section -->
        <div class="container my-5">
            <div class="row g-4">
                <!-- Example Blog Card -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Tech</span>
                            <h5 class="card-title">How to Build Modern Web Apps</h5>
                            <p class="card-text text-muted">
                                Learn step by step how to build scalable and modern web applications using the latest technologies.
                            </p>
                            <a href="singlepost" class="btn btn-sm btn-outline-primary">Read More</a>
                        </div>
                        <div class="card-footer text-muted small">
                            Posted on Sep 14, 2025 • By Admin
                        </div>
                    </div>
                </div>

                <!-- Another Blog -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Lifestyle</span>
                            <h5 class="card-title">10 Tips for a Healthy Lifestyle</h5>
                            <p class="card-text text-muted">
                                Discover simple and effective tips to maintain a balanced and healthy lifestyle every day.
                            </p>
                            <a href="singlepost" class="btn btn-sm btn-outline-success">Read More</a>
                        </div>
                        <div class="card-footer text-muted small">
                            Posted on Sep 10, 2025 • By John Doe
                        </div>
                    </div>
                </div>

                <!-- Another Blog -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <span class="badge bg-warning mb-2">Business</span>
                            <h5 class="card-title">Top Startup Trends in 2025</h5>
                            <p class="card-text text-muted">
                                Explore the latest startup and business trends that are shaping industries in 2025.
                            </p>
                            <a href="singlepost" class="btn btn-sm btn-outline-warning">Read More</a>
                        </div>
                        <div class="card-footer text-muted small">
                            Posted on Sep 5, 2025 • By Sarah Khan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
