<?php
//////////////////////////////////// //Beginning setup/API stuff here
$apiKey = 'AIzaSyCYSt4fgIPlrfsa38Z1iBYe6d5DwzeNNl8';
////////////////////////////////////

$numberOfPeople = (int) $_POST['number_of_people']; //We need to loop for x amount of people.
$books = []; //Array to store the books

$url = "https://www.googleapis.com/books/v1/volumes?q=" . urlencode($title);
$response = file_get_contents($url);

//Parse the XML response
$data = json_decode($response, true);

for ($i = 0; $i < $numberOfPeople; $i++) 
{
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
    echo "Cover: " . $coverUrl . "\n";
} else {
    // No books found
    echo "No books found for the given title.";
}
} //I NEED TO FIX THIS TO CONSOLIDATE ALL OF THE TITLE LOOPING INTO BOOKINPUT.PHP
?>
