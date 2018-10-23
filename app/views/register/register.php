<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-6 col-md-offset-3 card mx-auto my-4 p-4">
	<form class="form" action="<?=PROOT?>register/register" method="post">
		<div class="bg-danger"><?=$this->displayErrors ?></div>
		<h3 class="text-center">Register Here!</h3>
		<div class="form-group">
			<label for="name">Vorname</label>
			<input type="text" name="name" id="name" value ="<?=$this->post['name']?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="lastname">Nachname</label>
			<input type="text" name="lastname" id="lastname" value ="<?=$this->post['lastname']?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="mail">E-Mail-Adresse</label>
			<input type="text" name="mail" id="mail" value ="<?=$this->post['mail']?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="passsword">Passwort</label>
			<input type="password" name="password" id="password" value ="<?=$this->post['password']?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="confirm">Passwort nochmals eingeben</label>
			<input type="password" name="confirm" id="confirm" value ="<?=$this->post['confirm']?>" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" value="register" class="btn btn-large btn-primary">
		</div>
	</form>
</div>
<?php $this->end(); ?>
