<x-layout>
    <x-slot name="title">Users | Admin</x-slot>
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
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-primary text-white fw-bold d-flex justify-content-between align-items-center">
                            <span>Users List</span>
                            <div class="d-flex gap-2">
                                <!-- Search Bar -->
                                <form action="" method="GET" class="d-flex">
                                    <input type="text" name="search" class="form-control form-control-sm"
                                           placeholder="Search users...">
                                    <button type="submit" class="btn btn-light btn-sm ms-2">
                                        <i class="bi bi-search"></i> Search
                                    </button>
                                </form>
                                <a href="adduser" class="btn btn-light btn-sm">
                                    <i class="bi bi-plus-circle me-1"></i> Add User
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Joined</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example Row -->
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="https://via.placeholder.com/50" alt="Profile"
                                                class="rounded-circle shadow-sm" width="50" height="50">
                                        </td>
                                        <td>John Doe</td>
                                        <td>johndoe@example.com</td>
                                        <td><span class="badge bg-primary">Admin</span></td>
                                        <td>Sep 10, 2025</td>
                                        <td>
                                            <a href="edituser" class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <a href="/admin/users/delete/1" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <img src="https://via.placeholder.com/50" alt="Profile"
                                                class="rounded-circle shadow-sm" width="50" height="50">
                                        </td>
                                        <td>Jane Smith</td>
                                        <td>janesmith@example.com</td>
                                        <td><span class="badge bg-secondary">User</span></td>
                                        <td>Sep 11, 2025</td>
                                        <td>
                                            <a href="edituser" class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <a href="/admin/users/delete/2" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- More rows will be looped here dynamically -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>
