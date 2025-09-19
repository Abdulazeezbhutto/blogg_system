<x-layout>
    <x-slot name="title">Add Category | Admin</x-slot>
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
                                <div class="card-header bg-primary text-white fw-bold">Create New Category</div>
                                <div class="card-body">

                                    <!-- ✅ Success Message -->
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <!-- ❌ Error Messages -->
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="storecategory" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Category Name</label>
                                            <input type="text" id="name" name="name" 
                                                   value="{{ old('name') }}" 
                                                   class="form-control @error('name') is-invalid @enderror" 
                                                   placeholder="Enter category name" required>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                      
                                        <button type="submit" class="btn btn-primary w-100">Save Category</button>
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
