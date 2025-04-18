<?php

namespace Symfony\Config\ZenstruckFoundry\Mongo;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ResetConfig 
{
    private $documentManagers;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function documentManagers(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['documentManagers'] = true;
        $this->documentManagers = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('document_managers', $value)) {
            $this->_usedProperties['documentManagers'] = true;
            $this->documentManagers = $value['document_managers'];
            unset($value['document_managers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['documentManagers'])) {
            $output['document_managers'] = $this->documentManagers;
        }

        return $output;
    }

}
