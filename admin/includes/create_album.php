<head>
    <link rel="stylesheet" type="text/css" href="./css/createAlbum.css">
    <script>
        function showMessage(message, type) {
            var popup = document.createElement('div');
            popup.className = 'popup ' + type;
            popup.appendChild(document.createTextNode(message));
            document.body.appendChild(popup);
            setTimeout(function () {
                popup.remove();
            }, 3000); // Adjust the timeout (in milliseconds) as needed
        }
    </script>
    <style>
        .popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 15px;
    background-color: #4CAF50; /* Green background color for success */
    color: white;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.error {
    background-color: #f44336; /* Red background color for error */
}

    </style>
</head>
<body>
<form action=""  method="post" enctype="multipart/form-data">
  
  <h1><strong>Create New</strong> Album</h1>
  
  <div class="form-group">
    <label for="title">Title <span>Use title case to get a better result</span></label>
    <input type="text" name="albumName" id="albumName" class="form-controll"/>
  </div>
  <div class="form-group">
    <label for="caption">Type <span>The type of photo album</span></label>
    <input type="text" name="albumType" id="albumType" class="form-controll"/>
  </div>
  
  <div class="form-group file-area">
        <label for="images">Thumbnail <span>Your images should be at least 400x300 wide</span></label>
    <input type="file" name="thumbnail" id="thumbnail"  required="required" multiple="multiple"/>
    <div class="file-dummy">
      <div class="success">Great, your files are selected.</div>
      <div class="default">Please select some files</div>
    </div>
  </div>
  
  <div class="form-group">
    <button type="submit" name="createAlbum">Create Album</button>
  </div>
  
</form>

<?php
if (isset($_POST['createAlbum'])) {
    $albumName = $_POST['albumName'];
    $albumType = $_POST['albumType'];
    
    // Create a folder with the albumName
    $folderPath = __DIR__ . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . $albumName;
    if (!is_dir($folderPath)) {
        // Create the directory
        mkdir($folderPath, 0777, true);

        // Handle file upload for the thumbnail image
        if (isset($_FILES['thumbnail'])) {
            $thumbnail = $_FILES['thumbnail'];
            $thumbnailPath = $folderPath . DIRECTORY_SEPARATOR . $thumbnail['name'];
            if (move_uploaded_file($thumbnail['tmp_name'], $thumbnailPath)) {
                // Create a PHP file with albumName.php
                $phpCode = <<<EOT
                <div class="col-sm-6 col-lg-3">
                    <div class="blog-item-masonry">
                        <div class="slider-img"> <a href="{$folderPath}"> 
                            <img src="{$thumbnailPath}" class="img-fluid" alt="" > </a>
                        </div>
                        <div class="slider-caption">
                            <h2><a href="{$folderPath}">{$albumName}</a></h2>
                            <ul class="portfolio-categ">
                                <li>{$albumType}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                EOT;

                file_put_contents($folderPath . DIRECTORY_SEPARATOR . $albumName . '.php', $phpCode);

                // Display success message
                echo '<script>showMessage("Album created successfully!", "success");</script>';
            } else {
                // Display error message
                echo '<script>showMessage("Error uploading the thumbnail image.", "error");</script>';
            }
        } else {
            // Display error message
            echo '<script>showMessage("Thumbnail image not provided.", "error");</script>';
        }
    } else {
        // Display error message
        echo '<script>showMessage("Album already exists. Please choose a different name.", "error");</script>';
    }
}
?>

</body>
</html>
