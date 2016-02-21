<?php

$authors = array(
    "Charles Dickens",
    "Jane Austin",
    "William Shakespeare",
    "Mark Twain",
    "Louisa May Alcott"
);

$authorsAssociative = array(
    "poetic" => "William Shakespeare",
    "brilliant" => "Jane Austin",
    "quarky" => "Charles Dickens" 
);

ksort($authorsAssociative);

print_r($authorsAssociative);


?>