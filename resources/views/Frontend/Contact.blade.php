@extends('Frontend.Layout.MasterLayout')

@section('Content')

<section class="contact-header d-flex align-items-center">
    <div class="container text-center text-white">
        <h1 class="display-3 fw-bold mb-4">Contact Us</h1>
        <p class="lead mb-5">Get in touch with us for any feedback, questions, or suggestions.</p>
    </div>
</section>

<section class="py-5">
	<div class="container">
		<div class="row mb-5 text-center">
			<div class="col-md-4">
				<div class="contact-info-icon mx-auto">
					<i class="fas fa-map-marker-alt"></i>
				</div>
				<h5 class="fw-bold">Address</h5>
				<p>Dhaka, Bangladesh</p>
			</div>
			<div class="col-md-4">
				<div class="contact-info-icon mx-auto">
					<i class="fas fa-phone"></i>
				</div>
				<h5 class="fw-bold">Phone</h5>
				<p>+880 1XXX XXXXXX</p>
			</div>
			<div class="col-md-4">
				<div class="contact-info-icon mx-auto">
					<i class="fas fa-envelope"></i>
				</div>
				<h5 class="fw-bold">Email</h5>
				<p>contact@amarblog.com</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="card shadow">
					<div class="card-body">
						<h4 class="mb-4 fw-bold text-center">Send a Message</h4>
						<form>
							<div class="mb-3">
								<label class="form-label">Your Name</label>
								<input type="text" class="form-control" placeholder="Enter your name">
							</div>
							<div class="mb-3">
								<label class="form-label">Email</label>
								<input type="email" class="form-control" placeholder="Enter your email">
							</div>
							<div class="mb-3">
								<label class="form-label">Subject</label>
								<input type="text" class="form-control" placeholder="Enter subject">
							</div>
							<div class="mb-3">
								<label class="form-label">Message</label>
								<textarea rows="5" class="form-control" placeholder="Write your message"></textarea>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-custom px-5 py-2">Send</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection