<?php

////////////////SETUP/API STUFF START////////////////////
require_once 'config.php'; //Getting the API Key from Config
/////////////////SETUP/API STUFF END/////////////////////
//This was bigger before.

$numberOfPeople = 0;

while ($numberOfPeople <= 0) 
{
    echo "How many people are submitting books?: \n"; //Prompt the user to enter x number of people in the book club
    $numberOfPeople = (int) fgets(STDIN); //We need to loop for x amount of people.
    if ($numberOfPeople > 0) 
    {
        // Valid input, proceed with the rest of the code
        break;
    } 
    else 
    {
        // Invalid input, display an error message
        echo "Invalid input. Please enter a positive number." . PHP_EOL;
    }
}

$books = []; //Array to store the books

// Prompt the user to enter the book titles
for ($i = 0; $i < $numberOfPeople; $i++) 
{
    echo "Enter a book title: ";
    $books[] = trim(fgets(STDIN));
}

foreach ($books as $title) //Simple Loop to read out all the data pulled from Books
{
    $url = "https://www.googleapis.com/books/v1/volumes?q=" . urlencode($title);
    $response = file_get_contents($url);

    //Parse the JSON response
    $data = json_decode($response, true);

    //Time to see if we pulled a novel with the title given
    if ($data['totalItems'] > 0) {
        // Get the first book in the search results
        $book = $data['items'][0]['volumeInfo'];

        // Extract the desired information
        $author = $book['authors'][0];
        $publicationDate = $book['publishedDate'];
        $coverUrl = $book['imageLinks']['thumbnail'];

        // Output the book information
        echo "Title: " . $title . "\n";
        echo "Author: " . $author . "\n";
        echo "Publication Date: " . $publicationDate . "\n";
        //echo "Cover: " . $coverUrl . "\n"; //Commenting this out as I currently only see text output
        echo "////////////////////////\n";
    } else {
        // No books found
        echo "No books found for the given title: " . $title . "\n";
    }
}
?>
