<?php

$authors = array(
    "Male" => array(
        "Charles Dickens" => array("A Chrstmas Carol","Oliver Twist"),
        "William Shakespeare" => array("Romeo & Juliet", "Richard III"),
        "Mark Twain" =>array("Tom Sawyer", "The Prince and the Pauper")
    ),
    "Female" => array(
        "L. M. Montgomery" => array("Ann of Green Gables", "Ann of Avonlea"),
        "Louisa May Alcott" => array ("Little Women")
    )
);

foreach ($authors as $key => $val)
{
    echo $val." (".$key.")<br />";
}

echo "<pre>";
print_r($authors['Female']['L. M. Montgomery'][0]);
echo "</pre>";


?>