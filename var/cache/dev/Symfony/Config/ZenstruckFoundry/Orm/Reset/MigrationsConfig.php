<?php

namespace Symfony\Config\ZenstruckFoundry\Orm\Reset;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MigrationsConfig 
{
    private $configurations;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function configurations(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['configurations'] = true;
        $this->configurations = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('configurations', $value)) {
            $this->_usedProperties['configurations'] = true;
            $this->configurations = $value['configurations'];
            unset($value['configurations']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['configurations'])) {
            $output['configurations'] = $this->configurations;
        }

        return $output;
    }

}
