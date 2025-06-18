@extends('Backend.Layout.MasterLayout')

@section('Content')

<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card top_border">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Total Posts</h6>
                        <h3 class="mb-0">{{ $Post_Count }}</h3>
                    </div>
                    <div class="p-3 rounded" style="background-color: rgba(13, 110, 253, 0.1);">
                        <i class="fas fa-file-alt text-primary fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3">
        <div class="card top_border">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Total Users</h6>
                        <h3 class="mb-0">{{$User_Count}}</h3>
                    </div>
                    <div class="p-3 rounded" style="background-color: rgba(13, 110, 253, 0.1);">
                        <i class="fas fa-users text-info fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3">
        <div class="card top_border">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Total Views</h6>
                        <h3 class="mb-0">8956</h3>
                    </div>
                    <div class="p-3 rounded" style="background-color: rgba(13, 110, 253, 0.1);">
                        <i class="fa-solid fa-eye text-success fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3">
        <div class="card top_border">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Pending Posts</h6>
                        <h3 class="mb-0">342</h3>
                    </div>
                    <div class="p-3 rounded" style="background-color: rgba(13, 110, 253, 0.1);">
                        <i class="fa-solid fa-hourglass-half text-warning fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5>Summary</h5>
    </div>
    <div class="card-body">
        <p>This dashboard helps you monitor your content, comments, users, and more in one place. Use the left sidebar to navigate to specific areas like creating a new post, managing categories, or reviewing comments. Make sure to regularly check the stats to stay updated with your site's performance.</p>
    </div>
</div>

@endsection