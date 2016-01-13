<?php 

/**
* @author Archana 
* @package validateSudoku
* @subpackage Sudoku
* @version 1.0

This class is written to validate solved sudoku is valid or not
Input : 9X9 array matrix numeric values
Output: 1 - For valid solution
        0 - For invalid solution
*/


Class validateSudoku {

// validateSudoku class constructor
public function __construct()
    {
	// Taking variables to make sum of values from row and column
	$rowSum = 0;
	$colSum = 0;
	}

// Function to validate sudoku solution
public function validate($sudokuArray)
	{
	  $sum = 45; // The sum of numbers 1 to 9 is 45
	  
	  // Iterating with each element row-column wise and getting rowSum and colSum for further processing
	  for($i=0;$i<9;$i++)
	    {
	    $rowSum = 0;
	    $colSum = 0;
		
	     for($j=0;$j<9;$j++)
	      {
	      $rowSum = $rowSum + $sudokuArray[$i][$j];
	      $colSum =  $colSum + $sudokuArray[$j][$i];
	      }
	      
		  //Checking if rowSum or colSum is greater than or less than actual sum and returning the output
		   if($rowSum > $sum || $rowSum < $sum || $colSum > $sum || $colSum < $sum)
	       {
	       return "0 : Sudoku solution not valid";
	       } 
		   else 
	       { 
		   return "1 : Valid Sudoku Solution"; 
		   }  
	    }
    }
		
}