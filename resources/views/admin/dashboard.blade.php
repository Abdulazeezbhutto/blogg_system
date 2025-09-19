<x-layout>
    <x-slot name="title">Admin Dashboard | My Blog</x-slot>
    <x-slot name="main">

        <div class="d-flex">
            <!-- Sidebar -->
            <x-adminsidebar></x-adminsidebar>

            <!-- Main Content -->
            <div class="flex-grow-1" style="margin-left: 250px;">
                <!-- Topbar -->
                <x-admintopbar></x-admintopbar>

                <!-- Content Area -->
                <div class="container-fluid py-4">

                    <!-- Stats -->
                    <div class="row g-4 mb-4">
                        <!-- Total Blogs -->
                        <div class="col-md-3">
                            <a href="blogg" class="text-decoration-none text-dark">
                                <div class="card shadow-sm border-0 text-center p-3 h-100">
                                    <h6 class="text-muted">Total Blogs</h6>
                                    <h3 class="fw-bold">120</h3>
                                </div>
                            </a>
                        </div>

                        <!-- Categories -->
                        <div class="col-md-3">
                            <a href="listcategory" class="text-decoration-none text-dark">
                                <div class="card shadow-sm border-0 text-center p-3 h-100">
                                    <h6 class="text-muted">Categories</h6>
                                    <h3 class="fw-bold">10</h3>
                                </div>
                            </a>
                        </div>

                        <!-- Users -->
                        <div class="col-md-3">
                            <a href="listusers" class="text-decoration-none text-dark">
                                <div class="card shadow-sm border-0 text-center p-3 h-100">
                                    <h6 class="text-muted">Users</h6>
                                    <h3 class="fw-bold">450</h3>
                                </div>
                            </a>
                        </div>

                        <!-- Comments -->
                        <div class="col-md-3">
                            <a href="listcomments" class="text-decoration-none text-dark">
                                <div class="card shadow-sm border-0 text-center p-3 h-100">
                                    <h6 class="text-muted">Comments</h6>
                                    <h3 class="fw-bold">320</h3>
                                </div>
                            </a>
                        </div>
                    </div>


                    <!-- Recent Blogs -->
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white fw-bold d-flex justify-content-between align-items-center">
                            <span>Recent Blogs</span>

                            <!-- Search + Date Filter (UI Only) -->
                            <form class="row g-2 align-items-center">
                                <!-- Search -->
                                <div class="col-auto">
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Search by title...">
                                </div>

                                <!-- From Date -->
                                <div class="col-auto d-flex align-items-center">
                                    <label class="me-2 small text-muted">From:</label>
                                    <input type="date" class="form-control form-control-sm">
                                </div>

                                <!-- To Date -->
                                <div class="col-auto d-flex align-items-center">
                                    <label class="me-2 small text-muted">To:</label>
                                    <input type="date" class="form-control form-control-sm">
                                </div>

                                <!-- Buttons -->
                                <div class="col-auto">
                                    <button type="button" class="btn btn-sm btn-primary">Filter</button>
                                    <button type="reset" class="btn btn-sm btn-secondary">Reset</button>
                                </div>
                            </form>

                        </div>

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
                                            <a href="edit" class="btn btn-sm btn-primary me-1">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Best JavaScript Frameworks</td>
                                        <td>Programming</td>
                                        <td>John Doe</td>
                                        <td>Sep 13, 2025</td>
                                        <td class="text-end">
                                            <a href="edit" class="btn btn-sm btn-primary me-1">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </x-slot>
</x-layout>