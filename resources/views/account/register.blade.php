@extends('../Layout.master')
@section('body')

<section id="faq-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>My Account</h2>
				</div>
			</div>
		</div>
	</section>
	<section id="user-dashboard">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="profile-tabs">
					    <ul>
    						<li><a href="javascript:;" class="active-profile-tab" data-tab="reservation">Reservations</a></li>
    						<li><a href="javascript:;" data-tab="profile-details">Profile Details</a></li>
    						<li><a href="#">Logout</a></li>
    					</ul>
					</div>
				</div>
				<div class="col-md-9">
					<div class="all-tabs">
						<div class="tab-box tab-active" data-tabname="reservation">
							<div class="reservation-list">
								<div class="reservation-hd">
									<h3>My Reservations</h3>
								</div>
								<table class="all-reservations">
									<tr>
										<th>S.NO</th>
										<th>Image</th>
										<th>Property Name</th>
										<th>Reservation Date</th>
										<th>Actions</th>
									</tr>
									<tr>
										<td>1</td>
										<td><img src="/assets/img/event-thumb1.png" alt=""></td>
										<td>tangible heritage</td>
										<td>05-Nov-2022</td>
										<td><a href="javascript:;" class="theme-btn">View Details</a></td>
									</tr>
									<tr>
										<td>2</td>
										<td><img src="/assets/img/event-thumb2.png" alt=""></td>
										<td>tangible heritage</td>
										<td>05-Nov-2022</td>
										<td><a href="javascript:;" class="theme-btn">View Details</a></td>
									</tr>
									<tr>
										<td>3</td>
										<td><img src="/assets/img/event-thumb3.png" alt=""></td>
										<td>tangible heritage</td>
										<td>05-Nov-2022</td>
										<td><a href="javascript:;" class="theme-btn">View Details</a></td>
									</tr>
									<tr>
										<td>4</td>
										<td><img src="/assets/img/event-thumb4.png" alt=""></td>
										<td>tangible heritage</td>
										<td>05-Nov-2022</td>
										<td><a href="javascript:;" class="theme-btn">View Details</a></td>
									</tr>
									<tr>
										<td>5</td>
										<td><img src="/assets/img/event-thumb5.png" alt=""></td>
										<td>tangible heritage</td>
										<td>05-Nov-2022</td>
										<td><a href="javascript:;" class="theme-btn">View Details</a></td>
									</tr>
								</table>
							</div>
						</div>
						<div class="tab-box" data-tabname="profile-details">
							<form action="" class="profile-form" method="post">
								<div class="form-field">
								    <input type="text" class="form-control" name="fname" placeholder="First Name" required="">
								</div>
								<div class="form-field">
								    <input type="text" class="form-control" name="lname" placeholder="Last Name" required="">
								</div>
								<div class="form-field">
								    <input type="tel" class="form-control" name="fphone" placeholder="Phone Number" required="">
								</div>
								<div class="form-field">
								    <input type="password" class="form-control" name="password" placeholder="Password" required="">
								</div>
								<input type="submit" value="Submit">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection