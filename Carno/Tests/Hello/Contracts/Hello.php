<?php
# source: hello.proto

namespace Carno\Tests\Hello\Contracts;

use Carno\Tests\Hello\Payload;


interface Hello
{

    /**
     * 
     * @var Payload $request
     * @return Payload
     */
    public function world(Payload $request);

}
