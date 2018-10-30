<?php
# file: hello.proto

namespace Carno\Tests\Hello\Metadata;



class Hello
{
    private static $initialized = false;

    /**
     * Hello initialize
     */
    public static function init() : void
    {
        if (self::$initialized) {
            return;
        }

        

        \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool()->internalAddGeneratedFile(hex2bin(
        
            "0a3f0a0b68656c6c6f2e70726f746f12116361726e6f2e74657374732e68" . 
            "656c6c6f221d0a075061796c6f616412120a046461746118012001280952" . 
            "0464617461" . 
            ""
        ));

        self::$initialized = true;
    }
}
