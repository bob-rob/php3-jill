<?php

//$authors = array(
        //"Charles Dickens",
        //"Jane Austin",
        //"William Shakespeare",
        //"Mark Twain",
        //"Louisa May Alcott"
    //);

//echo count($authors);

$authors = [
    "Male" => array(
        "Charles Dickens" => array("A Chrstmas Carol","Oliver Twist"),
        "William Shakespeare" => array("Romeo & Juliet", "Richard III"),
        "Mark Twain" =>array("Tom Sawyer", "Huck Finn")
    ),
    "Female" => array(
        "L. M. Montgomery" => array("Ann of Green Gables", "Ann of Avonlea"),
        "Louisa May Alcott" => array ("Little Women")
    )
];

//echo count($authors, 1);
echo count($authors, COUNT_RECURSIVE);

?>