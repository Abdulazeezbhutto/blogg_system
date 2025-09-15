<x-layout>
    <x-slot name="title">Categories | Admin</x-slot>
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
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="fw-bold">All Categories</h4>
                        <a href="createcategory" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-1"></i> Add Category
                        </a>
                    </div>

                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Slug</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example Rows -->
                                    <tr>
                                        <td>1</td>
                                        <td>Technology</td>
                                        <td>technology</td>
                                        <td>2025-09-10</td>
                                        <td>
                                            <a href="editcategory" class="btn btn-sm btn-warning me-2"><i
                                                    class="bi bi-pencil-square"></i> Edit</a>
                                            <form action="editcategory" method="POST" class="d-inline">
                                                <!-- @csrf @method('DELETE') -->
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="bi bi-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Programming</td>
                                        <td>programming</td>
                                        <td>2025-09-12</td>
                                        <td>
                                            <a href="editcategory" class="btn btn-sm btn-warning me-2"><i
                                                    class="bi bi-pencil-square"></i> Edit</a>
                                            <form action="" method="POST" class="d-inline">
                                                <!-- @csrf @method('DELETE') -->
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="bi bi-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- Dynamic Loop Rows Yahan Ayengi -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>