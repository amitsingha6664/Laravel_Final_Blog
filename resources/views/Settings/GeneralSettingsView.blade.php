@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- General Settings -->
<form action="#" method="POST">
  @csrf
  <div class="settings-card" id="general">
    
    <!-- Centered Title -->
    <h3 class="card-title d-flex justify-content-center mb-4">
      <i class="fas fa-globe"></i> General Settings
    </h3>

    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="siteName" class="form-label">Site Name</label>
        <input type="text" class="form-control" id="siteName" name="site_name" value="My Awesome Blog">
      </div>
      <div class="col-md-6 mb-3">
        <label for="siteTagline" class="form-label">Site Tagline</label>
        <input type="text" class="form-control" id="siteTagline" name="site_tagline" value="Sharing knowledge and ideas">
      </div>
      <div class="col-md-6 mb-3">
        <label for="siteUrl" class="form-label">Site URL</label>
        <input type="url" class="form-control" id="siteUrl" name="site_url" value="https://myblog.com">
      </div>
      <div class="col-md-6 mb-3">
        <label for="timezone" class="form-label">Timezone</label>
        <select class="form-select" id="timezone" name="timezone">
          <option value="UTC">UTC</option>
          <option value="GMT+6" selected>GMT+6 (Bangladesh Standard Time)</option>
          <option value="GMT+5.5">GMT+5:30 (India Standard Time)</option>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label for="dateFormat" class="form-label">Date Format</label>
        <select class="form-select" id="dateFormat" name="date_format">
          <option value="F j, Y">F j, Y (January 15, 2023)</option>
          <option value="Y-m-d" selected>Y-m-d (2023-01-15)</option>
          <option value="m/d/Y">m/d/Y (01/15/2023)</option>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label for="siteLanguage" class="form-label">Site Language</label>
        <select class="form-select" id="siteLanguage" name="site_language">
          <option value="en" selected>English</option>
          <option value="bn">Bengali</option>
          <option value="hi">Hindi</option>
        </select>
      </div>
    </div>

    <!-- Centered Button -->
    <div class="mt-4 text-center">
      <button type="submit" class="btn btn-primary px-4">
        <i class="fas fa-save"></i> Save Settings
      </button>
    </div>

  </div>
</form>

@endsection
