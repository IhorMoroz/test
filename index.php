<?php

function showName($name = 'Anonim')
{
    return "Hello - " . $name;
}

function showSurname($surname = '')
{
    return  ' ' . $surname;
}

function showFullName($name,$surname)
{
    return showName($name) . showSurname($surname);
}

echo showFullName('', '');
