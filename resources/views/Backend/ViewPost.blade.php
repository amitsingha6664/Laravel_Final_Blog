@extends('Backend.Layout.MasterLayout')

@section('Content')

<div class="container py-5">
    <div class="card post-card">
        <img src="{{ asset('Assets/img/Blog-Home.jpg') }}" class="post-image" alt="Post Image" />
        <div class="p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge badge-category text-white px-3 py-2">{{ $Category_Name }}</span>
                <span class="badge bg-success px-3 py-2">{{ $Post->status }}</span>
            </div>
                <h1 class="post-title mb-3">{{ $Post->post_title }}</h1>
            <div class="meta-info mb-3">
                <i class="fa-regular fa-calendar icon"></i> Posted on: <strong>{{ $Post->created_at }}</strong>
            </div>
                <hr />
            <div class="post-content mb-4">
                <p>
                    {{ $Post->post_description }}
                </p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <a href="{{ route('Post-Edit-View', $Post->id) }}" class="btn btn-primary btn-rounded">
                    <i class="fas fa-edit icon"></i>Edit Post
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
