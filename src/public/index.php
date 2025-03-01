<?php

declare(strict_types=1);


require __DIR__ ."/../vendor/autoload.php";

use SRC\library\Book;
use SRC\library\Library;


$id = new \Ramsey\Uuid\UuidFactory();
$uuid = $id->uuid4()->toString();
$mybook = new Book( $uuid,'The Great Gatsby','F. Scott Fitzgerald',
'978-3-16-148410-0','available');
$mybook->checkOutBook();
