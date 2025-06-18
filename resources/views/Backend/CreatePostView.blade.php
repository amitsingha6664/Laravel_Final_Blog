@extends('Backend.Layout.MasterLayout')

@section('Content')

<div class="container form-container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card top_border mb-4">
                <div class="card-header bg-white">
                    <h4 class="text-center gradient-text py-3"><i class="fas fa-plus-circle me-2"></i>Create New Post</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('Create-Post') }}" method="POST">
                        @csrf
                        <!-- Post Title -->
                        <div class="mb-4">
                            <label for="postTitle" class="form-label">Post Title</label>
                            <input type="text" name="title" class="form-control form-control-lg" id="postTitle" placeholder="Enter post title">
                        </div>
                        
                        <!-- Featured Image -->
                        <div class="mb-4">
                            <label class="form-label">Featured Image</label>
                            <div class="featured-image-container" id="featuredImageContainer">
                                <i class="fas fa-cloud-upload-alt upload-icon"></i>
                                <img src="" class="featured-image-preview" id="featuredImagePreview" alt="Featured Image Preview">
                                <input type="file" id="featuredImageInput" accept="image/*" style="display: none;">
                            </div>
                            <small class="text-muted">Recommended size: 1200x630 pixels</small>
                        </div>
                        
                        <div class="row">
                            <!-- Category -->
                            <div class="col-md-6 mb-4">
                                <label for="postCategory" class="form-label">Category</label>
                                <select class="form-select" id="postCategory" name="category">
                                    <option value="" selected disabled>Select category</option>
                                    @foreach($All_Category as $Category)
                                    <option value="{{$Category->id}}">{{$Category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <!-- Slug -->
                            <div class="col-md-6 mb-4">
                                <label for="postSlug" class="form-label">Slug Url(Uneque)</label>
                                <input type="text" name="slug" class="form-control" id="postSlug" placeholder="Add Slug Url">
                            </div>
                        </div>

                        <div class="row">
                            <!-- Status -->
                            <div class="col-md-6 mb-4">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="" selected disabled>Select Status</option>
                                    <option>Published</option>
                                    <option>Pending</option>
                                    <option>Draft</option>
                                </select>
                            </div>

                            <!-- Author Name -->
                            <div class="col-md-6 mb-4">
                                <label for="postAuthor" class="form-label">Author Name</label>
                                <input type="text" name="author" class="form-control" id="postAuthor" placeholder="Jhon Deo">
                            </div>
                        </div>
                        
                        <!-- Content Editor -->
                        <div class="mb-4">
                            <label for="postContent" class="form-label">Post Content</label>
                            <textarea type="text" name="content" class="form-control" id="postContent" rows="10" placeholder="Write your post content here..."></textarea>
                        </div>
                        
                        <!-- SEO Settings -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <label class="form-label">SEO Settings</label>
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="collapse" data-bs-target="#seoCollapse">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <div class="collapse" id="seoCollapse">
                                <div class="card card-body mb-3">
                                    <div class="mb-3">
                                        <label for="metaTitle" class="form-label">Meta Title</label>
                                        <input type="text" class="form-control" id="metaTitle" placeholder="Meta title for SEO">
                                    </div>
                                    <div class="mb-3">
                                        <label for="metaDescription" class="form-label">Meta Description</label>
                                        <textarea class="form-control" id="metaDescription" rows="3" placeholder="Meta description for SEO"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="slug" class="form-label">URL Slug</label>
                                        <input type="text" class="form-control" id="slug" placeholder="Custom URL slug">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Status and Actions -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="publishNow" checked>
                                    <label class="form-check-label" for="publishNow">Publish Immediately</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-outline-secondary me-2">
                                    <i class="fas fa-save me-1"></i> Save Draft
                                </button>
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane me-1"></i> Publish Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Initialize Summernote editor
    $(document).ready(function() {
        $('#postContent').summernote({
            height: 300,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        
        // Featured image upload functionality
        const featuredImageContainer = document.getElementById('featuredImageContainer');
        const featuredImageInput = document.getElementById('featuredImageInput');
        const featuredImagePreview = document.getElementById('featuredImagePreview');
        
        featuredImageContainer.addEventListener('click', () => {
            featuredImageInput.click();
        });
        
        featuredImageInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    featuredImagePreview.src = e.target.result;
                    featuredImagePreview.style.display = 'block';
                    featuredImageContainer.querySelector('.upload-icon').style.display = 'none';
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>

@endsection