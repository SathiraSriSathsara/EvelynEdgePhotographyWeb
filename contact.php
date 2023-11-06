<?php include'./components/layout.php'; ?>
<body>
    <?php 
    include'./components/header.php';
    include'./components/pages/contactus.php';
    include'./components/instagram_feed.php';
    include'./components/footer.php';
    ?>
    <script>
			function gotowhatsapp() {
	
				var name = document.getElementById("name").value;
				var subject = document.getElementById("subject").value;
				var msg = document.getElementById("msg-contact").value;
	
				var url = "https://wa.me/94766075813?text="
					+ "Name: " + name + "%0a"
					+ "Subject: " + subject + "%0a"
					+ "Message: " + msg;
	
				window.open(url, '_blank').focus();
			}
	</script>
</body>
</html>