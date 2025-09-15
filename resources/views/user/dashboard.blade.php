<x-layout>
    <x-slot name="title">User Dashboard</x-slot>
    <x-slot name="main">

        <div class="d-flex">
            <!-- Sidebar -->
            <aside class="bg-dark text-white p-3 vh-100 position-fixed" style="width: 250px;">
                <h3 class="text-center fw-bold mb-4">User Panel</h3>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="userdashboard" class="nav-link text-white"><i class="bi bi-person me-2"></i>
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
                <x-usertopbar></x-usertopbar>

                <!-- Profile Info -->
                <div class="container-fluid py-5">
                    <div class="row justify-content-center">
                        <!-- Profile Card -->
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm border-0 text-center p-4 mx-auto" style="max-width: 300px;">
                                <img src="https://via.placeholder.com/200" id="previewImage"
                                    class="rounded-circle shadow mb-3 mx-auto d-block" width="200" height="200"
                                    alt="Profile Image">
                                <h5 class="fw-bold">John Doe</h5>
                                <p class="text-muted">johndoe@example.com</p>
                            </div>
                        </div>

                        <!-- Edit Info Form -->
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0">
                                <div class="card-header bg-primary text-white fw-bold">Account Information</div>
                                <div class="card-body">
                                    <form action="/user/profile/update" method="POST" enctype="multipart/form-data">
                                        <!-- @csrf -->

                                        <!-- Profile Image -->
                                        <div class="mb-3">
                                            <label for="profileImage" class="form-label">Change Profile Image</label>
                                            <input type="file" class="form-control" id="profileImage"
                                                name="profileImage" accept="image/*">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="firstName" class="form-label">First Name</label>
                                                <input type="text" id="firstName" name="first_name" class="form-control"
                                                    value="John" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="lastName" class="form-label">Last Name</label>
                                                <input type="text" id="lastName" name="last_name" class="form-control"
                                                    value="Doe" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                value="johndoe@example.com" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" id="address" name="address" class="form-control"
                                                value="123 Main St">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="city" class="form-label">City</label>
                                                <input type="text" id="city" name="city" class="form-control"
                                                    value="Karachi">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="state" class="form-label">State</label>
                                                <select id="state" name="state" class="form-select">
                                                    <option>Sindh</option>
                                                    <option>Punjab</option>
                                                    <option>Balochistan</option>
                                                    <option>KPK</option>
                                                </select>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100">Update Profile</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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