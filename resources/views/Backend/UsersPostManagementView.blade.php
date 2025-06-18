@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- Filters -->
<div class="row mb-3">
    <div class="col-md-4">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search posts...">
            <button class="btn btn-outline-secondary" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="d-flex justify-content-between align-items-center text-light px-5 rounded-3" style="background: linear-gradient(to right, #2575fc, #6a11cb);">
            <h6>
                <i class="fas fa-file-alt"></i>
                <span>Pending Posts</span>
            </h6>
            <h3>{{$User_Post_Count}}</h3>
        </div>
    </div>
</div>

<!-- Posts Table -->
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr class="text-center">
                <th width="5%">Id</th>
                <th width="30%">Title</th>
                <th width="15%">Author</th>
                <th width="15%">Categories</th>
                <th width="10%">Date</th>
                <th width="10%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($User_Post as $Posts)
            <tr class="text-center">
                <td>{{$Posts->id}}</td>
                <td>
                    <strong>{{$Posts->post_title}}</strong>
                    <span class="badge bg-primary status-badge ms-2">{{$Posts->status}}</span>
                </td>
                <td>{{$Posts->User_Name}}</td>
                <td>{{$Posts->Category_Name}}</td>
                <td>{{ $Posts->created_at->diffForHumans() }}</td>
                <td colspan="5" class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('View-Post', $Posts->id) }}" class="btn btn-sm btn-outline-primary action-btn" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="" class="btn btn-sm btn-outline-success action-btn" title="Accept">
                            <i class="fa-solid fa-circle-check"></i>
                        </a>
                        <a href="" class="btn btn-sm btn-outline-danger action-btn" title="Rejected">
                            <i class="fa-solid fa-xmark"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Pagination -->
{{ $User_Post->links('pagination::bootstrap-5') }}

@endsection