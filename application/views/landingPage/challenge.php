<style type="text/css">
	main
	{
		min-height: 			80vh;
		padding-top: 			10vh;
		padding-bottom: 		5vh;
		background-color: 		#fff;
	}

	img
	{
		z-index: 				-999;
		width: 					100%;
	}

	.mainButtonBright
	{
  		font-family: 		'Muli', sans-serif;
  		font-weight: 		400;
  		font-size: 			16px;
  		letter-spacing: 	1px;
  		display: 			inline-block;
  		padding: 			8px 28px;
  		border-radius: 		50px;
  		transition: 		0.5s;
  		margin: 			10px;
  		color: 				#000;
  		background-color: 	#fff;
	}
	.mainButtonBright:hover
	{
		cursor: 			pointer;
		transition: 		scale(1.08);
		box-shadow:     	0 8px 16px 0 rgba(0,0,0,0.2);
	}
</style>

<section id="intro">
  <div class="intro-text">
    <h2>Vidyamin</h2>
    <p><b>#</b>NoExcuses</p>
    <a href="#challengeInformation" class="btn-get-started scrollto">Get Started</a>
  </div>
  <div class="product-screens">
    <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
      <img src="<?=base_url('assets/img/Landing_Page/product-screen-1.png')?>" alt="">
    </div>
    <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
      <img src="<?=base_url('assets/img/Landing_Page/product-screen-2.png')?>" alt="">
    </div>
    <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
      <img src="<?=base_url('assets/img/Landing_Page/product-screen-3.png')?>" alt="">
    </div>
  </div>
</section>
<main>
	<div class = "container" id = "challengeInformation">
		<?php if(isset($status)):?>
			<div class="alert alert-success alert-dismissible">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  				<strong><b>Yeyey!!</b></strong>&nbsp;&nbsp;You have successfully registered. Log in to continue
			</div>
		<?php endif?>
		<br>
		<br>
		<br>
		<center><h4>Lorem ipsum dolor sit amet</h4><hr></center>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis urna non tellus eleifend, vitae efficitur augue gravida. Quisque elementum mollis ultrices. Cras vel efficitur nunc, nec imperdiet purus. Proin orci sapien, finibus id tincidunt non, rutrum in leo. Ut pharetra arcu tellus, ut placerat eros imperdiet at. Mauris risus diam, dapibus id nunc vel, egestas consectetur mauris. Cras porta enim eu dignissim tempor. Maecenas fermentum ligula non quam efficitur, at fermentum mauris mollis. Aliquam erat volutpat.

			In vitae elit lacus. Nunc in velit eu odio vehicula mollis vel quis mauris. Donec ullamcorper pulvinar pretium. Fusce lobortis facilisis convallis. Nulla facilisi. Mauris molestie urna a elit faucibus facilisis. Donec iaculis dui id justo auctor sagittis. Maecenas eu mi quis diam hendrerit condimentum. Praesent nec orci quam. Nunc molestie ante eu tortor porttitor volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin commodo ante est. Etiam quis tristique ante.
			In vitae elit lacus. Nunc in velit eu odio vehicula mollis vel quis mauris. Donec ullamcorper pulvinar pretium. Fusce lobortis facilisis convallis. Nulla facilisi. Mauris molestie urna a elit faucibus facilisis. Donec iaculis dui id justo auctor sagittis. Maecenas eu mi quis diam hendrerit condimentum. Praesent nec orci quam. Nunc molestie ante eu tortor porttitor volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin commodo ante est. Etiam quis tristique ante.
			<br><br>
			<center>
					<a class = "mainButtonBright" data-toggle="modal" data-target="#myModal1">Register</a>
					<a class = "mainButtonBright" data-toggle="modal" data-target="#myModal2">Sign In</a>
			</center>

			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class = "btn btn-default float-right" data-dismiss="modal">x</button>
							<br>
							<center><h3>REGISTER</h3></center>
							<form role="form" action="<?=base_url('Welcome/registration')?>" method="post">
								<input type = "email" 		class = "form-control" 		name = "emailAddress"	placeholder = "Email Address"><br>
								<input type = "text" 		class = "form-control" 		name = "studentName"	placeholder = "Name"><br>
								<input type = "password" 	class = "form-control" 		name = "password"		placeholder = "Password"><br>
								<input type = "submit"  	class = "btn btn-info" 		value 		= "Register">
								<input type = "reset"  		class = "btn btn-default" 	value 		= "Reset">
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			      	<button type="button" class = "btn btn-default float-right" data-dismiss="modal">x</button>
			        <br>
					<center><h3>SIGN IN</h3></center>
					<form role="form" action="<?=base_url('Welcome/signin')?>" method="post">
						<input type = "email" 		class = "form-control" 		name = "emailAddress"	placeholder = "Email Address"><br>
						<input type = "password" 	class = "form-control" 		name = "password"		placeholder = "Password"><br>
						<input type = "submit"  	class = "btn btn-info" 		value 		= "Sign In">
						<input type = "reset"  		class = "btn btn-default" 	value 		= "Reset">
					</form>
			      </div>
			    </div>
			  </div>
			</div>		
	</div>
</main>