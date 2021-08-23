<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/css1.css">
    <script type="text/javascript" src="javascript/js1.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<title></title>
</head>
<body>
    <center>
      <div style='background-color:white; margin-top:5%;'>  <h1>Portfolio Information</h1>
<form action="admin_action.php" method="post">
 
                                        <label for="name"><b>Name</b></label>
                                        <input type="text" name="project" placeholder="Project Name" required>
                                        
                                        
                                        <label for="project"><b>Project Type</b></label>
                                        <input type="text" name="proj_type" placeholder="Project Type(s)" required>

                                        <label for="name"><b>Android Link</b></label>
                                        <input type="text" name="android" placeholder="Link to android app" required>
                                     
                                        <label for="name"><b>iOS</b></label>
                                        <input type="text" name="ios" placeholder="Link to iOS app" required>
                                        
                                        <label for="name"><b>Web Link</b></label>
                                        <input type="text" name="android" placeholder="Website address" required>



</form>
</div>
</center>
</body>
</html>