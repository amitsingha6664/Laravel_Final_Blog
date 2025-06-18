@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- Two Column Layout -->
<div class="row">
    <!-- Categories Table -->
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0 text-center gradient-text"><i class="fa-solid fa-tag"></i> All Categories</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="text-center">
                                <th width="5%">Id</th>
                                <th width="30%">Name</th>
                                <th width="20%">Slug</th>
                                <th width="15%">Posts</th>
                                <th width="30%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($All_Category as $Category)
                            <tr class="text-center">
                                <td>{{ $Category->id }}</td>
                                <td><strong>{{ $Category->category_name }}</strong></td>
                                <td>{{ $Category->slug_url }}</td>
                                <td><span class="badge bg-primary badge-count">24</span></td>
                                <td>
                                    <button type="button" 
                                            class="btn btn-sm btn-outline-danger action-btn" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#deleteConfirmModal" 
                                            data-id="{{ $Category->id }}">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Bulk Actions -->
                <div class="row mt-3">
                    <div class="col-md-4">
                        <select class="form-select form-select-sm">
                            <option selected>Bulk Actions</option>
                            <option>Delete</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-sm btn-outline-secondary">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add New Category Form -->
    <div class="col-lg-4">
        <div class="card top_border">
            <div class="card-header">
                <h5 class="mb-0 text-center gradient-text"><i class="fa-solid fa-tag"></i> Add New Category</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('Add-New-Category') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Name</label>
                        <input type="text" name="category_name" class="form-control" id="categoryName" placeholder="Category name">
                    </div>
                    <div class="mb-3">
                        <label for="categorySlug" class="form-label">Slug (Unique)</label>
                        <input type="text" name="category_slug" class="form-control" id="categorySlug" placeholder="Category slug">
                    </div>
                    <div class="mb-3">
                        <label for="categoryDescription" class="form-label">Description</label>
                        <textarea class="form-control" name="category_description" id="categoryDescription" rows="3"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Add New Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@if(isset($Category->id))
<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteConfirmModalLabel">Confirm Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this category?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <form id="deleteForm" method="POST" action="">
          @csrf
          @method('DELETE')
          <a type="submit" class="btn btn-danger" href="{{ route('Category-Delete', $Category->id) }}">Yes, Delete</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endif

<!-- JavaScript to set delete form action -->
<script>
    const deleteModal = document.getElementById('deleteConfirmModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const categoryId = button.getAttribute('data-id');
        const form = deleteModal.querySelector('#deleteForm');
        form.action = '/admin/category/delete/' + categoryId;
    });
</script>

@endsection