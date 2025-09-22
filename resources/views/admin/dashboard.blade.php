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
                                    <h3 class="fw-bold">{{ $total_bloggs }}</h3>
                                </div>
                            </a>
                        </div>

                        <!-- Categories -->
                        <div class="col-md-3">
                            <a href="listcategory" class="text-decoration-none text-dark">
                                <div class="card shadow-sm border-0 text-center p-3 h-100">
                                    <h6 class="text-muted">Categories</h6>
                                    <h3 class="fw-bold">{{ $total_categories }}</h3>
                                </div>
                            </a>
                        </div>

                        <!-- Users -->
                        <div class="col-md-3">
                            <a href="listusers" class="text-decoration-none text-dark">
                                <div class="card shadow-sm border-0 text-center p-3 h-100">
                                    <h6 class="text-muted">Users</h6>
                                    <h3 class="fw-bold">{{ $total_users }}</h3>
                                </div>
                            </a>
                        </div>

                        <!-- Comments -->
                        <div class="col-md-3">
                            <a href="listcomments" class="text-decoration-none text-dark">
                                <div class="card shadow-sm border-0 text-center p-3 h-100">
                                    <h6 class="text-muted">Comments</h6>
                                    <h3 class="fw-bold">{{ $total_comments }}</h3>
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
                            <table class="table table-bordered table-hover align-middle shadow-sm">
                                <thead class="table-primary text-center">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blog_list as $index => $blog)
                                        <tr>
                                            <td class="text-center fw-bold">{{ $index + 1 }}</td>
                                            <td>{{ Str::limit($blog->title, 40) }}</td>
                                            <td>
                                                <span class="badge bg-info text-dark">
                                                    {{ $blog->category_id ?? 'Uncategorized' }}
                                                </span>
                                            </td>
                                            <td>
                                                <i class="bi bi-person-circle me-1 text-secondary"></i>
                                                {{ $blog->user_id ?? 'Unknown' }}
                                            </td>
                                            <td class="text-muted">
                                                <i class="bi bi-calendar3 me-1"></i>
                                                {{ $blog->created_at->format('d M, Y') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </x-slot>
</x-layout>