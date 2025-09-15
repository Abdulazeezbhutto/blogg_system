<x-layout>
    <x-slot name="title">Comments | Admin</x-slot>
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
                            <span>Comments List</span>
                            <span class="badge bg-light text-dark">Total: 45</span>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>User</th>
                                        <th>Comment</th>
                                        <th>Blog Post</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example Row -->
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://via.placeholder.com/40" 
                                                     class="rounded-circle me-2" alt="User">
                                                <span>John Doe</span>
                                            </div>
                                        </td>
                                        <td>Great article! Very helpful.</td>
                                        <td><a href="/blog/1" class="text-decoration-none">How to Build Modern Web Apps</a></td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                        <td>Sep 13, 2025</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">
                                                <i class="bi bi-check-circle"></i> Approve
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://via.placeholder.com/40" 
                                                     class="rounded-circle me-2" alt="User">
                                                <span>Jane Smith</span>
                                            </div>
                                        </td>
                                        <td>I think React is the best framework.</td>
                                        <td><a href="/blog/2" class="text-decoration-none">Best JavaScript Frameworks</a></td>
                                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                                        <td>Sep 12, 2025</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">
                                                <i class="bi bi-check-circle"></i> Approve
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- More rows dynamically -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>
