<x-layout>
    <x-slot name="title">Blog Title | My Blog</x-slot>
    <x-slot name="main">
        <x-navbar></x-navbar>

        <!-- Blog Header -->
        <section class="bg-light py-5 mb-5">
            <div class="container text-center">
                <h1 class="fw-bold text-primary mb-3" data-aos="fade-down">{{ $post[0]->title }}</h1>
                <p class="text-muted" data-aos="fade-up">
                    By <span class="fw-semibold">{{ $post[0]->author_role }}</span> • <span
                        class="fw-semibold">Published At</span> •{{ $post[0]->created_at}} •

                </p>
            </div>
        </section>

        <!-- Blog Content -->
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <!-- Featured Image -->
                    <div class="mb-4" data-aos="zoom-in">
                        <img src="{{ asset('uploads/blogs/' . $post[0]->image) }}" alt="Blog Image"
                            class="img-fluid rounded shadow-sm">
                    </div>

                    <!-- Blog Body -->
                    <article class="blog-content" data-aos="fade-up" data-aos-delay="200">
                        <p>
                            {{ $post[0]->content }}
                        </p>
                    </article>

                    <!-- Tags -->


                    <!-- Divider -->
                    <hr class="my-5">

                    <!-- Author Section -->
                    <div class="d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="400">
                        <img src="{{asset('uploads/profile/' . $post[0]->author_profile)}}" class="rounded-circle me-3"
                            alt="Author">
                        <div>
                            <h6 class="fw-bold mb-0">{{ $post[0]->author_role }}</h6>
                            <p class="text-muted mb-0">About Author .</p>
                        </div>
                    </div>


                    <!-- Comments Section -->
                    <div data-aos="fade-up" data-aos-delay="500">
                        <h4 class="mb-4">Comments</h4>

                        @forelse ($comments as $comment)
                            <!-- Single Comment -->
                            <div class="mb-4">
                                <strong>{{ $comment->first_name }}</strong>
                                <span class="text-muted small">
                                    • {{ $comment->created_at->format("M d, Y") }}
                                </span>
                                <p class="mb-1">{{ $comment->comment_content }}</p>
                            </div>
                        @empty
                            <p class="text-muted">Be first to comment</p>
                        @endforelse

                        <!-- Comment Form -->
                        <form class="mt-4" method="POST" action="{{ url('addcomment') }}">
                            @csrf
                            <input type="hidden" name="post_id" value = "{{ $post[0]->id }}">
                            <div class="mb-3">
                                <label for="comment" class="form-label">Leave a Comment</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                                @error('comment')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Post Comment</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </x-slot>
</x-layout>