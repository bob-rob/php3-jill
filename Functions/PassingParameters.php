<?php

function bookByAuthorYear($authorName, $year)
{
    echo $year;
    echo "<br />";
    echo $authorName;
}

$year = 1910;
$authorName = "William Shakespeare";

bookByAuthorYear($authorName, $year);

?>