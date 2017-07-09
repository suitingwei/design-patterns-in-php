<?php

namespace Behavioral\AdapterPattern;

require_once '../../vendor/autoload.php';

use Behavioral\AdapterPattern\Src\Book;
use Behavioral\AdapterPattern\Src\Client;
use Behavioral\AdapterPattern\Src\EReader;
use Behavioral\AdapterPattern\Src\EReaderAdapter;

//The client side caller call the api provider, all works fine.
$client = new Client(new Book());
$client->goNext();
$client->goPrevious();


//But, what if the provider's code is not compatiable with the client code.
//Now the client side can not use the new provider.
//This code will throw an exception, because the ereader has not implemented the bookinterface.
//$client2 = new Client(new \Behavioral\AdapterPattern\Src\EReader());

//But we can create an adapter to wrap the ereader, so the client can call the adapter which will
//pass (translate) the request to the ereader.
$client2 = new Client(new EReaderAdapter(new EReader()));

$client2->goNext();
$client2->goPrevious();


