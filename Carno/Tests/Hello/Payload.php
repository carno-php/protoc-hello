<?php
# source: hello.proto

namespace Carno\Tests\Hello;

use Google\Protobuf\Internal\GPBUtil;


class Payload extends \Google\Protobuf\Internal\Message
{

    /**
     * 
     * @var string
     */
    private $data = "";


    /**
     * Payload constructor.
     * @param array $init
     */
    public function __construct(array $init = [])
    {
        \Carno\Tests\Hello\Metadata\Hello::init();
        parent::__construct();
    }


    /**
     * 
     * @return string
     */
    public function getData() : string
    {
        return $this->data;
    }

    /**
     * 
     * @param string $var
     * @return self
     */
    public function setData(string $var) : self
    {
        $this->data = $var;
        return $this;
    }

}
