<?php

use amonger\Set;

class SetTest extends PHPUnit_Framework_TestCase
{
    public function testIntersect()
    {
        $boundaryStart = DateTime::createFromFormat('Y-m-d H:i:s', '2015-01-01 00:00:00');
        $boundaryEnd = DateTime::createFromFormat('Y-m-d H:i:s', '2015-01-03 00:00:00');

        $startDate = DateTime::createFromFormat('Y-m-d H:i:s', '2015-01-02 00:00:00');
        $endDate = DateTime::createFromFormat('Y-m-d H:i:s', '2015-01-04 00:00:00');

        $dateSet = new Set($boundaryStart, $boundaryEnd);
        $this->assertTrue($dateSet->intersect($startDate, $endDate));
    }

    public function testSubset()
    {
        $boundaryStart = DateTime::createFromFormat('Y-m-d H:i:s', '2015-01-01 00:00:00');
        $boundaryEnd = DateTime::createFromFormat('Y-m-d H:i:s', '2015-01-04 00:00:00');

        $startDate = DateTime::createFromFormat('Y-m-d H:i:s', '2015-01-02 00:00:00');
        $endDate = DateTime::createFromFormat('Y-m-d H:i:s', '2015-01-03 00:00:00');

        $dateSet = new Set($boundaryStart, $boundaryEnd);
        $this->assertTrue($dateSet->subset($startDate, $endDate));
    }

    public function testSuperset()
    {
        $boundaryStart = DateTime::createFromFormat('Y-m-d H:i:s', '2015-01-02 00:00:00');
        $boundaryEnd = DateTime::createFromFormat('Y-m-d H:i:s', '2015-01-03 00:00:00');

        $startDate = DateTime::createFromFormat('Y-m-d H:i:s', '2015-01-01 00:00:00');
        $endDate = DateTime::createFromFormat('Y-m-d H:i:s', '2015-01-04 00:00:00');

        $dateSet = new Set($boundaryStart, $boundaryEnd);
        $this->assertTrue($dateSet->superSet($startDate, $endDate));
    }
}
