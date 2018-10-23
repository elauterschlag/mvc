<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-6 col-md-offset-3 card mx-auto my-4 p-4">
	<form class="form" action="<?=PROOT?>register/login" method="post">
		<div class="bg-danger"><?=$this->displayErrors ?></div>
		<h3 class="text-center">Login</h3>
		<div class="form-group">
			<label for="mail">E-Mail-Adresse</label>
			<input type="text" name="mail" id="mail" class="form-control">
		</div>
		<div class="form-group">
			<label for="passsword">Password</label>
			<input type="password" name="password" id="password" class="form-control">
		</div>
		<div class="form-group">
			<label for="remember_me"><input type="checkbox" id="remember_me" name="remember_me" value="on"> Remember Me</label>
		</div>
		<div class="form-group">
			<input type="submit" value="login" class="btn btn-large btn-primary">
		</div>
		<div class="text-right">
			<a href="<?=PROOT?>register/register" class="text-primary">Register</a>
		</div>
	</form>
</div>
<?php $this->end(); ?>
