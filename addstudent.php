<html>
<head>
<title>Add Student</title>
</head>
<body>
<form action="http://localhost/studentadded.php" method="post">

<b>Add a New Student</b>

<p>Name:
<input type="text" name="name" size="30" value="" />
</p>

<p>Grade 12 marks:
<input type="text" name="marks" size="30" value="" />
</p>

<p>Sex:
<input type="text" name="sex" size="30" value="" />
</p>

<p>Date of birth(YYYY/MM/DD):
<input type="text" name="dob" size="30" maxlength="1" value="" />
</p>

<p>Branch:
<input type="text" name="branch" size="30" value="" />
</p>

<p>
<input type="submit" name="submit" value="Send" />
</p>

</form>
</body>
</html>