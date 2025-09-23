<x-layout>
    <x-slot name="title">User Dashboard</x-slot>
    <x-slot name="main">

        <div class="d-flex">
            <!-- Sidebar -->
            <aside class="bg-dark text-white p-3 vh-100 position-fixed" style="width: 250px;">
                <h3 class="text-center fw-bold mb-4">User Panel</h3>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="userprofile" class="nav-link text-white"><i class="bi bi-person me-2"></i>
                            Profile</a>
                    </li>
                     <li class="nav-item mb-2">
                        <a href="/" class="nav-link text-white"><i class="bi bi-person me-2"></i>
                            Back to Home</a>
                    </li>
                </ul>
                <div class="mt-auto">
                    <a href="/logout" class="btn btn-outline-light w-100"><i class="bi bi-box-arrow-right me-2"></i>
                        Logout</a>
                </div>
            </aside>

            <!-- Main Content -->
            <div class="flex-grow-1" style="margin-left: 250px;">
                <!-- Topbar -->
                
                    <nav class="navbar navbar-light bg-white shadow-sm px-4 sticky-top">
                    <span class="navbar-brand fw-bold">Dashboard</span>
                    <div class="d-flex align-items-center">
                        <span class="me-3">Welcome, User</span>
                        <img src="{{ asset('uploads/profile/') }}" class="rounded-circle" alt="User" width = "50px">

                    </div>
                </nav>
               

            </div>
        </div>

    </x-slot>
</x-layout>

<!-- Image Preview Script -->
<script>
    document.getElementById("profileImage").addEventListener("change", function (event) {
        const reader = new FileReader();
        reader.onload = function () {
            document.getElementById("previewImage").src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>