<x-layout>
    <x-slot name="title">Login | My Blog</x-slot>
    <x-slot name="main">
        <x-navbar></x-navbar>

        <div class="container min-vh-100 d-flex justify-content-center align-items-center">
            <div class="row w-100 justify-content-center">
                <div class="col-md-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-4">
                            <h3 class="text-center text-primary mb-4" data-aos="zoom-in" data-aos-delay="200">Login</h3>

                            <!-- Flash Messages -->
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            <!-- Login Form -->
                            <form action="{{ route('login') }}" method="POST">
                                @csrf

                                <!-- Email -->
                                <div class="mb-3" data-aos="fade-right" data-aos-delay="300">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="Enter your email"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="mb-3" data-aos="fade-left" data-aos-delay="400">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password" placeholder="Enter your password" required>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Remember + Forgot -->
                                <div class="d-flex justify-content-between align-items-center mb-3" data-aos="fade-up"
                                    data-aos-delay="500">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                        <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>
                                    <a href="#" class="text-decoration-none">Forgot Password?</a>
                                </div>

                                <!-- Submit -->
                                <button type="submit" class="btn btn-primary w-100" data-aos="zoom-in"
                                    data-aos-delay="600">Login</button>
                            </form>

                            <!-- Signup Redirect -->
                            <div class="text-center mt-3" data-aos="fade-up" data-aos-delay="700">
                                <p class="mb-0">Don't have an account?
                                    <a href="{{ url('signup') }}" class="text-decoration-none">Sign Up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>