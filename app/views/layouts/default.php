<!doctype html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->siteTitle(); ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=PROOT?>css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <!-- <link rel="stylesheet" href="<?=PROOT?>css/custom.css" media="screen" title="no title" charset="utf-8"> -->
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="<?=PROOT?>js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?=PROOT?>js/bootstrap.min.js"></script>
    <?= $this->content('head'); ?>   
  </head>
  <body>
  
	<?php include 'main_menu.php' ?>
	<div class="container-fluid" style="min-height:cal(100% - 125px);">
		<?= $this->content('body'); ?>
	</div>
    
  </body>
</html>