<?php

namespace Nomess\Component\Parameter;

use Nomess\Component\Parameter\Exception\UndefinedParameterException;

interface ParameterStoreInterface
{
    
    /**
     * Return value associate to the index variable (if not exists, return null)
     *
     * @param string|null $index
     * @return mixed
     * @throws UndefinedParameterException
     */
    public function get( ?string $index );
}
