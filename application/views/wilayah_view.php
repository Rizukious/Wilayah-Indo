<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Data seluruh wilayah indonesia dari mulai provinsi, kabupaten, kecamatan dan desa. By : http://kang-cahya.com" />
		<meta name="author" content="Cahya Dyazin" />
		<title>Wilayah Indonesia</title>
		<link rel="stylesheet" href="<?= base_url('ast/bootstrap.min.css') ?>">

		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script>
        	$(document).ready(function(){
	            $("#provinsi").change(function (){
	                var url = "<?php echo site_url('wilayah/add_ajax_kab');?>/"+$(this).val();
	                $('#kabupaten').load(url);
	                return false;
	            })
	   
	   			$("#kabupaten").change(function (){
	                var url = "<?php echo site_url('wilayah/add_ajax_kec');?>/"+$(this).val();
	                $('#kecamatan').load(url);
	                return false;
	            })
	   
	   			$("#kecamatan").change(function (){
	                var url = "<?php echo site_url('wilayah/add_ajax_des');?>/"+$(this).val();
	                $('#desa').load(url);
	                return false;
	            })
	        });
    	</script>
	</head>
	<body align="center">
	<div class="container">
		<center>
		<img class="mt-2" src="<?= base_url('ast/peta ri.png') ?>" width=30% alt="" srcset="">
		</center>
		<h1 class="text-center">Data Seluruh wilayah di Indonesia</h1><hr>
		<p>Provinsi :</p>
		<select name="prov" class="form-control" id="provinsi">
			<option>- Select Provinsi -</option>
			<?php 
				foreach($provinsi as $prov)
				{
					echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
				}
			?>
		</select>
		<p>Kabupaten :</p>
		<select name="kab" class="form-control" id="kabupaten">
			<option value=''>Select Kabupaten</option>
		</select>
		<p>Kecamatan :</p>
		<select name="kec" class="form-control" id="kecamatan">
			<option>Select Kecamatan</option>
		</select>
		<p>Desa :</p>
		<select name="des" class="form-control" id="desa">
			<option>Select Desa</option>
		</select>
		<hr>
		
		<footer class="text-center">2016 By 
			<a href="http://www.kang-cahya.com" rel="dofollow">Cahya Dyazin</a> | Distributed by <a href="https://blogbugabagi.blogspot.com" target="_blank" rel="noopener noreferrer">BlogBugaBagi</a>
		</footer>
		</div>
	</body>
</html>