<x-layout>
    <x-slot name="title">Manage Blogs | Admin</x-slot>
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

                    <!-- Add Blog Button -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="fw-bold">All Blogs</h4>
                        <a href="create" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-2"></i> Add New Blog
                        </a>
                    </div>

                    <!-- Blogs Table -->
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>How to Build Modern Web Apps</td>
                                        <td>Tech</td>
                                        <td>Admin</td>
                                        <td>Sep 14, 2025</td>
                                        <td class="text-end">
                                            <a href="edit" class="btn btn-sm btn-primary me-1">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Best JavaScript Frameworks</td>
                                        <td>Programming</td>
                                        <td>John Doe</td>
                                        <td>Sep 13, 2025</td>
                                        <td class="text-end">
                                            <a href="edit" class="btn btn-sm btn-primary me-1">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- More blogs here dynamically -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </x-slot>
</x-layout>