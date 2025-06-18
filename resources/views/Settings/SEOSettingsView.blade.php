@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- SEO Settings -->
<form action="#" method="POST">
  @csrf
  <div class="settings-card" id="seo">
    <!-- Centered Title -->
    <h3 class="card-title d-flex justify-content-center mb-4">
      <i class="fas fa-search"></i> SEO Settings
    </h3>

    <div class="row">
      <div class="col-12 mb-3">
        <label for="metaTitle" class="form-label">Meta Title</label>
        <input type="text" class="form-control" id="metaTitle" name="meta_title" value="My Awesome Blog - Sharing Knowledge">
      </div>

      <div class="col-12 mb-3">
        <label for="metaDescription" class="form-label">Meta Description</label>
        <textarea class="form-control" id="metaDescription" name="meta_description" rows="3">Welcome to my blog where I share knowledge and ideas about technology, design, and more.</textarea>
      </div>

      <div class="col-12 mb-3">
        <label for="metaKeywords" class="form-label">Meta Keywords</label>
        <input type="text" class="form-control" id="metaKeywords" name="meta_keywords" value="blog, technology, design, web development">
      </div>

      <div class="col-12 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="enableSitemap" name="enable_sitemap" checked>
          <label class="form-check-label" for="enableSitemap">Generate XML Sitemap</label>
        </div>
      </div>
    </div>

    <!-- Centered Save Button -->
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary px-4">
        <i class="fas fa-save"></i> Save SEO Settings
      </button>
    </div>
  </div>
</form>

@endsection