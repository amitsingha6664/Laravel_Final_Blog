@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- Filters -->
<div class="row mb-3">
    <div class="col-md-4">
        <form action="{{ route('User-Post-Search') }}" method="get">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Search posts...">
                <button class="btn btn-outline-secondary" type="submit" name="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
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

@if (Route::currentRouteName() === 'User-Post-Search' && !$Search_Word == '')
<div class="p-3 border rounded bg-light mb-3">
    <h4 class="mb-3 text-center">Search Result <span class="fw-normal text-muted">{{ $Search_Result }}</span></h4>
    <div class="d-flex flex-column flex-md-row justify-content-between">
        <h6 class="mb-2 mb-md-0">Search Keyword : <span class="fw-normal text-muted">{{ $Search_Word }}</span></h6>
        <h6>Search Post : <span class="fw-normal text-muted">{{ $Search_Post_Count }}</span></h6>
    </div>
</div>
@endif

<!-- Posts Table -->
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr class="text-center">
                <th width="5%">Id</th>
                <th width="30%">Title</th>
                <th width="10%">Status</th>
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
                <td><strong>{{ Str::limit($Posts->post_title, 30, '...') }}</strong></td>
                <td><span class="badge bg-primary status-badge ms-2">{{$Posts->status}}</span></td>
                <td>{{$Posts->User_Name}}</td>
                <td>{{$Posts->Category_Name}}</td>
                <td>{{ $Posts->created_at->diffForHumans() }}</td>
                <td colspan="5" class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('View-Post', $Posts->id) }}" class="btn btn-sm btn-outline-primary action-btn" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" 
                            class="btn btn-sm btn-outline-success action-btn" 
                            title="Accept"
                            data-bs-toggle="modal" 
                            data-bs-target="#acceptModal{{ $Posts->id }}">
                            <i class="fa-solid fa-circle-check"></i>
                        </a>
                        <a href="#" 
                            class="btn btn-sm btn-outline-danger action-btn" 
                            title="Reject"
                            data-bs-toggle="modal" 
                            data-bs-target="#rejectModal{{ $Posts->id }}">
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

@foreach($User_Post as $Posts)

    <div class="modal fade" id="acceptModal{{ $Posts->id }}" tabindex="-1" aria-labelledby="acceptLabel{{ $Posts->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="acceptLabel{{ $Posts->id }}">Accept Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    Are you sure you want to accept the post <strong>{{ $Posts->post_title }}</strong>?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('User-Post-Accept', $Posts->id) }}" method="POST">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Yes, Accept</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="rejectModal{{ $Posts->id }}" tabindex="-1" aria-labelledby="rejectLabel{{ $Posts->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="rejectLabel{{ $Posts->id }}">Reject Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    Are you sure you want to reject the post <strong>{{ $Posts->post_title }}</strong>?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('User-Post-Reject', $Posts->id) }}" method="POST">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Yes, Reject</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection