<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create Album</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-header text-center">
                    Create Album
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail Image</label>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" required>
                        </div>
                        <div class="form-group">
                            <label for="albumName">Album Name</label>
                            <input type="text" class="form-control" id="albumName" name="albumName" required>
                        </div>
                        <div class="form-group">
                            <label for="albumType">Album Type</label>
                            <input type="text" class="form-control" id="albumType" name="albumType" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="createAlbum">Create Album</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['createAlbum'])) {
    $albumName = $_POST['albumName'];
    $albumType = $_POST['albumType'];
    
    // Create a folder with the albumName
    $folderPath = __DIR__ . '/' . $albumName;
    if (!is_dir($folderPath)) {
        mkdir($folderPath);

        // Handle file upload for the thumbnail image
        if (isset($_FILES['thumbnail'])) {
            $thumbnail = $_FILES['thumbnail'];
            $thumbnailPath = $folderPath . '/' . $thumbnail['name'];
            if (move_uploaded_file($thumbnail['tmp_name'], $thumbnailPath)) {
                // Create a PHP file with albumName.ph
                $phpCode = <<<EOT
<div class="col-sm-6 col-lg-3">
    <div class="blog-item-masonry">
	    <div class="slider-img"> <a href="<?php echo \$albumPath ?>"> 
            <img src="<?php echo \$thumbnailPath ?>" class="img-fluid" alt="" > </a>
        </div>
		<div class="slider-caption">
		    <h2><a href="<?php echo \$albumPath ?>"><?php echo \$albumName ?></a></h2>
			<ul class="portfolio-categ">
				<li><?php echo \$albumType ?></li>
			</ul>
		</div>
	</div>
</div>
EOT;

                file_put_contents($folderPath . '/' . $albumName . '.php', $phpCode);
        
                echo '<div class="alert alert-success text-center mt-3">Album created successfully!</div>';
            } else {
                echo '<div class="alert alert-danger text-center mt-3">Error uploading the thumbnail image.</div>';
            }
        } else {
            echo '<div class="alert alert-danger text-center mt-3">Thumbnail image not provided.</div>';
        }
    } else {
        echo '<div class="alert alert-danger text-center mt-3">Album already exists. Please choose a different name.</div>';
    }
}
?>

</body>
</html>
