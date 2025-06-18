@extends('Frontend.Layout.MasterLayout')

@section('Content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card post-card">
                <div class="card-body p-4 p-md-5">
                    <!-- Header -->
                    <div class="header">
                        <h3 class="mb-0 text-center">Create New Post</h3>
                    </div>
                    
                    <!-- Post Form -->
                    <form action="{{ route('User-Create-Post') }}" method="POST">
                        @csrf
                        <!-- Title -->
                        <div class="mb-4">
                            <label for="postTitle" class="form-label">Post Title</label>
                            <input type="text" name="post_title" class="form-control" id="postTitle" placeholder="Enter post title">
                        </div>
                        
                        <!-- Slug -->
                        <div class="mb-4">
                            <label for="postSlug" class="form-label">Post Slug</label>
                            <div class="slug-container">
                                <span class="slug-prefix">example.com/posts/</span>
                                <input type="text" name="post_slug" class="form-control slug-input" id="postSlug" placeholder="post-slug">
                            </div>
                        </div>
                        
                        <!-- Author -->
                        <div class="mb-4">
                            <label for="postAuthor" class="form-label">Author Name</label>
                            <input type="text" name="author_name" class="form-control" id="postAuthor" placeholder="Author name">
                        </div>
                        
                        <!-- Category -->
                        <div class="mb-4">
                            <label for="postCategory" class="form-label">Category</label>
                            <select class="form-select" name="category" id="postCategory">
                                <option selected disabled value="">Select a category</option>
                                @foreach($All_Category as $Category)
                                <option value="{{$Category->id}}">{{$Category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <!-- Featured Image -->
                        <div class="mb-4">
                            <label class="form-label">Featured Image</label>
                            <div class="file-upload btn btn-light border d-inline-flex align-items-center mb-3">
                                <i class="bi bi-image me-2"></i>
                                <span>Upload Image</span>
                                <input type="file" name="image" id="featuredImage" accept="image/*">
                            </div>
                            <div class="d-flex align-items-center">
                                <img id="imagePreview" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="preview-image" style="display: none;">
                                <div id="noImageText" class="text-muted">No image selected</div>
                            </div>
                            <div class="form-text">Recommended size: 1200×630 pixels (will be cropped)</div>
                        </div>
                        
                        <!-- Content -->
                        <div class="mb-4">
                            <label for="postContent" class="form-label">Post Content</label>
                            <textarea type="text" name="post_description" class="form-control" id="postContent" rows="8" placeholder="Write your post content here..."></textarea>
                        </div>
                        
                        <!-- Submit Buttons -->
                        <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="bi bi-x-lg me-2"></i>Cancel
                            </button>
                            <div>
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="bi bi-send-check me-2"></i>Publish Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Image Preview Script -->
<script>
document.getElementById('featuredImage').addEventListener('change', function(e) {
    const preview = document.getElementById('imagePreview');
    const noImageText = document.getElementById('noImageText');
    
    if (this.files && this.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(event) {
            preview.src = event.target.result;
            preview.style.display = 'block';
            noImageText.style.display = 'none';
        }
        
        reader.readAsDataURL(this.files[0]);
    }
});
</script>

@endsection