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
	
  // sudoku input array row-column 9X9 
	$sudokuArray = array(
		array(1,3,2,5,7,9,4,6,8),
		array(4,9,8,2,6,1,3,7,5),
		array(7,5,6,3,8,4,2,1,9),
		array(6,4,3,1,5,8,7,9,2),
		array(5,2,1,7,9,3,8,4,6),
		array(9,8,7,4,2,6,5,3,1),
		array(2,1,4,9,3,5,6,8,7),
		array(3,6,5,8,1,7,9,2,4),
		array(8,7,9,6,4,2,1,5,3)
	);
	
  // create an object of validateSudoku class
	$validSudoku = new validateSudoku();
	
  // Pass the input array of sudoku numbers for validation to validate method
	$result = $validSudoku->validate($sudokuArray);
	
  // Printing the result returned from validate method 
	echo "Result - ". $result;

?>
	
	