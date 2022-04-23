<?php

namespace ContainerPcPdJaV;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7284b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1dcd1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd6762 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getConnection', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getMetadataFactory', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getExpressionBuilder', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'beginTransaction', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getCache', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'transactional', array('func' => $func), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'commit', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->commit();
    }

    public function rollback()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'rollback', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getClassMetadata', array('className' => $className), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'createQuery', array('dql' => $dql), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'createNamedQuery', array('name' => $name), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'createQueryBuilder', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'flush', array('entity' => $entity), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'clear', array('entityName' => $entityName), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->clear($entityName);
    }

    public function close()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'close', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->close();
    }

    public function persist($entity)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'persist', array('entity' => $entity), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'remove', array('entity' => $entity), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'refresh', array('entity' => $entity), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'detach', array('entity' => $entity), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'merge', array('entity' => $entity), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'contains', array('entity' => $entity), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getEventManager', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getConfiguration', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'isOpen', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getUnitOfWork', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getProxyFactory', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'initializeObject', array('obj' => $obj), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'getFilters', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'isFiltersStateClean', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'hasFilters', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return $this->valueHolder7284b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer1dcd1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7284b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7284b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7284b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, '__get', ['name' => $name], $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        if (isset(self::$publicPropertiesd6762[$name])) {
            return $this->valueHolder7284b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7284b;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7284b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7284b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7284b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, '__isset', array('name' => $name), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7284b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7284b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, '__unset', array('name' => $name), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7284b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7284b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, '__clone', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        $this->valueHolder7284b = clone $this->valueHolder7284b;
    }

    public function __sleep()
    {
        $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, '__sleep', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;

        return array('valueHolder7284b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1dcd1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1dcd1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1dcd1 && ($this->initializer1dcd1->__invoke($valueHolder7284b, $this, 'initializeProxy', array(), $this->initializer1dcd1) || 1) && $this->valueHolder7284b = $valueHolder7284b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7284b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7284b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
