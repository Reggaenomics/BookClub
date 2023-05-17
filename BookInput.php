<?php
echo "Please enter a book to vote on: \n"; //Prompt user for book title
$title = readline();

echo "Your book:\n" . $title . "\n"; //make sure I did this right
return $title; //Should return for the main file(s) to use
?>