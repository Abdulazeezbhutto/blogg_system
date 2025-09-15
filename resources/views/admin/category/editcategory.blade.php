<x-layout>
    <x-slot name="title">Edit Category | Admin</x-slot>
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
                                <div class="card-header bg-primary text-white fw-bold">Update Category</div>
                                <div class="card-body">
                                    <form action="#" method="POST">
                                        <!-- @csrf -->
                                        <!-- @method('PUT') -->

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Category Name</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="Enter category name" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input type="text" id="slug" name="slug" class="form-control"
                                                placeholder="Enter slug" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100">Update Category</button>
                                    </form>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="listcategory" class="btn btn-link">
                                    <i class="bi bi-arrow-left"></i> Back to Categories
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>
