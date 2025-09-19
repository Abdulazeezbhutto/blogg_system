<x-layout>
    <x-slot name="title">Edit User | Admin</x-slot>
    <x-slot name="main">

        <div class="d-flex">
            <!-- Sidebar -->
            <x-adminsidebar></x-adminsidebar>

            <!-- Main Content -->
            <div class="flex-grow-1" style="margin-left: 250px;">
                <!-- Topbar -->
                <x-admintopbar></x-admintopbar>

                <!-- Content -->
                <div class="container-fluid py-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10"> <!-- Width increased -->
                            <div class="card shadow-sm border-0">
                                <div class="card-header bg-primary text-white fw-bold">Update User</div>
                                <div class="card-body">
                                    <form action="{{ url("updateuser") }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        

                                        <!-- Profile Image -->
                                        <div class="mb-3 text-center">
                                            <img src="{{ $user->image_path 
                                                ? asset($user->image_path) 
                                                : 'https://via.placeholder.com/100' }}" 
                                                 class="rounded-circle shadow-sm mb-3" 
                                                 alt="User Profile" width="100" height="100">
                                        </div>

                                        <!-- Full Name -->
                                        <div class="mb-3">
                                            <label for="full_name" class="form-label">Full Name</label>
                                            <input type="text" id="full_name" name="full_name" class="form-control"
                                                value="{{ old('full_name', $user->first_name.' '.$user->middle_name.' '.$user->last_name) }}"
                                                placeholder="Enter full name" disabled>
                                        </div>

                                        <!-- Email -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                value="{{ old('email', $user->email) }}"
                                                placeholder="Enter email" disabled>
                                        </div>

                                        <!-- Role -->
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role</label>
                                            <select id="role" name="role" class="form-select" required>
                                                <option value="">-- Select Role --</option>
                                                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                                <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
                                            </select>
                                        </div>
                                        <input type="hidden" name = "id" value = "{{$user->id  }}">

                                        <!-- Submit Button -->
                                        <button type="submit" class="btn btn-primary w-100">Update User</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Back Link -->
                            <div class="text-center mt-3">
                                <a href="{{ url('listusers') }}" class="btn btn-link">
                                    <i class="bi bi-arrow-left"></i> Back to Users
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>
