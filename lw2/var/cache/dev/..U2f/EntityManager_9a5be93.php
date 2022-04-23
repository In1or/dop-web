<?php

namespace ContainerUWEoxCl;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbfebf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer00b8b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd4698 = [
        
    ];

    public function getConnection()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getConnection', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getMetadataFactory', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getExpressionBuilder', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'beginTransaction', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getCache', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'transactional', array('func' => $func), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'wrapInTransaction', array('func' => $func), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'commit', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->commit();
    }

    public function rollback()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'rollback', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getClassMetadata', array('className' => $className), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'createQuery', array('dql' => $dql), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'createNamedQuery', array('name' => $name), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'createQueryBuilder', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'flush', array('entity' => $entity), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'clear', array('entityName' => $entityName), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->clear($entityName);
    }

    public function close()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'close', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->close();
    }

    public function persist($entity)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'persist', array('entity' => $entity), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'remove', array('entity' => $entity), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'refresh', array('entity' => $entity), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'detach', array('entity' => $entity), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'merge', array('entity' => $entity), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'contains', array('entity' => $entity), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getEventManager', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getConfiguration', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'isOpen', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getUnitOfWork', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getProxyFactory', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'initializeObject', array('obj' => $obj), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'getFilters', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'isFiltersStateClean', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'hasFilters', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return $this->valueHolderbfebf->hasFilters();
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

        $instance->initializer00b8b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbfebf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbfebf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbfebf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, '__get', ['name' => $name], $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        if (isset(self::$publicPropertiesd4698[$name])) {
            return $this->valueHolderbfebf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfebf;

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

        $targetObject = $this->valueHolderbfebf;
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
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfebf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbfebf;
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
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, '__isset', array('name' => $name), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfebf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbfebf;
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
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, '__unset', array('name' => $name), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfebf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbfebf;
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
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, '__clone', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        $this->valueHolderbfebf = clone $this->valueHolderbfebf;
    }

    public function __sleep()
    {
        $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, '__sleep', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;

        return array('valueHolderbfebf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer00b8b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer00b8b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer00b8b && ($this->initializer00b8b->__invoke($valueHolderbfebf, $this, 'initializeProxy', array(), $this->initializer00b8b) || 1) && $this->valueHolderbfebf = $valueHolderbfebf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbfebf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbfebf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
