@extends('Frontend.Layout.MasterLayout')

@section('Content')

<!-- Hero Section -->
<section class="hero-header d-flex align-items-center">
    <div class="container text-center text-white">
        <h1 class="display-3 fw-bold mb-4">Share Your Thoughts</h1>
        <p class="lead mb-5">Here you can share your knowledge, experience, and creativity with the world. Be a part of our community.</p>
        <a href="{{ route('Add-New-Post') }}" class="btn btn-primary btn-lg px-4 py-2"><i class="fas fa-pen-fancy me-2"></i>Write Now</a>
    </div>
</section>

<!-- Blog Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold position-relative d-inline-block">
                <span class="text-primary">Recent</span> Posts
            </h2>
            <p class="text-muted">Check out our latest blog posts</p>
        </div>

        <div class="row g-4">
            @foreach($All_Post as $Post)
            <div class="col-md-6 col-lg-4">
                <div class="blog-card-new position-relative overflow-hidden rounded-4 shadow-lg bg-white h-100 d-flex flex-column">
                    
                    <!-- Image Section -->
                    <div class="blog-img-new position-relative">
                        <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&w=1350&q=80" alt="Post Image">
                        <div class="read-more-overlay d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-light fw-bold px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>

                    <!-- Post Content -->
                    <div class="p-4 flex-grow-1 d-flex flex-column">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge rounded-pill bg-primary">{{$Post->category_name}}</span>
                            <small class="text-muted"><i class="far fa-clock me-1"></i> {{$Post->created_at}}</small>
                        </div>
                        <h5 class="fw-bold mb-2">{{$Post->post_title}}</h5>
                    </div>

                    <!-- Comment List -->
                    <div class="comment-list px-3 py-2 border-top bg-light">
                        <h6 class="fw-bold mb-3">Comments (3)</h6>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <img src="https://i.pravatar.cc/40?img=1" class="rounded-circle" alt="User" width="40" height="40">
                            </div>
                            <div>
                                <strong>Rahim</strong> <small class="text-muted">· 2 hours ago</small>
                                <p class="mb-1">Great post! Thanks for sharing your thoughts.</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <img src="https://i.pravatar.cc/40?img=2" class="rounded-circle" alt="User" width="40" height="40">
                            </div>
                            <div>
                                <strong>Jannat</strong> <small class="text-muted">· 1 hour ago</small>
                                <p class="mb-1">Loved the details you shared, really helpful.</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <img src="https://i.pravatar.cc/40?img=3" class="rounded-circle" alt="User" width="40" height="40">
                            </div>
                            <div>
                                <strong>Ali</strong> <small class="text-muted">· 10 mins ago</small>
                                <p class="mb-1">Looking forward to your next post!</p>
                            </div>
                        </div>
                    </div>

                    <!-- Comment Form -->
                    <div class="px-3 py-3 border-top bg-white">
                        <h6 class="fw-bold mb-2">Leave a Comment</h6>
                        <textarea class="form-control mb-2" rows="2" placeholder="Write your comment..."></textarea>
                        <button class="btn btn-sm btn-primary">Post Comment</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
