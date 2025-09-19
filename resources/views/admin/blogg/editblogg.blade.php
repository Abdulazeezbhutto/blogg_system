<x-layout>
    <x-slot name="title">Edit Blog | Admin</x-slot>
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
                            <h4 class="fw-bold mb-4">Edit Blog Post</h4>

                            <!-- ✅ Success & Error Alerts -->
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <!-- Blog Form -->
                            <form action="/admin/blogs/update/1" method="POST" enctype="multipart/form-data" class="row g-4">
                                @csrf
                                @method('PUT')

                                <!-- Blog Title -->
                                <div class="col-12">
                                    <label for="title" class="form-label fw-semibold">Blog Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                                        value="How to Build Modern Web Apps" required>
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Category -->
                                <div class="col-md-6">
                                    <label for="category" class="form-label fw-semibold">Category <span class="text-danger">*</span></label>
                                    <select id="category" name="category" class="form-select @error('category') is-invalid @enderror" required>
                                        <option disabled>Choose category...</option>
                                        <option value="Tech" selected>Tech</option>
                                        <option value="Programming">Programming</option>
                                        <option value="Lifestyle">Lifestyle</option>
                                        <option value="Education">Education</option>
                                    </select>
                                    @error('category')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Tags -->
                                <div class="col-md-6">
                                    <label for="tags" class="form-label fw-semibold">Tags</label>
                                    <input type="text" class="form-control @error('tags') is-invalid @enderror" id="tags" name="tags"
                                        value="PHP, Laravel, Web Development">
                                    <small class="text-muted">Separate tags with commas (,)</small>
                                    @error('tags')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Content -->
                                <div class="col-12">
                                    <label for="content" class="form-label fw-semibold">Content <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="6" required>Here goes the existing blog content...</textarea>
                                    @error('content')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Featured Image -->
                                <div class="col-12">
                                    <label for="image" class="form-label fw-semibold">Featured Image</label>
                                    <input type="file" class="form-control mb-2 @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <div>
                                        <img src="https://via.placeholder.com/200x120" alt="Current Image" class="img-thumbnail">
                                        <small class="text-muted d-block mt-1">Current Image</small>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-12 d-flex gap-2">
                                    <button type="submit" class="btn btn-success fw-semibold">Update Blog</button>
                                    <a href="blogg" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>
