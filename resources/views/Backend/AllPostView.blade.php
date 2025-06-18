@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- Filters -->
<div class="row mb-3">
    <div class="col-md-4">
        <form action="{{ route('Search-Post') }}" method="get">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search posts...">
                <button class="btn btn-outline-secondary" type="submit" name="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="col-md-4 mb-3">
        <div class="d-flex justify-content-between align-items-center text-light px-5 rounded-3" style="background: linear-gradient(to right, #2575fc, #6a11cb);">
            <h6>
                <span>{{ $result_text}}</span>
            </h6>
            <h3>{{$Post_Count}}</h3>
        </div>
    </div>
    <div class="col-md-4">
        <form action="{{ route('Post-Filter') }}" method="GET">
            @csrf
            <div class="d-flex justify-content-md-end">
                <select name="post_status" class="form-select form-select-sm me-2" style="width: auto;">
                    <option value="all" selected>All Status</option>
                    <option value="published">Published</option>
                    <option value="draft">Draft</option>
                    <option value="pending">Pending</option>
                </select>
                <select name="post_category" class="form-select form-select-sm me-2" style="width: auto;">
                    <option value="all" selected>All Categories</option>
                    @foreach($All_Category as $Category)
                    <option value="{{$Category->id}}">{{$Category->category_name}}</option>
                    @endforeach
                </select>
                <button type="submit" name="submit" class="btn btn-sm btn-outline-secondary">Filter</button>
            </div>
        </form>
    </div>
</div>

<!-- Posts Table -->
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr class="text-center">
                <th width="5%">Id</th>
                <th width="40%">Title</th>
                <th width="15%">Author</th>
                <th width="15%">Categories</th>
                <th width="10%">Date</th>
                <th width="15%">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($Post_Count == 0)
            <tr>
                <td colspan="5">
                    <div class="align-items-center py-2 text-center">
                        <strong>No post found.</strong> You can add a new post by clicking the button below.
                    </div>
                </td>
            </tr>
            @endif
            @foreach($All_Post as $Post)
            <tr class="text-center">
                <td>{{ $Post->id }}</td>
                <td>
                    <strong>{{ $Post->post_title }}</strong>
                    <span class="badge bg-primary status-badge ms-2">{{ $Post->status }}</span>
                </td>
                <td>{{ $Post->User_Name }}</td>
                <td>{{ $Post->Category_Name }}</td>
                <td>{{ $Post->created_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('View-Post', $Post->id)}}" class="btn btn-sm btn-outline-primary action-btn" title="View">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('Post-Edit-View', $Post->id) }}" class="btn btn-sm btn-outline-success action-btn" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <button type="button"
                        class="btn btn-sm btn-outline-danger action-btn"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteConfirmModal"
                        data-id="{{ $Post->id }}">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Pagination -->
{{ $All_Post->links('pagination::simple-bootstrap-5') }}

@if(isset($Post->id))
<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteConfirmModalLabel">Confirm Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this post?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <form id="deleteForm" method="POST" action="">
          @csrf
          @method('DELETE')
          <a type="submit" class="btn btn-danger" href="{{ route('Post-Delete', $Post->id) }}">Yes, Delete</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endif

<!-- JavaScript for dynamic form action -->
<script>
    const deleteModal = document.getElementById('deleteConfirmModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const postId = button.getAttribute('data-id');
        const form = deleteModal.querySelector('#deleteForm');
        form.action = '/admin/post/delete/' + postId;
    });
</script>

@endsection