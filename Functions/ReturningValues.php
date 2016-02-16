<?php

function booksBYAuthorYear($tempAuthorName, $tempYear = 1910)
{
    echo $tempYear;
    echo "<br />";
    echo $tempAuthorName;
    echo "<br />"; 
}

function getAuthor()
{
    return "Charles Dickens";
}

$year = 1920;
$authorName = getAuthor();

booksByAuthorYear($authorName, $year);

?>