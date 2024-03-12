@extends('../Layout.master')
@section('body')
<section class="page-banner">
	<img src="{{ asset('assets/img/banner-1-min.png') }}" class="img-fluid">
</section>

<section class="content" id="contact-row">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3>Get Help & Share feedback</h3>
				<p></p>
			</div>
		</div>
		<div class="row pt-md-5">
			<div class="col-md-7">
				<h3>Send Us A Message</h3> 
				<form action="{{ route('contactPost') }}" class="contactFormPage" method="POST">
					@csrf
					<div class="form-control col-md-6">
						<label for="">First Name</label>
						<input type="text" name="fname" required>
					</div>
					<div class="form-control col-md-6 last">
						<label for="">Last Name</label>
						<input type="text" name="lname" required>
					</div>
					<div class="form-control">
						<label for="">Phone</label>
						<input type="tel" name="phone" required>
					</div>
					<div class="form-control">
						<label for="">Your Email</label>
						<input type="email" name="email" required>
					</div>
					<div class="form-control">
						<label for="your_subject">Subject</label>
						<input type="text" name="subject" required>
					</div>
					<div class="form-control">
						<label for="">Your Message</label>
						<textarea name="message" id="" cols="30" rows="10"></textarea>
					</div>
					<button type="submit" name="submit">Submit</button>
				</form>
			</div>
			<div class="col-md-5">
				<div class="contact-info">
					<h3>Contact Info</h3>
					<ul>
						<li><a href="tel:1234567890">123 456 7890</a></li>
						<li><a href="mailto:info@hotelsystem.com">info@ABRentals.com</a></li>
					</ul>
				</div>
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.15276886548!2d-74.03927066742503!3d40.759170359695275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1674767115834!5m2!1sen!2s" width="100%" height="450" style="border: 0px; pointer-events: none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
			@if(session('success')!='')
				<div style="margin:25px auto 0;width:98%;" class="alert alert-success" role="alert">
				  {{session('success')}}
				</div>
			@endif
		</div>
	</div>
</section>
@endsection