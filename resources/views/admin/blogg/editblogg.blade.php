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
                            <form action="{{ url('updateblog') }}" method="POST" enctype="multipart/form-data" class="row g-4">
                                @csrf
                            
                                <input type="hidden" name="id" value="{{ $blog->id }}">
                                
                                <!-- Blog Title -->
                                <div class="col-12">
                                    @error('title')
                                        <div class="text-danger mb-1">{{ $message }}</div>
                                    @enderror
                                    <label for="title" class="form-label fw-semibold">Blog Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                           id="title" name="title"
                                           value="{{ old('title', $blog->title) }}" required>
                                </div>

                                <!-- Category -->
                                <div class="col-md-6">
                                    @error('category_id')
                                        <div class="text-danger mb-1">{{ $message }}</div>
                                    @enderror
                                    <label for="category_id" class="form-label fw-semibold">Category <span class="text-danger">*</span></label>
                                    <select id="category_id" name="category_id" 
                                            class="form-select @error('category_id') is-invalid @enderror" required>
                                        <option disabled>Choose category...</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" 
                                                {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Content -->
                                <div class="col-12">
                                    @error('content')
                                        <div class="text-danger mb-1">{{ $message }}</div>
                                    @enderror
                                    <label for="content" class="form-label fw-semibold">Content <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('blog_content') is-invalid @enderror" 
                                              id="content" name="blog_content" rows="6" required>{{ old('blog_content', $blog->content) }}</textarea>
                                </div>

                                <!-- Featured Image -->
                                <div class="col-12">
                                    @error('image')
                                        <div class="text-danger mb-1">{{ $message }}</div>
                                    @enderror
                                    <label for="image" class="form-label fw-semibold">Featured Image</label>
                                    <input type="file" class="form-control mb-2 @error('image') is-invalid @enderror" 
                                           id="image" name="image" accept="image/*">
                                    
                                    <div>
                                        @if($blog->image)
                                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Current Image" class="img-thumbnail" width="200">
                                        @else
                                            <img src="https://via.placeholder.com/200x120" alt="Current Image" class="img-thumbnail">
                                        @endif
                                        <small class="text-muted d-block mt-1">Current Image</small>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-12 d-flex gap-2">
                                    <button type="submit" class="btn btn-success fw-semibold">Update Blog</button>
                                    <a href="{{ back()->getTargetUrl() }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>
