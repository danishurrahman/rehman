<?php
function getAuthor()
{
    return "charles dickens";
}
function bookByAuthorYear($authorName,$year=1998)
{
    echo"This will list all the book written by ".$authorName."\n in \n". $year;
}
$year=1999;
$authorName=getAuthor();
bookByAuthorYear($authorName,$year);
?>