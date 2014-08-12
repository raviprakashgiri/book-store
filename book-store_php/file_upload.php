<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Upload</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/simple-sidebar.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
 <div id="wrapper">
<!-- Sidebar -->
<div id="sidebar-wrapper">
<ul class="sidebar-nav">
<li class="sidebar-brand">
<a href="#">
Start Bootstrap
</a>
</li>
<li>
<a href="#">Dashboard</a>
</li>
<li>
<a href="#">Shortcuts</a>
</li>
<li>
<a href="#">Overview</a>
</li>
<li>
<a href="#">Events</a>
</li>
<li>
<a href="#">About</a>
</li>
<li>
<a href="file_upload.php">Upload</a>
</li>
<li>
<a href="#">Contact</a>
</li>
</ul>
</div>
<!-- /#sidebar-wrapper -->
<!-- Page Content -->
<div id="page-content-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<h1>Simple Sidebar</h1>
<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
<p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
</div>
</div>
</div>
</div>
<!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("toggled");
});
</script>
</body>
</html>

</body>
</html> 