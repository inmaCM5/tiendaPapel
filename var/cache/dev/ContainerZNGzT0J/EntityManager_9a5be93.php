<?php

namespace ContainerZNGzT0J;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercf819 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3a4ef = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese33f1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getConnection', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getMetadataFactory', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getExpressionBuilder', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'beginTransaction', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getCache', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'transactional', array('func' => $func), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'commit', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->commit();
    }

    public function rollback()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'rollback', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getClassMetadata', array('className' => $className), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'createQuery', array('dql' => $dql), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'createNamedQuery', array('name' => $name), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'createQueryBuilder', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'flush', array('entity' => $entity), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'clear', array('entityName' => $entityName), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->clear($entityName);
    }

    public function close()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'close', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->close();
    }

    public function persist($entity)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'persist', array('entity' => $entity), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'remove', array('entity' => $entity), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'refresh', array('entity' => $entity), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'detach', array('entity' => $entity), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'merge', array('entity' => $entity), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'contains', array('entity' => $entity), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getEventManager', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getConfiguration', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'isOpen', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getUnitOfWork', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getProxyFactory', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'initializeObject', array('obj' => $obj), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'getFilters', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'isFiltersStateClean', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'hasFilters', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return $this->valueHoldercf819->hasFilters();
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

        $instance->initializer3a4ef = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercf819) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercf819 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercf819->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, '__get', ['name' => $name], $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        if (isset(self::$publicPropertiese33f1[$name])) {
            return $this->valueHoldercf819->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf819;

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

        $targetObject = $this->valueHoldercf819;
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
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf819;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercf819;
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
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, '__isset', array('name' => $name), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf819;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercf819;
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
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, '__unset', array('name' => $name), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf819;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercf819;
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
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, '__clone', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        $this->valueHoldercf819 = clone $this->valueHoldercf819;
    }

    public function __sleep()
    {
        $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, '__sleep', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;

        return array('valueHoldercf819');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3a4ef = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3a4ef;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3a4ef && ($this->initializer3a4ef->__invoke($valueHoldercf819, $this, 'initializeProxy', array(), $this->initializer3a4ef) || 1) && $this->valueHoldercf819 = $valueHoldercf819;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercf819;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercf819;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
