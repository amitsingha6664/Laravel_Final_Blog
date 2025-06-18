@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- User Filters -->
<div class="row mb-3">
    <div class="col-md-4">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search users...">
            <button class="btn btn-outline-secondary" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="d-flex justify-content-between align-items-center text-light px-5 rounded-3" style="background: linear-gradient(to right, #2575fc, #6a11cb);">
            <h6>
                <i class="fas fa-users"></i>
                <span>Total Users</span>
            </h6>
            <h3>{{$User_Count}}</h3>
        </div>
    </div>
    <div class="col-md-4">
        <div class="d-flex justify-content-md-end">
            <select class="form-select form-select-sm me-2" style="width: auto;">
                <option selected>All Roles</option>
                <option>Administrator</option>
                <option>Editor</option>
                <option>Author</option>
                <option>Contributor</option>
                <option>Subscriber</option>
            </select>
            <select class="form-select form-select-sm me-2" style="width: auto;">
                <option selected>All Status</option>
                <option>Active</option>
                <option>Inactive</option>
                <option>Pending</option>
                <option>Banned</option>
            </select>
            <button class="btn btn-sm btn-outline-secondary">Filter</button>
        </div>
    </div>
</div>

<!-- Users Table -->
<div class="row">
    <div class="col-lg-8">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="text-center">
                        <th width="5%">Id</th>
                        <th width="25%">User Name</th>
                        <th width="20%">Email</th>
                        <th width="15%">Role</th>
                        <th width="15%">Posts</th>
                        <th width="20%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                     @if($User_Count == 0)
                    <tr>
                        <td colspan="5">
                            <div class="align-items-center py-2 text-center">
                                <strong>No users found.</strong> You can add a new user by clicking the button below.
                            </div>
                        </td>
                    </tr>
                    @endif
                    @foreach($Users as $User)
                    <tr class="text-center">
                        <td>{{$User->id}}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/40" alt="User Avatar" class="user-avatar me-2">
                                <div>
                                    <strong>{{$User->name}}</strong>
                                    <div class="text-muted small">Registered: {{$User->created_at}}</div>
                                </div>
                            </div>
                        </td>
                        <td>{{$User->email}}</td>
                        <td>
                            <span class="badge bg-primary role-badge">{{$User->role}}</span>
                        </td>
                        <td>42</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-danger action-btn" title="Delete">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add New User From -->
    <div class="col-lg-4">
        <div class="card top_border">
            <div class="card-header">
                <h5 class="mb-0 text-center gradient-text"><i class="fas fa-users"></i> Add New Users</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('Add-New-User') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" name="user_name" class="form-control" id="username" placeholder="User name">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <input type="text" name="role" class="form-control" id="role" placeholder="User Role">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="User Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" id="password" placeholder="User Password">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Add New User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bulk Actions -->
<div class="row mt-3">
    <div class="col-md-4">
        <select class="form-select form-select-sm">
            <option selected>Bulk Actions</option>
            <option>Change Role</option>
            <option>Delete</option>
            <option>Mark as Spam</option>
            <option>Export</option>
        </select>
    </div>
    <div class="col-md-2">
        <button class="btn btn-sm btn-outline-secondary">Apply</button>
    </div>
</div>

<!-- Pagination -->
{{ $Users->links('pagination::bootstrap-5') }}

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName">
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" required>
                        <div class="form-text">Leave blank to generate a random password</div>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role">
                            <option value="subscriber">Subscriber</option>
                            <option value="contributor">Contributor</option>
                            <option value="author">Author</option>
                            <option value="editor">Editor</option>
                            <option value="administrator">Administrator</option>
                        </select>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="sendNotification">
                        <label class="form-check-label" for="sendNotification">Send the new user an email about their account</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add User</button>
            </div>
        </div>
    </div>
</div>

@endsection