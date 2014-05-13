<?php
namespace test\V1\Rest\Resttest;

class ResttestResourceFactory
{
    public function __invoke($services)
    {
        return new ResttestResource();
    }
}
