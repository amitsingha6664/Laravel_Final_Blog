@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- Email Settings -->
<form action="#" method="POST">
  @csrf
  <div class="settings-card" id="email">

    <!-- Centered Title -->
    <h3 class="card-title d-flex justify-content-center mb-4">
      <i class="fas fa-envelope"></i> Email Settings
    </h3>

    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="smtpHost" class="form-label">SMTP Host</label>
        <input type="text" class="form-control" id="smtpHost" name="smtp_host" value="smtp.example.com">
      </div>
      <div class="col-md-6 mb-3">
        <label for="smtpPort" class="form-label">SMTP Port</label>
        <input type="number" class="form-control" id="smtpPort" name="smtp_port" value="587">
      </div>
      <div class="col-md-6 mb-3">
        <label for="smtpUsername" class="form-label">SMTP Username</label>
        <input type="text" class="form-control" id="smtpUsername" name="smtp_username" value="noreply@example.com">
      </div>
      <div class="col-md-6 mb-3">
        <label for="smtpPassword" class="form-label">SMTP Password</label>
        <input type="password" class="form-control" id="smtpPassword" name="smtp_password" placeholder="Enter password">
      </div>
      <div class="col-md-6 mb-3">
        <label for="emailFrom" class="form-label">From Email Address</label>
        <input type="email" class="form-control" id="emailFrom" name="email_from" value="noreply@example.com">
      </div>
      <div class="col-md-6 mb-3">
        <label for="emailFromName" class="form-label">From Name</label>
        <input type="text" class="form-control" id="emailFromName" name="email_from_name" value="My Blog">
      </div>
      <div class="col-12 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="emailNotifications" name="email_notifications" checked>
          <label class="form-check-label" for="emailNotifications">Enable Email Notifications</label>
        </div>
      </div>
    </div>

    <!-- Centered Save Button -->
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary px-4">
        <i class="fas fa-save"></i> Save Email Settings
      </button>
    </div>
  </div>
</form>

@endsection