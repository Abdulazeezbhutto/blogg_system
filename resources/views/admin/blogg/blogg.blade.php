<x-layout>
    <x-slot name="title">Manage Blogs | Admin</x-slot>
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
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                        <h4 class="fw-bold">All Blogs</h4>

                        <!-- 🔍 Search by Name -->
                        <form action="" method="GET" class="d-flex gap-2">
                            <input type="text" name="search" class="form-control form-control-sm"
                                placeholder="Search by name..." value="{{ request('search') }}">
                            <button class="btn btn-sm btn-primary">
                                <i class="bi bi-search"></i> Search
                            </button>
                        </form>

                        <!-- 📂 Filter by Category -->
                        <form action="" method="GET" class="d-flex gap-2">
                            <select name="category" class="form-select form-select-sm" onchange="this.form.submit()">
                                <option value="">All Categories</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </form>

                        <!-- ➕ Add Blog Button -->
                        <a href="create" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-2"></i> Add New Blog
                        </a>
                    </div>


                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <table class="table table-sm table-hover align-middle" style="font-size: 14px;">

                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th class="text-end fixid">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($blogs as $i => $blog)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->category_name ?? $blog->category->name ?? 'N/A' }}</td>
                                            <td>{{ $blog->user_first_name ?? $blog->user->name ?? 'Unknown' }}</td>
                                            <td>{{ $blog->created_at }}</td>
                                            <td>{{ $blog->updated_at }}</td>
                                            <td class="text-end">
                                                <a href="" class="btn btn-sm btn-primary me-1"><i class="bi bi-pencil"></i>
                                                    Edit</a>
                                                <form action="" method="POST" class="d-inline"
                                                    onsubmit="return confirm('Are you sure?');">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="bi bi-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center text-muted">No blogs found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </x-slot>
</x-layout>
<style>
    .fixid {
        width: 150px;
        /* ya jitna chhota/chhoda chaho */
        white-space: nowrap;
        /* line break na ho */
        text-align: right;
        /* right align (already hai Bootstrap ke through) */
    }
</style>