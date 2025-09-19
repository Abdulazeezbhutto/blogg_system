<x-layout>
    <x-slot name="title">Profile | Admin</x-slot>
    <x-slot name="main">

        <div class="d-flex">
            <!-- Sidebar -->
            <x-adminsidebar></x-adminsidebar>

            <!-- Main Content -->
            <div class="flex-grow-1" style="margin-left: 250px;">
                <!-- Topbar -->
                <x-admintopbar></x-admintopbar>

                <!-- Profile Content -->
                <div class="container-fluid py-4">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card shadow-sm border-0">
                                <div class="card-header bg-primary text-white fw-bold">
                                    My Profile
                                </div>
                                <div class="card-body text-center">

                                    <!-- Error Messages -->
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible fade show text-start" role="alert">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <!-- Success Message -->
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show text-start"
                                            role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <!-- Profile Image -->
                                    <img src="{{ $user->image_path ? asset($user->image_path) : 'profile' }}"
                                        class="rounded-circle mb-3 border shadow-sm" width="120" height="120"
                                        alt="Profile Image">

                                    <!-- Profile Details -->
                                    <h4 class="fw-bold">
                                        {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}
                                    </h4>
                                    <p class="text-muted mb-1">{{ $user->email }}</p>
                                    <p>
                                        <span class="badge bg-success">
                                            {{ ucfirst($user->role) }}
                                        </span>
                                    </p>

                                    <!-- Divider -->
                                    <hr>

                                    <!-- Edit Profile Form -->
                                    <form action="{{ url('updateprofile') }}" method="POST"
                                        enctype="multipart/form-data" class="text-start">
                                        @csrf
                                        <input type="hidden" name="id" id="id" value="{{ $user->id }}">

                                        <div class="mb-3">
                                            <label for="profileImage" class="form-label">Change Profile Image</label>
                                            <input type="file" id="profileImage" name="profileImage"
                                                class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input type="text" id="first_name" name="first_name" class="form-control"
                                                value="{{ $user->first_name }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="middle_name" class="form-label">Middle Name</label>
                                            <input type="text" id="middle_name" name="middle_name" class="form-control"
                                                value="{{ $user->middle_name }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input type="text" id="last_name" name="last_name" class="form-control"
                                                value="{{ $user->last_name }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                value="{{ $user->email }}" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100">Update Profile</button>
                                    </form>
                                </div>
                            </div>

                            <div class="text-center mt-3">
                                <a href="{{ url('admin') }}" class="btn btn-link">
                                    <i class="bi bi-arrow-left"></i> Back to Dashboard
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>