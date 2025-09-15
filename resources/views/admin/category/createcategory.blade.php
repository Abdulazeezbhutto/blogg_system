<x-layout>
    <x-slot name="title">Add Category | Admin</x-slot>
    <x-slot name="main">

        <div class="d-flex">
            <!-- Sidebar -->
            <aside class="bg-dark text-white p-3 vh-100 position-fixed" style="width: 250px;">
                <h3 class="text-center fw-bold mb-4">Admin</h3>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="/admin" class="nav-link text-white"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/admin/blogs" class="nav-link text-white"><i class="bi bi-journal-text me-2"></i> Blogs</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/admin/categories" class="nav-link active text-white bg-primary rounded"><i class="bi bi-folder me-2"></i> Categories</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/admin/users" class="nav-link text-white"><i class="bi bi-people me-2"></i> Users</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/admin/comments" class="nav-link text-white"><i class="bi bi-chat-left-text me-2"></i> Comments</a>
                    </li>
                </ul>
                <div class="mt-auto">
                    <a href="/logout" class="btn btn-outline-light w-100"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
                </div>
            </aside>

            <!-- Main Content -->
            <div class="flex-grow-1" style="margin-left: 250px;">
                <!-- Topbar -->
                <nav class="navbar navbar-light bg-white shadow-sm px-4 sticky-top">
                    <span class="navbar-brand fw-bold">Add Category</span>
                    <div class="d-flex align-items-center">
                        <span class="me-3">Welcome, Admin</span>
                        <img src="https://via.placeholder.com/40" class="rounded-circle" alt="Admin">
                    </div>
                </nav>

                <!-- Content -->
                <div class="container-fluid py-4">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0">
                                <div class="card-header bg-primary text-white fw-bold">Create New Category</div>
                                <div class="card-body">
                                    <form action="/admin/categories/store" method="POST">
                                        <!-- @csrf -->
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Category Name</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter category name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input type="text" id="slug" name="slug" class="form-control" placeholder="Enter slug (e.g., technology)" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100">Save Category</button>
                                    </form>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="listcategory" class="btn btn-link"><i class="bi bi-arrow-left"></i> Back to Categories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>
