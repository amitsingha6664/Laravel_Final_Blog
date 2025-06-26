@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- General Settings View -->
<div class="settings-card" id="general">

  <!-- Centered Title -->
  <h3 class="card-title d-flex justify-content-center mb-4">
    <i class="fas fa-globe"></i> Settings (View Only)
  </h3>

  <div class="row">
    <div class="col-12 mb-3">
      <label class="form-label">Site Name</label>
      <div class="form-control-plaintext"></div>
    </div>

    <div class="col-12 mb-3">
      <label class="form-label">Site Tagline</label>
      <div class="form-control-plaintext"></div>
    </div>

    <div class="col-12 mb-3">
      <label class="form-label">Site Logo</label><br>
        <img src="" class="preview-image" alt="Logo">
        <p>No logo uploaded</p>
    </div>

    <div class="col-12 mb-3">
      <label class="form-label">Favicon</label><br>
        <img src="" class="preview-image" alt="Favicon">
        <p>No favicon uploaded</p>
    </div>

    <div class="col-12 mb-3">
      <label class="form-label">Facebook</label>
      <div class="form-control-plaintext"></div>
    </div>

    <div class="col-12 mb-3">
      <label class="form-label">Twitter</label>
      <div class="form-control-plaintext"></div>
    </div>

    <div class="col-12 mb-3">
      <label class="form-label">Instagram</label>
      <div class="form-control-plaintext"></div>
    </div>

    <div class="col-12 mb-3">
      <label class="form-label">LinkedIn</label>
      <div class="form-control-plaintext"></div>
    </div>

    <div class="col-12 mb-3">
      <label class="form-label">YouTube</label>
      <div class="form-control-plaintext"></div>
    </div>
  </div>

  <!-- Centered Button -->
  <div class="mt-4 text-center">
    <a href="{{ route('Settings-Edit-View') }}" class="btn btn-warning px-4">
      <i class="fas fa-edit"></i> Edit Settings
    </a>
  </div>

</div>

@endsection