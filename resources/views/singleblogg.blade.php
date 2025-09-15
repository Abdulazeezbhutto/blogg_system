<x-layout>
    <x-slot name="title">Blog Title | My Blog</x-slot>
    <x-slot name="main">
        <x-navbar></x-navbar>

        <!-- Blog Header -->
        <section class="bg-light py-5 mb-5">
            <div class="container text-center">
                <h1 class="fw-bold text-primary mb-3" data-aos="fade-down">How to Build Modern Web Apps</h1>
                <p class="text-muted" data-aos="fade-up">
                    By <span class="fw-semibold">Admin</span> • Sep 14, 2025 • Category: 
                    <a href="/category/tech" class="text-decoration-none text-primary">Tech</a>
                </p>
            </div>
        </section>

        <!-- Blog Content -->
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <!-- Featured Image -->
                    <div class="mb-4" data-aos="zoom-in">
                        <img src="https://via.placeholder.com/1200x500" alt="Blog Image" class="img-fluid rounded shadow-sm">
                    </div>

                    <!-- Blog Body -->
                    <article class="blog-content" data-aos="fade-up" data-aos-delay="200">
                        <p>
                            Modern web applications require fast, scalable, and secure solutions. In this guide,
                            we’ll explore the step-by-step process of creating a professional web application 
                            using the latest frameworks and tools.
                        </p>
                        <p>
                            From frontend frameworks like <strong>React</strong> and <strong>Vue</strong> to backend
                            technologies like <strong>Laravel</strong> and <strong>Node.js</strong>, you’ll learn how to 
                            choose the right stack for your project.
                        </p>

                        <h3>Getting Started</h3>
                        <p>
                            The first step in building a modern web app is understanding your requirements. Do you 
                            need real-time features? Authentication? Scalability? Once you know this, you can pick 
                            the right tech stack.
                        </p>

                        <blockquote class="blockquote p-3 bg-light border-start border-3 border-primary">
                            <p class="mb-0">“Good design is obvious. Great design is transparent.” – Joe Sparano</p>
                        </blockquote>

                        <p>
                            Stay tuned as we dive deeper into coding practices, deployment strategies, and 
                            performance optimization for your applications.
                        </p>
                    </article>

                    <!-- Tags -->
                    <div class="mt-4">
                        <span class="badge bg-primary me-2">Web Development</span>
                        <span class="badge bg-secondary me-2">JavaScript</span>
                        <span class="badge bg-info text-dark">Laravel</span>
                    </div>

                    <!-- Divider -->
                    <hr class="my-5">

                    <!-- Author Section -->
                    <div class="d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="400">
                        <img src="https://via.placeholder.com/80" class="rounded-circle me-3" alt="Author">
                        <div>
                            <h6 class="fw-bold mb-0">Admin</h6>
                            <p class="text-muted mb-0">Full-stack developer and tech writer passionate about sharing knowledge.</p>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div data-aos="fade-up" data-aos-delay="500">
                        <h4 class="mb-4">Comments (3)</h4>

                        <!-- Single Comment -->
                        <div class="mb-4">
                            <strong>John Doe</strong> <span class="text-muted small">• Sep 13, 2025</span>
                            <p class="mb-1">Great insights! This really helped me understand the basics.</p>
                        </div>

                        <!-- Another Comment -->
                        <div class="mb-4">
                            <strong>Sarah Khan</strong> <span class="text-muted small">• Sep 12, 2025</span>
                            <p class="mb-1">Loved the part about Laravel! Please make a tutorial series.</p>
                        </div>

                        <!-- Comment Form -->
                        <form class="mt-4">
                            <div class="mb-3">
                                <label for="comment" class="form-label">Leave a Comment</label>
                                <textarea class="form-control" id="comment" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Post Comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
