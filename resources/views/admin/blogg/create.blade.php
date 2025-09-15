<x-layout>
    <x-slot name="title">Add Blog | Admin</x-slot>
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
                        <div class="card-body">
                            <h4 class="fw-bold mb-4">Create New Blog</h4>

                            <!-- Blog Form -->
                            <form action="/admin/blogs/store" method="POST" enctype="multipart/form-data" class="row g-4">
                                <!-- @csrf -->

                                <!-- Blog Title -->
                                <div class="col-12">
                                    <label for="title" class="form-label fw-semibold">Blog Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter blog title" required>
                                </div>

                                <!-- Category -->
                                <div class="col-md-6">
                                    <label for="category" class="form-label fw-semibold">Category <span class="text-danger">*</span></label>
                                    <select id="category" name="category" class="form-select" required>
                                        <option selected disabled>Choose category...</option>
                                        <option value="Tech">Tech</option>
                                        <option value="Programming">Programming</option>
                                        <option value="Lifestyle">Lifestyle</option>
                                        <option value="Education">Education</option>
                                    </select>
                                </div>

                                <!-- Tags -->
                                <div class="col-md-6">
                                    <label for="tags" class="form-label fw-semibold">Tags</label>
                                    <input type="text" class="form-control" id="tags" name="tags" placeholder="e.g. PHP, Laravel, Web Development">
                                    <small class="text-muted">Separate tags with commas (,)</small>
                                </div>

                                <!-- Content -->
                                <div class="col-12">
                                    <label for="content" class="form-label fw-semibold">Content <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="content" name="content" rows="6" placeholder="Write your blog content here..." required></textarea>
                                </div>

                                <!-- Featured Image -->
                                <div class="col-12">
                                    <label for="image" class="form-label fw-semibold">Featured Image</label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                </div>

                                <!-- Submit -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 fw-semibold">Publish Blog</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>
