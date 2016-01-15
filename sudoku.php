<?php 

/**
* @author Archana 
* @package validateSudoku
* @subpackage Sudoku
* @version 1.0

This is executable file which consists of input array by default, and calling validate method from validateSudoku class.

The sum of number 1 to 9 comes to 45, so checking each row and column sum if it comes out to 45 then solution is valid otherwise it is invalid.

Input : 9X9 array matrix numeric values
Output: 1 - For valid solution
        0 - For invalid solution
*/

	
	// Including validateSudoku class file
	include_once("validateSudoku.class.php");

	// Get txt file name from post
	$sFile = $_POST['solSudo'];
	
	// Open the file
	$fp = @fopen($sFile, 'r'); 

	// Add each line to an array excluding new line character \n
	if ($fp) {
	   $sudokuArray = file($sFile, FILE_IGNORE_NEW_LINES);
	}

	// Check if size of array is greater than 9 
	if(count($sudokuArray)>9)
	{
		// Redirect to form page to retry user by doing changes in txt file
		header("Location:sudokuForm.php?msg=more than 9 number in a column");
		exit;
	}
	foreach($sudokuArray as $key=>$val)
	{
	// Check if row contains more than 9 number or 0
		if(strlen($val)>9 || preg_match('/^[0]/', $val))
		{
		// Redirect to form page to retry user by doing changes in txt file
	    header("Location:sudokuForm.php?msg=Please enter only 9 numbers and without zero");
		exit;
		}
	}

  // create an object of validateSudoku class
	$validSudoku = new validateSudoku();
	
  // Pass the input array of sudoku numbers for validation to validate method
	$result = $validSudoku->validate($sudokuArray);
	
  // Redirecting to form with printing the result returned from validate method 
	 header("Location:sudokuForm.php?msg=$result");
	 exit;

?>
	
	