<?php
# source: hello.proto

namespace Carno\Tests\Hello\Clients;

use Carno\Tests\Hello\Payload;


class Hello extends \Carno\RPC\Client implements \Carno\Tests\Hello\Contracts\Hello
{

    /**
     * 
     * @var Payload $request
     * @return Payload
     */
    public function world(Payload $request)
    {
        return $this->request('carno.tests.hello', 'Hello', 'world', $request, new Payload);
    }

}
