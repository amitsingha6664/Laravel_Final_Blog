@extends('Backend.Layout.MasterLayout')

@section('Content')

<div class="settings-container">
    <div class="settings-header">
        <h3 class="settings-title">
            <i class="fas fa-cog"></i> Settings
        </h3>
        <p class="settings-description">Manage your site's basic information, branding, and social media links.</p>
    </div>

    <div class="settings-sections">
        <div class="settings-section">
            <h4 class="section-title">Site Information</h4>
            <div class="section-content">
                <form action="{{ route('Site-Information-Update') }}" method="post" class="setting-form">
                    @csrf
                    <div class="form-group">
                        <label for="siteName" class="form-label">Site Name</label>
                        <input type="text" class="form-control" id="siteName" name="site_name" value="{{ $Setting_Data->site_name ?? 'Site Title' }}">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary setting-save-btn">Save</button>
                </form>

                <form action="" method="post" class="setting-form mt-4">
                    @csrf
                    <div class="form-group">
                        <label for="siteTagline" class="form-label">Site Tagline</label>
                        <input type="text" class="form-control" id="siteTagline" name="site_tagline" value="{{ $Setting_Data->site_tagline ?? 'Site Tagline' }}">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary setting-save-btn">Save</button>
                </form>
            </div>
        </div>

        <div class="settings-section">
            <h4 class="section-title">Branding</h4>
            <div class="section-content">
                <form action="" method="post" enctype="multipart/form-data" class="setting-form">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Site Logo</label>
                        <div class="file-upload-wrapper">
                            <label for="logoUpload" class="file-upload-label">
                                <i class="fas fa-upload"></i> Upload Logo
                            </label>
                            <input type="file" id="logoUpload" name="site_logo" class="file-upload-input" accept="image/*">
                        </div>
                        <div class="image-preview-container">
                            <img id="logoPreview" src='{{ $Setting_Data->site_logo }}' class="preview-image" alt="Logo Preview">
                            @if(isset($Setting_Data->site_logo))
                                <p class="current-image-info"><img class="w-25" src="{{ asset('Assets/img/logo.png') }}" alt=""></p>
                            @else
                                <p class="no-image-info">No Logo Uploaded</p>
                            @endif
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary setting-save-btn">Save</button>
                </form>

                <form action="" method="post" enctype="multipart/form-data" class="setting-form mt-4">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Favicon</label>
                        <div class="file-upload-wrapper">
                            <label for="faviconUpload" class="file-upload-label">
                                <i class="fas fa-upload"></i> Upload Favicon
                            </label>
                            <input type="file" id="faviconUpload" name="favicon" class="file-upload-input" accept="image/*">
                        </div>
                        <div class="image-preview-container">
                            <img id="faviconPreview" src='{{ $Setting_Data->favicon }}' class="preview-image" alt="Favicon Preview">
                            @if(isset($Setting_Data->favicon))
                                <p class="current-image-info"><img class="w-25" src="{{ asset('Assets/img/favicon.png') }}" alt=""></p>
                            @else
                                <p class="no-image-info">No Favicon Uploaded</p>
                            @endif
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary setting-save-btn">Save</button>
                </form>
            </div>
        </div>

        <div class="settings-section">
            <h4 class="section-title">Social Media Links</h4>
            <div class="section-content">
                <form action="{{ route('Social-Media-Update') }}" method="post" class="setting-form">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Facebook</label>
                        <div class="input-group social-input-group">
                            <span class="input-group-text"><i class="fab fa-facebook-f"></i></span>
                            <input type="text" class="form-control" name="facebook" value="{{ $Setting_Data->facebook_url ?? 'facebook.com' }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Twitter</label>
                        <div class="input-group social-input-group">
                            <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                            <input type="text" class="form-control" name="twitter" value="{{ $Setting_Data->twitter_url ?? 'Enter Twitter Profile Url' }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Instagram</label>
                        <div class="input-group social-input-group">
                            <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                            <input type="text" class="form-control" name="instagram" value="{{ $Setting_Data->instagram_url ?? 'Enter Instagram Profile Url' }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">LinkedIn</label>
                        <div class="input-group social-input-group">
                            <span class="input-group-text"><i class="fab fa-linkedin-in"></i></span>
                            <input type="text" class="form-control" name="linkedin" value="{{ $Setting_Data->linkedIn_url ?? 'Enter Linkdin Profile Url' }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">YouTube</label>
                        <div class="input-group social-input-group">
                            <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                            <input type="text" class="form-control" name="youtube" value="{{ $Setting_Data->youtube_url ?? 'Enter Youtube Chanel Link' }}">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary setting-save-btn">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Image preview for logo
        const logoUpload = document.getElementById('logoUpload');
        const logoPreview = document.getElementById('logoPreview');
        if (logoUpload && logoPreview) {
            logoUpload.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        logoPreview.src = e.target.result;
                        logoPreview.style.display = 'block'; // Show the image
                    };
                    reader.readAsDataURL(file);
                } else {
                    logoPreview.src = '';
                    logoPreview.style.display = 'none'; // Hide if no file selected
                }
            });
            // Display current logo if available
            if (logoPreview.src && logoPreview.src !== window.location.href) {
                logoPreview.style.display = 'block';
            } else {
                logoPreview.style.display = 'none';
            }
        }

        // Image preview for favicon
        const faviconUpload = document.getElementById('faviconUpload');
        const faviconPreview = document.getElementById('faviconPreview');
        if (faviconUpload && faviconPreview) {
            faviconUpload.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        faviconPreview.src = e.target.result;
                        faviconPreview.style.display = 'block'; // Show the image
                    };
                    reader.readAsDataURL(file);
                } else {
                    faviconPreview.src = '';
                    faviconPreview.style.display = 'none'; // Hide if no file selected
                }
            });
            // Display current favicon if available
            if (faviconPreview.src && faviconPreview.src !== window.location.href) {
                faviconPreview.style.display = 'block';
            } else {
                faviconPreview.style.display = 'none';
            }
        }
    });
</script>

@endpush