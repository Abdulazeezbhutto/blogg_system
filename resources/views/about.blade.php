<x-layout>
    <x-slot name="title">About Us</x-slot>
    <x-slot name="main">
<x-navbar></x-navbar>
        <div class="container my-5">
            
            <!-- Hero Section -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="fw-bold text-primary mb-3">About Our Blog</h1>
                    <p class="lead text-muted">
                        Welcome to our blogging platform! We are passionate about sharing ideas, stories, 
                        and knowledge with the world. Our goal is to create a community where everyone can 
                        express themselves and learn from each other.
                    </p>
                </div>
                <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="1000">
                    <img src="https://via.placeholder.com/500x350" class="img-fluid rounded-4 shadow" alt="About Us">
                </div>
            </div>

            <!-- Mission / Vision Section -->
            <div class="row text-center mb-5">
                <div class="col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card shadow-sm border-0 h-100 p-4">
                        <i class="bi bi-bullseye fs-1 text-primary mb-3"></i>
                        <h4 class="fw-bold">Our Mission</h4>
                        <p class="text-muted">
                            To provide a space where people can share knowledge, inspire others, 
                            and build meaningful connections through writing.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card shadow-sm border-0 h-100 p-4">
                        <i class="bi bi-lightbulb fs-1 text-warning mb-3"></i>
                        <h4 class="fw-bold">Our Vision</h4>
                        <p class="text-muted">
                            To become one of the best blogging communities that empowers voices from 
                            all walks of life and makes knowledge accessible to everyone.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">Meet the Team</h2>
                <p class="text-muted">The creative minds behind this platform</p>
            </div>
            <div class="row justify-content-center">
                <!-- Team Member 1 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card shadow border-0 text-center p-4">
                        <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto mb-3" width="150" height="150" alt="Team Member">
                        <h5 class="fw-bold">John Doe</h5>
                        <p class="text-muted">Founder & Developer</p>
                        <!-- Social Icons -->
                        <div>
                            <a href="https://twitter.com" target="_blank" class="text-primary me-3 fs-5"><i class="bi bi-twitter"></i></a>
                            <a href="https://linkedin.com" target="_blank" class="text-primary me-3 fs-5"><i class="bi bi-linkedin"></i></a>
                            <a href="https://github.com" target="_blank" class="text-dark fs-5"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card shadow border-0 text-center p-4">
                        <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto mb-3" width="150" height="150" alt="Team Member">
                        <h5 class="fw-bold">Jane Smith</h5>
                        <p class="text-muted">Content Manager</p>
                        <!-- Social Icons -->
                        <div>
                            <a href="https://twitter.com" target="_blank" class="text-primary me-3 fs-5"><i class="bi bi-twitter"></i></a>
                            <a href="https://linkedin.com" target="_blank" class="text-primary me-3 fs-5"><i class="bi bi-linkedin"></i></a>
                            <a href="https://instagram.com" target="_blank" class="text-danger fs-5"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>
