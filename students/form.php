<html>
<head>
<title>PHP-FORM</title>
<style>
form 
	{
		width:40%;
		margin-left:550px;
		margin-top:150px;
		
	}
.name
	{
		margin-left:40px;
	}
.class
	{
		margin-left:44px;
	}
.roll
	{
		margin-left:25px;
	}
.contact
	{
		margin-left:30px;
	}
.submit
	{
		margin-left:99px;
	}
h1
	{
		color:#99FF00;
	}
</style>
</head>
<body background="../login/sea.jpg">
<h1 align="center"><marquee>STUDENTS DETAILS</marquee></h1>
<form method="post" action="formquery.php">
			<label>Name </label>
			<input type="text" name="name" value="" placeholder = "Enter Your Name" class="name"/><p>
			<label>Branch </label>
			<input type="text" name="class" value="" placeholder = "Enter Your Class" class="class"/><p>
			<label>Roll No. </label>
			<input type="text" name="rollno" value="" placeholder = "Enter Your Roll No." class="roll"/><p>
			<label>Contact </label>
			<input type="text" name="contact" value="" placeholder = "Enter Your Contact" class="contact"/><p>
			
			<input type="submit" name="submit" value="submit" class="submit"/>
</form>
</body>
</html>




