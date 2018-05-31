<?php $__env->startSection('content'); ?>
<?php echo $__env->make('errors.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('errors.request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="header">
	<div class="top-header">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" alt="" /></a>
			<p>Movie Theater</p>
		</div>
		<div class="search">
			<form>
				<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="header-info">
		<h1>BIG HERO 6</h1>
		<div class="row">
			<div class="col-6">

			</div>
			<div class="col-6">
				<?php echo Form::open([ 'route' => 'log.store', 'method' => 'POST']); ?>

				<div class="form-group">
					<?php echo Form::label('correo', 'Correo:'); ?>

					<?php echo Form::text('email', null, ['class' => 'form-control']); ?>

				</div>
				<div class="form-group">
					<?php echo Form::label('name', 'Contraseña:'); ?>

					<?php echo Form::password('password',['class' => 'form-control']); ?>

				</div>
				<div class="form-group">
					<?php echo Form::submit('Iniciar',['class' => 'btn btn-primary']); ?>

				</div>

				<?php echo Form::close(); ?>

			</div>
		</div>
	</div>
</div>
<div class="review-slider">
	<ul id="flexiselDemo1">
		<li><img src="images/r1.jpg" alt=""/></li>
		<li><img src="images/r2.jpg" alt=""/></li>
		<li><img src="images/r3.jpg" alt=""/></li>
		<li><img src="images/r4.jpg" alt=""/></li>
		<li><img src="images/r5.jpg" alt=""/></li>
		<li><img src="images/r6.jpg" alt=""/></li>
	</ul>
	<script type="text/javascript">
		$(window).load(function() {

			$("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 4
					}
				}
			});
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
</div>
<div class="video">
	<iframe  src="https://www.youtube.com/embed/2LqzF5WauAw" frameborder="0" allowfullscreen></iframe>
</div>
<div class="news">
	<div class="col-md-6 news-left-grid">
		<h3>Don’t be late,</h3>
		<h2>Book your ticket now!</h2>
		<h4>Easy, simple & fast.</h4>
		<a href="#"><i class="book"></i>BOOK TICKET</a>
		<p>Get Discount up to <strong>10%</strong> if you are a member!</p>
	</div>
	<div class="col-md-6 news-right-grid">
		<h3>News</h3>
		<div class="news-grid">
			<h5>Lorem Ipsum Dolor Sit Amet</h5>
			<label>Nov 11 2014</label>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
		</div>
		<div class="news-grid">
			<h5>Lorem Ipsum Dolor Sit Amet</h5>
			<label>Nov 11 2014</label>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
		</div>
		<a class="more" href="#">MORE</a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="more-reviews">
	<ul id="flexiselDemo2">
		<li><img src="images/m1.jpg" alt=""/></li>
		<li><img src="images/m2.jpg" alt=""/></li>
		<li><img src="images/m3.jpg" alt=""/></li>
		<li><img src="images/m4.jpg" alt=""/></li>
	</ul>
	<script type="text/javascript">
		$(window).load(function() {

			$("#flexiselDemo2").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
</div>	
<div class="footer">
	<h6>Disclaimer : </h6>
	<p class="claim">This is a freebies and not an official website, I have no intention of disclose any movie, brand, news.My goal here is to train or excercise my skill and share this freebies.</p>
	<a href="example@mail.com">example@mail.com</a>
	<div class="copyright">
		<p> Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
	</div>
</div>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>