<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'FakerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'InstantiatorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'OrmConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'MongoConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'MakeFactoryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'MakeStoryConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ZenstruckFoundryConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $autoRefreshProxies;
    private $faker;
    private $instantiator;
    private $globalState;
    private $orm;
    private $mongo;
    private $makeFactory;
    private $makeStory;
    private $_usedProperties = [];

    /**
     * Whether to auto-refresh proxies by default (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#auto-refresh)
     * @default null
     * @param ParamConfigurator|bool $value
     * @deprecated Since 2.0 auto_refresh_proxies defaults to true and this configuration has no effect.
     * @return $this
     */
    public function autoRefreshProxies($value): static
    {
        $this->_usedProperties['autoRefreshProxies'] = true;
        $this->autoRefreshProxies = $value;

        return $this;
    }

    /**
     * Configure the faker used by your factories.
     * @default {"locale":null,"seed":null,"service":null}
    */
    public function faker(array $value = []): \Symfony\Config\ZenstruckFoundry\FakerConfig
    {
        if (null === $this->faker) {
            $this->_usedProperties['faker'] = true;
            $this->faker = new \Symfony\Config\ZenstruckFoundry\FakerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "faker()" has already been initialized. You cannot pass values the second time you call faker().');
        }

        return $this->faker;
    }

    /**
     * Configure the default instantiator used by your object factories.
     * @default {"use_constructor":true,"allow_extra_attributes":false,"always_force_properties":false,"service":null}
    */
    public function instantiator(array $value = []): \Symfony\Config\ZenstruckFoundry\InstantiatorConfig
    {
        if (null === $this->instantiator) {
            $this->_usedProperties['instantiator'] = true;
            $this->instantiator = new \Symfony\Config\ZenstruckFoundry\InstantiatorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "instantiator()" has already been initialized. You cannot pass values the second time you call instantiator().');
        }

        return $this->instantiator;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function globalState(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['globalState'] = true;
        $this->globalState = $value;

        return $this;
    }

    /**
     * @default {"auto_persist":true,"reset":{"connections":["default"],"entity_managers":["default"],"mode":"schema","migrations":{"configurations":[]}}}
    */
    public function orm(array $value = []): \Symfony\Config\ZenstruckFoundry\OrmConfig
    {
        if (null === $this->orm) {
            $this->_usedProperties['orm'] = true;
            $this->orm = new \Symfony\Config\ZenstruckFoundry\OrmConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "orm()" has already been initialized. You cannot pass values the second time you call orm().');
        }

        return $this->orm;
    }

    /**
     * @default {"auto_persist":true,"reset":{"document_managers":["default"]}}
    */
    public function mongo(array $value = []): \Symfony\Config\ZenstruckFoundry\MongoConfig
    {
        if (null === $this->mongo) {
            $this->_usedProperties['mongo'] = true;
            $this->mongo = new \Symfony\Config\ZenstruckFoundry\MongoConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mongo()" has already been initialized. You cannot pass values the second time you call mongo().');
        }

        return $this->mongo;
    }

    /**
     * @default {"default_namespace":"Factory"}
    */
    public function makeFactory(array $value = []): \Symfony\Config\ZenstruckFoundry\MakeFactoryConfig
    {
        if (null === $this->makeFactory) {
            $this->_usedProperties['makeFactory'] = true;
            $this->makeFactory = new \Symfony\Config\ZenstruckFoundry\MakeFactoryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "makeFactory()" has already been initialized. You cannot pass values the second time you call makeFactory().');
        }

        return $this->makeFactory;
    }

    /**
     * @default {"default_namespace":"Story"}
    */
    public function makeStory(array $value = []): \Symfony\Config\ZenstruckFoundry\MakeStoryConfig
    {
        if (null === $this->makeStory) {
            $this->_usedProperties['makeStory'] = true;
            $this->makeStory = new \Symfony\Config\ZenstruckFoundry\MakeStoryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "makeStory()" has already been initialized. You cannot pass values the second time you call makeStory().');
        }

        return $this->makeStory;
    }

    public function getExtensionAlias(): string
    {
        return 'zenstruck_foundry';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('auto_refresh_proxies', $value)) {
            $this->_usedProperties['autoRefreshProxies'] = true;
            $this->autoRefreshProxies = $value['auto_refresh_proxies'];
            unset($value['auto_refresh_proxies']);
        }

        if (array_key_exists('faker', $value)) {
            $this->_usedProperties['faker'] = true;
            $this->faker = new \Symfony\Config\ZenstruckFoundry\FakerConfig($value['faker']);
            unset($value['faker']);
        }

        if (array_key_exists('instantiator', $value)) {
            $this->_usedProperties['instantiator'] = true;
            $this->instantiator = new \Symfony\Config\ZenstruckFoundry\InstantiatorConfig($value['instantiator']);
            unset($value['instantiator']);
        }

        if (array_key_exists('global_state', $value)) {
            $this->_usedProperties['globalState'] = true;
            $this->globalState = $value['global_state'];
            unset($value['global_state']);
        }

        if (array_key_exists('orm', $value)) {
            $this->_usedProperties['orm'] = true;
            $this->orm = new \Symfony\Config\ZenstruckFoundry\OrmConfig($value['orm']);
            unset($value['orm']);
        }

        if (array_key_exists('mongo', $value)) {
            $this->_usedProperties['mongo'] = true;
            $this->mongo = new \Symfony\Config\ZenstruckFoundry\MongoConfig($value['mongo']);
            unset($value['mongo']);
        }

        if (array_key_exists('make_factory', $value)) {
            $this->_usedProperties['makeFactory'] = true;
            $this->makeFactory = new \Symfony\Config\ZenstruckFoundry\MakeFactoryConfig($value['make_factory']);
            unset($value['make_factory']);
        }

        if (array_key_exists('make_story', $value)) {
            $this->_usedProperties['makeStory'] = true;
            $this->makeStory = new \Symfony\Config\ZenstruckFoundry\MakeStoryConfig($value['make_story']);
            unset($value['make_story']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['autoRefreshProxies'])) {
            $output['auto_refresh_proxies'] = $this->autoRefreshProxies;
        }
        if (isset($this->_usedProperties['faker'])) {
            $output['faker'] = $this->faker->toArray();
        }
        if (isset($this->_usedProperties['instantiator'])) {
            $output['instantiator'] = $this->instantiator->toArray();
        }
        if (isset($this->_usedProperties['globalState'])) {
            $output['global_state'] = $this->globalState;
        }
        if (isset($this->_usedProperties['orm'])) {
            $output['orm'] = $this->orm->toArray();
        }
        if (isset($this->_usedProperties['mongo'])) {
            $output['mongo'] = $this->mongo->toArray();
        }
        if (isset($this->_usedProperties['makeFactory'])) {
            $output['make_factory'] = $this->makeFactory->toArray();
        }
        if (isset($this->_usedProperties['makeStory'])) {
            $output['make_story'] = $this->makeStory->toArray();
        }

        return $output;
    }

}
