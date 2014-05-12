<?php
namespace test\V1\Rpc\Test2;

class Test2ControllerFactory
{
    public function __invoke($controllers)
    {
        return new Test2Controller();
    }
}
