<link rel="stylesheet" href="assets/css/gallery.css">
<script src="assets/js/gallery.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php 
	include 'header.php';
	$images = Common::getGalleryImages();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LightGallery</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       
	    <!-- <link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet"> -->
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.2/css/lightgallery.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.2/js/lightgallery.js"></script> -->
	    <!-- <style>body{background-color:#152836}h2{color:#fff;margin-bottom:40px;text-align:center;font-weight:100;}</style> -->
		<link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">
	</head>
    <body class="home">
        <div class="container" style="margin-top:40px;">
            <h2>Orthodontic Treatments</h2><br />
            <div class="demo-gallery">
                <ul id="lightgallery" class="list-unstyled row">

					<?php
						foreach($images as $image) {
					?>
						<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive=<?php echo 'assets/images/gallery/' . $image; ?> data-src=<?php echo 'assets/images/gallery/' . $image; ?>>
							<a href="">
								<img height="300" width="300" class="img-responsive" src=<?php echo 'assets/images/gallery/thumbnail/' . $image; ?>>
							</a>
						</li>
					<?php
						}
					
					?>
				</ul>
            </div>
        </div>
        <!-- <script>
            $(document).ready(function(){
                $('#lightgallery').lightGallery(); 
            });
        </script> -->
		<script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
<script>
   lightGallery(document.getElementById('lightgallery'));
</script>
    </body>    
</html>

<?php 
	include 'footer.php';
?>