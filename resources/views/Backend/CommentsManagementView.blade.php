@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- Comment Filters -->
<ul class="nav nav-pills mb-4 gap-3">
    <li class="nav-item">
        <a class="nav-link text-light bg-primary" href="#">
            <i class="fas fa-inbox me-1"></i> All
            <span class="badge bg-light text-dark ms-1">15</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-light bg-success" href="#">
            <i class="fas fa-check-circle me-1"></i> Approved
            <span class="badge bg-light text-dark ms-1">8</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-light bg-warning" href="#">
            <i class="fas fa-clock me-1"></i> Pending
            <span class="badge bg-light text-dark ms-1">4</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-light bg-danger" href="#">
            <i class="fas fa-trash me-1"></i> Spam
            <span class="badge bg-light text-dark ms-1">3</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-light bg-secondary" href="#">
            <i class="fas fa-ban me-1"></i> Trash
            <span class="badge bg-light text-dark ms-1">2</span>
        </a>
    </li>
</ul>

<!-- Search and Bulk Actions -->
<div class="row mb-3">
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search comments...">
            <button class="btn btn-outline-secondary" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-flex justify-content-md-end">
            <select class="form-select form-select-sm me-2" style="width: auto;">
                <option selected>Bulk Actions</option>
                <option>Approve</option>
                <option>Mark as Spam</option>
                <option>Move to Trash</option>
                <option>Delete Permanently</option>
            </select>
            <button class="btn btn-sm btn-outline-secondary">Apply</button>
        </div>
    </div>
</div>

<!-- Comments List -->
<div class="card">
    <div class="card-body p-0">
        <div class="list-group list-group-flush">
            <!-- Comment 1 (Pending) -->
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <img src="https://via.placeholder.com/48" alt="User Avatar" class="comment-avatar">
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-1">John Doe 
                                <span class="badge bg-warning text-dark comment-status">Pending</span>
                            </h6>
                            <small class="text-muted">2 hours ago</small>
                        </div>
                        <div class="comment-meta">
                            On: <a href="#">How to Build a Responsive Website</a>
                        </div>
                        <div class="comment-content">
                            <p>This is a really helpful article! I've been struggling with responsive design for weeks. Can you do a follow-up on CSS Grid?</p>
                        </div>
                        <div class="comment-actions">
                            <button class="btn btn-sm btn-success">
                                <i class="fas fa-check"></i> Approve
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fas fa-times"></i> Reject
                            </button>
                            <button class="btn btn-sm btn-secondary">
                                <i class="fas fa-trash"></i> Trash
                            </button>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-reply"></i> Reply
                            </button>
                            <button class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comment 2 (Approved) -->
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <img src="https://via.placeholder.com/48" alt="User Avatar" class="comment-avatar">
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-1">Jane Smith 
                                <span class="badge bg-success comment-status">Approved</span>
                            </h6>
                            <small class="text-muted">1 day ago</small>
                        </div>
                        <div class="comment-meta">
                            On: <a href="#">Introduction to Bootstrap 5</a>
                        </div>
                        <div class="comment-content">
                            <p>Great tutorial! I'm new to Bootstrap and this helped me understand the basics quickly. The examples were very clear.</p>
                        </div>
                        <div class="comment-actions">
                            <button class="btn btn-sm btn-danger">
                                <i class="fas fa-times"></i> Unapprove
                            </button>
                            <button class="btn btn-sm btn-secondary">
                                <i class="fas fa-trash"></i> Trash
                            </button>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-reply"></i> Reply
                            </button>
                            <button class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comment 3 (Spam) -->
            <div class="list-group-item bg-light">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <img src="https://via.placeholder.com/48" alt="User Avatar" class="comment-avatar">
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-1">BestSEOCompany 
                                <span class="badge bg-danger comment-status">Spam</span>
                            </h6>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <div class="comment-meta">
                            On: <a href="#">SEO Optimization Techniques</a>
                        </div>
                        <div class="comment-content">
                            <p>Need more traffic to your website? We provide the best SEO services at cheap price! Visit our website now: bestseocompany.com</p>
                        </div>
                        <div class="comment-actions">
                            <button class="btn btn-sm btn-success">
                                <i class="fas fa-check"></i> Not Spam
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fas fa-ban"></i> Block User
                            </button>
                            <button class="btn btn-sm btn-secondary">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comment 4 (Pending) -->
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <img src="https://via.placeholder.com/48" alt="User Avatar" class="comment-avatar">
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-1">Mike Johnson 
                                <span class="badge bg-warning text-dark comment-status">Pending</span>
                            </h6>
                            <small class="text-muted">4 days ago</small>
                        </div>
                        <div class="comment-meta">
                            On: <a href="#">JavaScript Best Practices</a>
                        </div>
                        <div class="comment-content">
                            <p>I disagree with point #3 about using var instead of let/const. In modern JavaScript, we should always use let/const for better scoping.</p>
                        </div>
                        <div class="comment-actions">
                            <button class="btn btn-sm btn-success">
                                <i class="fas fa-check"></i> Approve
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fas fa-times"></i> Reject
                            </button>
                            <button class="btn btn-sm btn-secondary">
                                <i class="fas fa-trash"></i> Trash
                            </button>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-reply"></i> Reply
                            </button>
                            <button class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pagination -->
<nav aria-label="Page navigation" class="mt-4">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>

<!-- Spam Filter Settings Modal -->
<div class="modal fade" id="spamFilterModal" tabindex="-1" aria-labelledby="spamFilterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="spamFilterModalLabel">Spam Filter Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Spam Detection Level</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="spamLevel" id="spamLevelLow" checked>
                            <label class="form-check-label" for="spamLevelLow">
                                Low (Fewer false positives, more spam may get through)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="spamLevel" id="spamLevelMedium">
                            <label class="form-check-label" for="spamLevelMedium">
                                Medium (Balanced approach)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="spamLevel" id="spamLevelHigh">
                            <label class="form-check-label" for="spamLevelHigh">
                                High (More aggressive, may catch some legitimate comments)
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="spamKeywords" class="form-label">Spam Keywords (One per line)</label>
                        <textarea class="form-control" id="spamKeywords" rows="5">buy now cheap viagra casino loan insurance</textarea>
                        <div class="form-text">Comments containing these words will be marked as spam automatically.</div>
                    </div>

                    <div class="mb-3">
                        <label for="blacklistDomains" class="form-label">Blacklisted Domains (One per line)</label>
                        <textarea class="form-control" id="blacklistDomains" rows="5">.ru .com.ru .biz .sex .adult</textarea>
                        <div class="form-text">Comments containing links to these domains will be automatically blocked.</div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="autoDeleteSpam" checked>
                        <label class="form-check-label" for="autoDeleteSpam">Automatically delete spam comments after 30 days</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Settings</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
</script>

@endsection