<?php

function booksBYAuthorYear($tempAuthorName, $tempYear = 1910)
{
    echo $tempYear;
    echo "<br />";
    echo $tempAuthorName;
    echo "<br />"; 
}

$year = 1920;
$authorName = "William Shakespeare";

booksByAuthorYear($authorName);

?>