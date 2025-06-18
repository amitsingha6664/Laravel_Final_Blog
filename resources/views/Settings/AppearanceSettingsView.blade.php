@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- Appearance Settings -->
<form action="#" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="settings-card" id="appearance">

    <!-- Centered Title -->
    <h3 class="card-title d-flex justify-content-center mb-4">
      <i class="fas fa-paint-brush"></i> Appearance
    </h3>

    <div class="row">
      <div class="col-md-6 mb-3">
        <label class="form-label">Site Logo</label>
        <div class="file-upload">
          <label for="logoUpload" class="file-upload-label">
            <i class="fas fa-upload"></i> Upload Logo
          </label>
          <input type="file" id="logoUpload" name="site_logo" class="file-upload-input" accept="image/*">
        </div>
        <img id="logoPreview" src="" class="preview-image" alt="Logo Preview">
      </div>

      <div class="col-md-6 mb-3">
        <label class="form-label">Favicon</label>
        <div class="file-upload">
          <label for="faviconUpload" class="file-upload-label">
            <i class="fas fa-upload"></i> Upload Favicon
          </label>
          <input type="file" id="faviconUpload" name="site_favicon" class="file-upload-input" accept="image/*">
        </div>
        <img id="faviconPreview" src="" class="preview-image" alt="Favicon Preview">
      </div>

      <div class="col-md-6 mb-3">
        <label for="primaryColor" class="form-label">Primary Color</label>
        <input type="color" class="form-control form-control-color" id="primaryColor" name="primary_color" value="#4361ee">
      </div>

      <div class="col-md-6 mb-3">
        <label for="secondaryColor" class="form-label">Secondary Color</label>
        <input type="color" class="form-control form-control-color" id="secondaryColor" name="secondary_color" value="#3a0ca3">
      </div>

      <div class="col-12 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="darkMode" name="dark_mode" checked>
          <label class="form-check-label" for="darkMode">Enable Dark Mode</label>
        </div>
      </div>
    </div>

    <!-- Centered Save Button -->
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary px-4">
        <i class="fas fa-save"></i> Save Appearance
      </button>
    </div>

  </div>
</form>

@endsection