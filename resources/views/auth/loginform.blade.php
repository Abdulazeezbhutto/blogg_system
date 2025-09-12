<x-layout>
    <x-slot name="title">Login | My Blog</x-slot>
    <x-slot name="main">
        <x-navbar></x-navbar>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-4">
                            <h3 class="text-center text-primary mb-4" data-aos="zoom-in" data-aos-delay="200">Login</h3>

                            <!-- Login Form -->
                            <form action="#" method="POST">
                                <div class="mb-3" data-aos="fade-right" data-aos-delay="300">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                        required>
                                </div>

                                <div class="mb-3" data-aos="fade-left" data-aos-delay="400">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter your password" required>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-3" data-aos="fade-up"
                                    data-aos-delay="500">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="remember">
                                        <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>
                                    <a href="#" class="text-decoration-none">Forgot Password?</a>
                                </div>

                                <button type="submit" class="btn btn-primary w-100" data-aos="zoom-in"
                                    data-aos-delay="600">Login</button>
                            </form>

                            <div class="text-center mt-3" data-aos="fade-up" data-aos-delay="700">
                                <p class="mb-0">Don't have an account? <a href="signup.html"
                                        class="text-decoration-none">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </x-slot>
</x-layout>