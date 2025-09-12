<x-layout>
    <x-slot name="title">Signup | My Blog</x-slot>
    <x-slot name="main">
        <x-navbar></x-navbar>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card shadow border-0">
                        <div class="card-body p-4">
                            <h3 class="text-center text-primary mb-4" data-aos="zoom-in" data-aos-delay="200">Sign Up</h3>

                            <!-- enctype added for file upload -->
                            <form class="row g-3" enctype="multipart/form-data">
                                
                                <!-- Profile Image -->
                                <div class="col-12" data-aos="fade-up" data-aos-delay="250">
                                    <label for="profileImage" class="form-label">Profile Image</label>
                                    <input type="file" class="form-control" id="profileImage" name="profileImage" accept="image/*" required>
                                </div>

                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" required>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                                    <label for="inputPassword4" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" required>
                                </div>
                                <div class="col-12" data-aos="fade-right" data-aos-delay="400">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="col-12" data-aos="fade-left" data-aos-delay="400">
                                    <label for="inputAddress2" class="form-label">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="500">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-2" data-aos="fade-left" data-aos-delay="500">
                                    <label for="inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Accept Terms & Conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12" data-aos="zoom-in" data-aos-delay="700">
                                    <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
