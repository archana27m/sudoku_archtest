<html>
	<head> 
		<title>
		Validate Sudoku solution 
		</title>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"
        type="text/javascript"></script>
	</head>
	
	<body>
		<form method="post" action="sudoku.php" name="frmSudoku" id="frmSudoku" onSubmit="return validateFile(this);">
			<input type="file" name="solSudo" id="solSudo" />
			<input type="submit" name="submit" id="submit" value="submit" />
		</form>
	</body>
</html>
<?php 
if(isset($_GET['msg']))
{
echo "<b>".$_GET['msg']."</b>";
}
?>


<script type="text/javascript">
function validateFile()
{
  var fname = document.frmSudoku.elements["solSudo"].value;   
  var extension = fname.substr(fname.lastIndexOf('.') + 1).toLowerCase();

  if (fname.length > 0)
    {
          if (extension!=="txt") 
             {
               alert('Invalid file Format. Only .txt file can be allowed.');
               return false;
             } else return true;
    }
}

</script>