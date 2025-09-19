<x-layout>
    <x-slot name="title">Users | Admin</x-slot>
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
                        <div class="card-header bg-primary text-white fw-bold d-flex justify-content-between align-items-center">
                            <span>Users List</span>
                            <div class="d-flex gap-2">
                                <!-- Search Bar -->
                                <form action="" method="GET" class="d-flex">
                                    <input type="text" name="search" value="{{ request('search') }}"
                                           class="form-control form-control-sm"
                                           placeholder="Search users...">
                                    <button type="submit" class="btn btn-light btn-sm ms-2">
                                        <i class="bi bi-search"></i> Search
                                    </button>
                                </form>
                                <a href="{{ url('adduser') }}" class="btn btn-light btn-sm">
                                    <i class="bi bi-plus-circle me-1"></i> Add User
                                </a>
                            </div>
                        </div>
                        <div class="card-body">

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

                            @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <!-- ✅ End Alerts -->

                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>id</th>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Joined</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $index => $user)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>
                                                <img src="{{ $user->image_path 
                                                    ? asset('uploads/users/' . $user->image_path) 
                                                    : 'https://via.placeholder.com/50' }}" 
                                                    alt="Profile" 
                                                    class="rounded-circle shadow-sm" width="50" height="50">
                                            </td>
                                            <td>{{ $user->first_name." ".$user->middle_name." ".$user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <span class="badge {{ $user->role == "admin" ? 'bg-primary' : 'bg-secondary' }}">
                                                    {{ ucfirst($user->role ) }}
                                                </span>
                                            </td>
                                            <td>{{ $user->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <a href="{{ url('edituser/'.$user->id) }}" class="btn btn-sm btn-primary">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </a>
                                               <form action="{{ url('deleteuser') }}" method="POST" style="display:inline;">
                                                   @csrf
                                                   <input type="hidden" name="id" value="{{ $user->id }}">
                                                   <button type="submit" class="btn btn-sm btn-danger"
                                                           onclick="return confirm('Are you sure you want to delete this user?');">
                                                       <i class="bi bi-trash"></i> Delete
                                                   </button>
                                               </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center text-muted">No users found.</td>
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
