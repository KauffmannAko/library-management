<?php

declare(strict_types=1);

// require_once __DIR__ ."/../library/Library.php";
// require_once __DIR__ ."/../library/Book.php";

require __DIR__ ."/../vendor/autoload.php";

use SRC\library\Book;
use SRC\library\Library;

$mybook = new Book();
echo'<br>';
$mylib = new Library();
var_dump($mybook);
echo'<br>';



$id = new \Ramsey\Uuid\UuidFactory();
$uuid = $id->uuid4()->toString();
var_dump($uuid);