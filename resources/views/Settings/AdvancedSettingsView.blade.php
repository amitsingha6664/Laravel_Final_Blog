@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- Advanced Settings -->
<div class="settings-card" id="advanced">
  <h3 class="card-title d-flex justify-content-center"><i class="fas fa-cogs"></i> Advanced Settings</h3>
  <div class="row">
	<div class="col-12 mb-3">
	  <label for="customCSS" class="form-label">Custom CSS</label>
	  <textarea class="form-control" id="customCSS" rows="5" placeholder="Enter your custom CSS code"></textarea>
	</div>
	<div class="col-12 mb-3">
	  <label for="customJS" class="form-label">Custom JavaScript</label>
	  <textarea class="form-control" id="customJS" rows="5" placeholder="Enter your custom JavaScript code"></textarea>
	</div>
	<div class="col-12 mb-3">
	  <div class="form-check form-switch">
		<input class="form-check-input" type="checkbox" id="maintenanceMode">
		<label class="form-check-label" for="maintenanceMode">Enable Maintenance Mode</label>
	  </div>
	</div>
	<div class="col-12 mb-3">
	  <div class="form-check form-switch">
		<input class="form-check-input" type="checkbox" id="debugMode">
		<label class="form-check-label" for="debugMode">Enable Debug Mode</label>
	  </div>
	</div>
	<div class="col-12 mb-4">
	  <div class="danger-zone">
		<h5 class="text-danger"><i class="fas fa-exclamation-triangle"></i> Danger Zone</h5>
		<p class="text-muted small">These actions are irreversible. Proceed with caution.</p>
		<button class="btn btn-outline-danger me-2"><i class="fas fa-trash-alt"></i> Clear Cache</button>
		<button class="btn btn-outline-danger"><i class="fas fa-database"></i> Reset Database</button>
	  </div>
	</div>
  </div>
</div>

@endsection