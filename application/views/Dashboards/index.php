	<!-- Content page -->
	<div class="container-fluid">
		<div class="page-header">
			<h1 class="text-titles">Control <small>Panel</small></h1>
		</div>
	</div>
	<div class="full-box text-center" style="padding: 30px 10px;">
		<?php foreach ($users as $user): ?>
		<article class="full-box tile">
			<div class="full-box tile-title text-center text-titles text-uppercase">
				<?php echo $user['name']; ?>
			</div>
			<div class="full-box tile-icon text-center">
				<i class="zmdi zmdi-account"></i>
			</div>
			<div class="full-box tile-number text-titles">
				<p class="full-box"><?php echo $user['count']; ?></p>
				<small>Register</small>
			</div>
		</article>
		<?php endforeach; ?>		
	</div>
</section>