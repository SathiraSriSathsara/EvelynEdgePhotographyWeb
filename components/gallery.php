<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400i,700"><link rel="stylesheet" href="https://cdn.discordapp.com/attachments/799393124740759592/1170629555325780048/style.css?ex=6559bcbb&is=654747bb&hm=f54821463b21f42a3a2c88f08af1ddb4bf787a53b75abb0c09210ef2039587ae&">
<body>
<?php
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file == "." || $file == "..") {
                continue; // Skip . and ..
            }
            ?>
            <!-- Loop through images in the specified directory -->
            <li>
		        <a href="https://web.facebook.com/EvelynEdgePhotography">
			        <figure>
				        <img src='<?php echo $dir . '/' . $file; ?>'>
				        <figcaption>EvelynEdge Photography</figcaption>
			        </figure>
		        </a>
	        </li>
            <?php
        }
        closedir($dh);
    }
} else {
    echo "Directory not found.";
}
?>
</body>
</html>


