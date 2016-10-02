<!DOCTYPE html>
<html>
<head>
	<title>Sample Form</title>
</head>
<body>
<!-- here sayop ako action.. -->
<form method="POST" action="casefiles">
	<input type="text" name="sampleinput" placeholder="please enter somthing here">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<input type="hidden" name="_method" value="DELETE">
	<input type="submit">
	<!-- so gi pulihan lang og DELETE ang iya value-->

</form>
</body>
</html>

