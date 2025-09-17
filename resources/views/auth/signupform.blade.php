<x-layout>
    <x-slot name="title">Signup | My Blog</x-slot>
    <x-slot name="main">
        <x-navbar></x-navbar>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-body p-5">

                            <!-- Heading -->
                            <div class="text-center mb-4">
                                <h2 class="fw-bold text-primary">Create Your Account</h2>
                                <p class="text-muted mt-2">Join us today! Please fill in the information below.</p>
                            </div>

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

                            <!-- Signup Form -->
                            <form class="row g-4" action="signup" method="POST" enctype="multipart/form-data"
                                novalidate>
                                @csrf

                                <!-- Profile Image -->
                                <div class="col-12">
                                    <label for="profileImage" class="form-label fw-semibold">Profile Image <span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="profileImage" name="profileImage"
                                        accept="image/*" required>
                                    @error('profileImage') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <!-- First Name -->
                                <div class="col-md-4">
                                    <label for="firstName" class="form-label fw-semibold">First Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="firstName" name="first_name"
                                        placeholder="John" required>
                                    @error('first_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <!-- Middle Name (Optional) -->
                                <div class="col-md-4">
                                    <label for="middleName" class="form-label fw-semibold">Middle Name</label>
                                    <input type="text" class="form-control" id="middleName" name="middle_name"
                                        placeholder="Optional">
                                    @error('middle_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <!-- Last Name -->
                                <div class="col-md-4">
                                    <label for="lastName" class="form-label fw-semibold">Last Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lastName" name="last_name"
                                        placeholder="Doe" required>
                                    @error('last_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="inputEmail" class="form-label fw-semibold">Email Address <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="inputEmail" name="email"
                                        placeholder="name@example.com" required>
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <!-- Password -->
                                <div class="col-md-6">
                                    <label for="inputPassword" class="form-label fw-semibold">Password <span
                                            class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="inputPassword" name="password"
                                        placeholder="********" required minlength="6">
                                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <!-- Address -->
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label fw-semibold">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" name="address"
                                        placeholder="1234 Main St">
                                    @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <!-- City -->
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label fw-semibold">City</label>
                                    <input type="text" class="form-control" id="inputCity" name="city">
                                    @error('city') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <!-- Phone Number -->
                                <div class="col-md-6">
                                    <label for="phoneNumber" class="form-label fw-semibold">Phone Number <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="phoneNumber" name="phone_number"
                                        placeholder="+92XXXXXXXXXX" required>
                                    @error('phone_number') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>


                                <!-- Terms -->
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="termsCheck" required>
                                        <label class="form-check-label" for="termsCheck">
                                            I agree to the <a href="#" class="text-decoration-none">Terms &
                                                Conditions</a>
                                        </label>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold shadow-sm">Sign
                                        Up</button>
                                </div>

                                <!-- Login Redirect -->
                                <div class="col-12 text-center">
                                    <p class="text-muted mt-3 mb-0">Already have an account?
                                        <a href="/login" class="text-primary fw-semibold">Log in</a>
                                    </p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>