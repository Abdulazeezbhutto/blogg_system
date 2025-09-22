<x-layout>
    <x-slot name="title">Comments | Admin</x-slot>
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
                        <div
                            class="card-header bg-primary text-white fw-bold d-flex justify-content-between align-items-center">
                            <span>Comments List</span>
                            <span class="badge bg-light text-dark">Total: {{ $total_count }}</span>
                        </div>

                        <!-- 🔍 Search Only -->
                        <div class="card-body border-bottom pb-3">
                            <form class="d-flex align-items-center">
                                <input type="text" class="form-control form-control-sm me-2"
                                    style="max-width: 350px; width: 100%;" placeholder="Search by user or comment...">
                                <button type="button" class="btn btn-sm btn-primary">
                                    <i class="bi bi-search"></i> Search
                                </button>
                                <button type="reset" class="btn btn-sm btn-secondary ms-2">Reset</button>
                            </form>
                        </div>

                        <div class="card-body">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>User</th>
                                        <th>Comment</th>
                                        <th>Blog Post</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($all_comments as $comment)
                                        <tr>
                                            <td>{{ $comment->id }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://via.placeholder.com/40" class="rounded-circle me-2"
                                                        alt="User">
                                                    <span>{{ $comment->user_id }}</span>
                                                </div>
                                            </td>
                                            <td>{{ $comment->comment_content }}</td>
                                            <td>
                                                <a href="singlepost/{{ $comment->post_id }}"
                                                    class="text-decoration-none">View Post</a>
                                            </td>
                                            <td>{{ $comment->created_at }}</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-warning">
                                                    <i class="bi bi-check-circle"></i> Approve
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-muted">
                                                🚫 Comments not found
                                            </td>
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