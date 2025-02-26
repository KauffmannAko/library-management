<?php

declare(strict_types=1);

require_once __DIR__ ."/../library/Library.php";
require_once __DIR__ ."/../library/Book.php";

use src\library\Book\Book;
use src\library\Library\Library;

$mybook = new Book();
$myLib = new Library();
var_dump($mybook);
echo'<br>';
var_dump($myLib);