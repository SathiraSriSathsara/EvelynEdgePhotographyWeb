<!DOCTYPE html>
<html>
<head>
    <title>File Browser</title>
    <link rel="stylesheet" type="text/css" href="./file_manager/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1></h1>
        <div class="file-browser">
            <!-- Form to create a new folder -->
            <form method="POST">
                <label for="folder_name">Create a new folder:</label>
                <input type="text" name="folder_name">
                <button type="submit" name="action" value="create_folder"><i class="fas fa-folder-plus"></i> Create</button><button class="gotofiles"><i class="fas fa-arrow-right"></i> <a href="./file_manager/filemanager.php" target="_blank">Go to files</a></button>
            </form>
            <?php
// Get the current directory path
$current_dir = './includes/files';

// Check if a directory was clicked
if(isset($_GET['dir'])) {
    $current_dir = $_GET['dir'];
}

// Check if a file was uploaded
if(isset($_FILES['file'])) {
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, $current_dir . '/' . $file_name);
}

// Check if a file/folder was renamed or deleted
if(isset($_POST['action'])) {
    $action = $_POST['action'];
    $old_name = $_POST['old_name'];
    $new_name = $_POST['new_name'];
    if($action == 'rename') {
        rename($current_dir . '/' . $old_name, $current_dir . '/' . $new_name);
    } elseif ($action == 'delete') {
        if(is_file($current_dir . '/' . $old_name)) {
            unlink($current_dir . '/' . $old_name);
        } elseif(is_dir($current_dir . '/' . $old_name)) {
            rmdir($current_dir . '/' . $old_name);
        }
    }
}

// Check if a folder was created
if(isset($_POST['action']) && $_POST['action'] == 'create_folder' && isset($_POST['folder_name'])) {
    $folder_name = $_POST['folder_name'];
    // Check if folder with the same name already exists
    if(!is_dir($current_dir . '/' . $folder_name)) {
        mkdir($current_dir . '/' . $folder_name);
    } else {
        echo "<p>Folder with the same name already exists!</p>";
    }
}

// Display the file browser
echo "<table>";
echo "<tr><th>Name</th><th>Type</th><th>Size</th><th>Actions</th></tr>";

// Open the current directory
if ($handle = opendir($current_dir)) {
    // Loop through all the files and directories
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            // Get the file/folder type and size
            $type = is_file($current_dir . '/' . $file) ? 'File' : 'Folder';
            $size = is_file($current_dir . '/' . $file) ? filesize($current_dir . '/' . $file) . ' bytes' : '-';

            // Display the file/folder row
            echo "<tr><td><a href=\"?dir=" . $current_dir . '/' . $file . "\">";
            if (is_file($current_dir . '/' . $file)) {
                echo "<i class=\"fas fa-file\" style=\"color: #d3d0d093; margin-right: 10px;\"></i>";
            } else {
                echo "<i class=\"fas fa-folder\" style=\"color: #d3d0d093; margin-right: 10px;\"></i>";
            }
            echo "<span class=\"file\">" . $file . "</span></a></td><td>" . $type . "</td><td>" . $size . "</td><td>";
            echo "<form method=\"POST\">";
            echo "<input type=\"hidden\" name=\"old_name\" value=\"" . $file . "\">";
            echo "<input type=\"text\" name=\"new_name\" placeholder=\"New Name\">";
            echo "<button type=\"submit\" name=\"action\" value=\"rename\"><i class=\"fas fa-edit\"></i> Rename</button>";
            echo "<button type=\"submit\" name=\"action\" value=\"delete\"><i class=\"fas fa-trash\"></i> Delete</button>";
            echo "</form></td></tr>";
        }
    }
    // Close the directory handle
    closedir($handle);
}
echo "</table>";

// Display the file upload form
echo "<form method=\"POST\" enctype=\"multipart/form-data\">";
echo "<label for=\"file\">Upload a file:</label>";
echo "<input type=\"file\" name=\"file\">";
echo "<button type=\"submit\"><i class=\"fas fa-file-upload\"></i> Upload</button>";
echo "</form>";
?>
</body>
</html>
