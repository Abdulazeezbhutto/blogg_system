<x-layout>
    <x-slot name="title">Welcome | My Blog</x-slot>
    <x-slot name="main">
        <!-- Navbar -->
         <x-navbar>
            
         </x-navbar>

        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <h1 data-aos="fade-up" data-aos-duration="1000">Welcome to My Blog</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="200">
                    Share your thoughts, explore new ideas, and connect with the world.
                </p>
                <a href="#blogs" class="btn btn-light btn-lg mt-3" data-aos="zoom-in" data-aos-delay="400">Explore
                    Blogs</a>
            </div>
        </section>

        <!-- Blog Preview Section -->
        <section class="py-5" id="blogs">
            <div class="container">
                <h2 class="text-center mb-5" data-aos="fade-down">Latest Posts</h2>
                <div class="row g-4">
                    <!-- Blog Card 1 -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog 1">
                            <div class="card-body">
                                <h5 class="card-title">Blog Post One</h5>
                                <p class="card-text">A quick preview of your blog content. Engaging and short intro text
                                    goes here.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Card 2 -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog 2">
                            <div class="card-body">
                                <h5 class="card-title">Blog Post Two</h5>
                                <p class="card-text">Highlight something interesting to attract readers. Keep it short
                                    and catchy.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Card 3 -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog 3">
                            <div class="card-body">
                                <h5 class="card-title">Blog Post Three</h5>
                                <p class="card-text">Give visitors a reason to click. Summarize the value of the post
                                    here.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </x-slot>
</x-layout>>
<!-- Navbar -->