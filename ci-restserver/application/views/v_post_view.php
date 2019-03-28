<?php 
	$b=$data->row_array();
?>
<!DOCTYPE html>
<html>
<head>
	<title><br><?php echo $b['judul'];?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>

	<div class="col-md-12 animate-box">
		<article class="article-entry">
<!--	<div class="container">
		<div class="col-md-8 col-md-offset-2">
	-->		<h2><?php echo $b['judul'];?></h2><hr/>
			<a href="" class="blog-img" style="background-image: url(<?php echo base_url() ?>/assets/img/<?php echo $b['gambar'] ?>);">
			</a></hr>
			<p class="admin"><span><b>Posted by:</b></span> <span><b><?php echo $b['sumber'] ?></b></span></p>
			<?php echo $b['isi'];?>
		</br>
		</article>
	</div>

	<script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>