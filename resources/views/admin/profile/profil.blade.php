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
                        <div class="col-md-8">
                            <div class="card shadow-sm border-0">
                                <div class="card-header bg-primary text-white fw-bold">
                                    My Profile
                                </div>
                                <div class="card-body text-center">
                                    <!-- Profile Image -->
                                    <img src="https://via.placeholder.com/120" 
                                         class="rounded-circle mb-3 border shadow-sm" 
                                         alt="Profile Image">

                                    <!-- Profile Details -->
                                    <h4 class="fw-bold">Admin Name</h4>
                                    <p class="text-muted mb-1">admin@example.com</p>
                                    <p><span class="badge bg-success">Administrator</span></p>

                                    <!-- Divider -->
                                    <hr>

                                    <!-- Edit Profile Form -->
                                    <form action="/admin/profile/update" method="POST" enctype="multipart/form-data" class="text-start">
                                        <!-- @csrf -->
                                        <div class="mb-3">
                                            <label for="profileImage" class="form-label">Change Profile Image</label>
                                            <input type="file" id="profileImage" name="profileImage" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Full Name</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter full name" value="Admin Name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" value="admin@example.com" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">New Password (optional)</label>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Leave blank if not changing">
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100">Update Profile</button>
                                    </form>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="/admin" class="btn btn-link">
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
