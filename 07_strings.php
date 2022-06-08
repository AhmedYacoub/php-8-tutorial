<?php

$firstName = 'Ahmed';
$lastName = 'Yacoub';

/* Heredoc (Accepts variables, new lines, HTML tags..), Dynamic text*/
$text = <<<TEXT
First name is $firstName \n
Last name is $lastName \n
TEXT;


/* Nowdoc (Treats its content as text), static text */
$text = <<<'TEXT'
First name is $firstName \n
Last name is $lastName \n ' "
TEXT;

echo nl2br($text);
