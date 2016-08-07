<?php

/**
 * [showName description]
 * @param  string $name [description]
 * @return [type]       [description]
 */
function showName($name = 'Anonim')
{
    return "Hello - " . $name;
}

/**
 * [showSurname description]
 * @param  string $surname [description]
 * @return [type]          [description]
 */
function showSurname($surname = '')
{
    return  ' ' . $surname;
}

/**
 * [showFullName]
 * @param  [string] $name    [user name]
 * @param  [string] $surname [user surname]
 * @return [string]          [user full name]
 */
function showFullName($name,$surname)
{
    return showName($name) . showSurname($surname);
}

echo showFullName('', '');
