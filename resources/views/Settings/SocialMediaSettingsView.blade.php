@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- Social Media Settings -->
<form action="#" method="POST">
  @csrf
  <div class="settings-card" id="social">

    <!-- Centered Title -->
    <h3 class="card-title d-flex justify-content-center mb-4">
      <i class="fas fa-share-alt"></i> Social Media
    </h3>

    <div class="row">
      <div class="col-12 mb-3">
        <label class="form-label">Facebook</label>
        <div class="input-group social-input-group">
          <span class="input-group-text"><i class="fab fa-facebook-f"></i></span>
          <input type="url" class="form-control" name="facebook" placeholder="https://facebook.com/yourpage" value="https://facebook.com/myblog">
        </div>
      </div>
      <div class="col-12 mb-3">
        <label class="form-label">Twitter</label>
        <div class="input-group social-input-group">
          <span class="input-group-text"><i class="fab fa-twitter"></i></span>
          <input type="url" class="form-control" name="twitter" placeholder="https://twitter.com/yourhandle" value="https://twitter.com/myblog">
        </div>
      </div>
      <div class="col-12 mb-3">
        <label class="form-label">Instagram</label>
        <div class="input-group social-input-group">
          <span class="input-group-text"><i class="fab fa-instagram"></i></span>
          <input type="url" class="form-control" name="instagram" placeholder="https://instagram.com/yourprofile" value="https://instagram.com/myblog">
        </div>
      </div>
      <div class="col-12 mb-3">
        <label class="form-label">LinkedIn</label>
        <div class="input-group social-input-group">
          <span class="input-group-text"><i class="fab fa-linkedin-in"></i></span>
          <input type="url" class="form-control" name="linkedin" placeholder="https://linkedin.com/company/yourcompany" value="https://linkedin.com/company/myblog">
        </div>
      </div>
      <div class="col-12 mb-3">
        <label class="form-label">YouTube</label>
        <div class="input-group social-input-group">
          <span class="input-group-text"><i class="fab fa-youtube"></i></span>
          <input type="url" class="form-control" name="youtube" placeholder="https://youtube.com/yourchannel" value="https://youtube.com/myblog">
        </div>
      </div>
      <div class="col-12 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="socialSharing" name="enable_sharing" checked>
          <label class="form-check-label" for="socialSharing">Enable Social Sharing Buttons</label>
        </div>
      </div>
    </div>

    <!-- Centered Save Button -->
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary px-4">
        <i class="fas fa-save"></i> Save Social Media Settings
      </button>
    </div>

  </div>
</form>

@endsection