<?php

namespace Nomess\Component\Parameter;

use Nomess\Component\Config\ConfigStoreInterface;
use Nomess\Component\Parameter\Exception\UndefinedParameterException;

class ParameterStore implements ParameterStoreInterface
{
    
    private const CONFIG_PARAMETER = 'parameter';
    private array $data;
    
    public function __construct(ConfigStoreInterface $configStore)
    {
        $this->data = $configStore->get(self::CONFIG_PARAMETER);
    }
    
    
    /**
     * @inheritDoc
     */
    public function get(?string $index)
    {
        if(!array_key_exists($index, $this->data)){
            throw new UndefinedParameterException('The parameter "' . $index . '" was not found');
        }
        
        return $this->data[$index];
    }
}
