<x-layout>
    <x-slot name="title">Add User | Admin</x-slot>
    <x-slot name="main">

        <div class="d-flex">
            <!-- Sidebar -->
            <x-adminsidebar></x-adminsidebar>

            <!-- Main Content -->
            <div class="flex-grow-1" style="margin-left: 250px;">
                <!-- Topbar -->
                <x-admintopbar></x-admintopbar>

                <!-- Content -->
                <div class="container my-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-9" data-aos="fade-up" data-aos-duration="1000">
                            <div class="card shadow-lg border-0 rounded-4">
                                <div class="card-body p-5">

                                    <!-- Heading -->
                                    <div class="text-center mb-4">
                                        <h2 class="fw-bold text-primary" data-aos="zoom-in" data-aos-delay="200">Create
                                            Your Account</h2>
                                        <p class="text-muted mt-2">Join us today! Please fill in the information below.
                                        </p>
                                    </div>

                                    <!-- Signup Form -->
                                    <form class="row g-4" action="/signup" method="POST" enctype="multipart/form-data"
                                        novalidate>
                                        <!-- @csrf -->

                                        <!-- Profile Image -->
                                        <div class="col-12">
                                            <label for="profileImage" class="form-label fw-semibold">Profile Image <span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control" id="profileImage"
                                                name="profileImage" accept="image/*" required>
                                        </div>

                                        <!-- First Name -->
                                        <div class="col-md-4">
                                            <label for="firstName" class="form-label fw-semibold">First Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="firstName" name="first_name"
                                                placeholder="John" required>
                                        </div>

                                        <!-- Middle Name (Optional) -->
                                        <div class="col-md-4">
                                            <label for="middleName" class="form-label fw-semibold">Middle Name</label>
                                            <input type="text" class="form-control" id="middleName" name="middle_name"
                                                placeholder="Optional">
                                        </div>

                                        <!-- Last Name -->
                                        <div class="col-md-4">
                                            <label for="lastName" class="form-label fw-semibold">Last Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="lastName" name="last_name"
                                                placeholder="Doe" required>
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <label for="inputEmail" class="form-label fw-semibold">Email Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="inputEmail" name="email"
                                                placeholder="name@example.com" required>
                                        </div>

                                        <!-- Password -->
                                        <div class="col-md-6">
                                            <label for="inputPassword" class="form-label fw-semibold">Password <span
                                                    class="text-danger">*</span></label>
                                            <input type="password" class="form-control" id="inputPassword"
                                                name="password" placeholder="********" required minlength="6">
                                            <small class="text-muted">At least 6 characters</small>
                                        </div>

                                        <!-- Address -->
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label fw-semibold">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" name="address"
                                                placeholder="1234 Main St">
                                        </div>

                                        <!-- City -->
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label fw-semibold">City</label>
                                            <input type="text" class="form-control" id="inputCity" name="city">
                                        </div>

                                        <!-- State -->
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label fw-semibold">State</label>
                                            <select id="inputState" name="state" class="form-select">
                                                <option selected disabled>Choose...</option>
                                                <option>Sindh</option>
                                                <option>Punjab</option>
                                                <option>Balochistan</option>
                                                <option>KPK</option>
                                            </select>
                                        </div>


                                        <!-- Submit -->
                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-primary w-100 py-2 fw-semibold shadow-sm">--::Add::--</button>
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>