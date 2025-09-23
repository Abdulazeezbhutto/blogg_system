<x-layout>
    <x-slot name="title">Contact Us</x-slot>
    <x-slot name="main">
        <x-navbar></x-navbar>

        <div class="container my-5">
            <!-- Flash Messages -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Heading -->
            <div class="text-center mb-5" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="fw-bold text-primary">Get in Touch</h1>
                <p class="text-muted">We’d love to hear from you! Fill out the form below or reach us directly.</p>
            </div>

            <div class="row g-4">
                <!-- Contact Form -->
                <div class="col-lg-7" data-aos="fade-right" data-aos-duration="1000">
                    <div class="card shadow border-0 rounded-4">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">Send Us a Message</h4>
                            <form action="{{ url('message') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-semibold">Your Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name') }}" placeholder="John Doe" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold">Your Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}"
                                        placeholder="name@example.com" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="subject" class="form-label fw-semibold">Subject</label>
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                        id="subject" name="subject" value="{{ old('subject') }}"
                                        placeholder="Write subject" required>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label fw-semibold">Message</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message"
                                        name="message" rows="5" placeholder="Write your message..."
                                        required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1000">
                    <div class="card shadow border-0 rounded-4 mb-4">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-3">Contact Information</h4>
                            <p class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i> 123 Street, Karachi,
                                Pakistan</p>
                            <p class="mb-2"><i class="bi bi-envelope-fill text-primary me-2"></i> contact@myblog.com</p>
                            <p class="mb-0"><i class="bi bi-telephone-fill text-success me-2"></i> +92 300 1234567</p>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="card shadow border-0 rounded-4">
                        <div class="card-body p-0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28992.497292902287!2d67.0099388!3d24.8614622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33bda003e8a8f%3A0x6d7a3d6043788c34!2sKarachi!5e0!3m2!1sen!2s!4v1695823071995!5m2!1sen!2s"
                                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>