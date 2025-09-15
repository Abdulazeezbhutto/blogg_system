<x-layout>
    <x-slot name="title">Category | My Blog</x-slot>
    <x-slot name="main">
        <x-navbar></x-navbar>

        <!-- Hero / Category Header -->
        <section class="bg-light py-5 text-center">
            <div class="container">
                <h2 class="fw-bold text-primary" data-aos="fade-down">Category: Tech</h2>
                <p class="text-muted" data-aos="fade-up">
                    Explore all the blogs under <span class="fw-semibold">Tech</span> category
                </p>
            </div>
        </section>

        <!-- Blogs Section -->
        <div class="container my-5">
            <div class="row g-4">
                <!-- Blog Card -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
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
                            <h5 class="card-title">Best JavaScript Frameworks in 2025</h5>
                            <p class="card-text text-muted">
                                Discover which frameworks are trending in 2025 and why developers love them.
                            </p>
                            <a href="singlepost" class="btn btn-sm btn-outline-primary">Read More</a>
                        </div>
                        <div class="card-footer text-muted small">
                            Posted on Sep 12, 2025 • By John Doe
                        </div>
                    </div>
                </div>

                <!-- Another Blog -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">AI Tools Every Developer Must Know</h5>
                            <p class="card-text text-muted">
                                From Copilot to ChatGPT, here are the most useful AI tools for developers in 2025.
                            </p>
                            <a href="singlepost" class="btn btn-sm btn-outline-primary">Read More</a>
                        </div>
                        <div class="card-footer text-muted small">
                            Posted on Sep 9, 2025 • By Sarah Khan
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-5">
                <nav>
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </x-slot>
</x-layout>
