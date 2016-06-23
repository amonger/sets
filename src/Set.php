<?php

namespace amonger;

class Set
{
    protected $boundaryStart;
    protected $boundaryEnd;

    public function __construct($boundaryStart, $boundaryEnd)
    {
        $this->boundaryStart = $boundaryStart;
        $this->boundaryEnd = $boundaryEnd;
    }

    /**
     * @param mixed $start
     * @param mixed $end
     * @return bool
     */
    public function intersect($start, $end)
    {
        return $start > $this->boundaryStart
        && $start < $this->boundaryEnd
        || $end > $this->boundaryStart
        && $end < $this->boundaryEnd;
    }

    /**
     * @param mixed $start
     * @param mixed $end
     * @return bool
     */
    public function subset($start, $end)
    {
        return $start >= $this->boundaryStart
        && $end <= $this->boundaryEnd;
    }

    /**
     * @param mixed $start
     * @param mixed $end
     * @return bool
     */
    public function superSet($start, $end)
    {
        return $start < $this->boundaryStart
        && $end > $this->boundaryEnd;
    }
}
