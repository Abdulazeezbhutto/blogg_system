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
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0">
                                <div class="card-header bg-primary text-white fw-bold">Update User</div>
                                <div class="card-body">
                                    <form action="/admin/users/update/1" method="POST" enctype="multipart/form-data">
                                        <!-- @csrf -->
                                        <!-- @method('PUT') -->

                                        <!-- Profile Image -->
                                        <div class="mb-3 text-center">
                                            <img src="https://via.placeholder.com/100" 
                                                 class="rounded-circle shadow-sm mb-3" 
                                                 alt="User Profile" width="100" height="100">
                                            <div>
                                                <label for="profile_image" class="form-label">Profile Image</label>
                                                <input type="file" id="profile_image" name="profile_image" 
                                                       class="form-control" accept="image/*">
                                                <small class="text-muted">Leave blank to keep existing image</small>
                                            </div>
                                        </div>

                                        <!-- Full Name -->
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Full Name</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="Enter full name" required>
                                        </div>

                                        <!-- Email -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Enter email" required>
                                        </div>

                                        <!-- Role -->
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role</label>
                                            <select id="role" name="role" class="form-select" required>
                                                <option value="">-- Select Role --</option>
                                                <option value="admin">Admin</option>
                                                <option value="editor">Editor</option>
                                                <option value="user">User</option>
                                            </select>
                                        </div>

                                        <!-- Password -->
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password (optional)</label>
                                            <input type="password" id="password" name="password" class="form-control"
                                                placeholder="Leave blank if not changing">
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100">Update User</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Back Link -->
                            <div class="text-center mt-3">
                                <a href="listusers" class="btn btn-link">
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
