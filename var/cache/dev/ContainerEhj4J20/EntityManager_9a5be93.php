<?php

namespace ContainerEhj4J20;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder87a21 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer46ec5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb71fa = [
        
    ];

    public function getConnection()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getConnection', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getMetadataFactory', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getExpressionBuilder', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'beginTransaction', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getCache', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getCache();
    }

    public function transactional($func)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'transactional', array('func' => $func), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'wrapInTransaction', array('func' => $func), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'commit', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->commit();
    }

    public function rollback()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'rollback', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getClassMetadata', array('className' => $className), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'createQuery', array('dql' => $dql), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'createNamedQuery', array('name' => $name), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'createQueryBuilder', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'flush', array('entity' => $entity), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'clear', array('entityName' => $entityName), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->clear($entityName);
    }

    public function close()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'close', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->close();
    }

    public function persist($entity)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'persist', array('entity' => $entity), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'remove', array('entity' => $entity), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'refresh', array('entity' => $entity), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'detach', array('entity' => $entity), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'merge', array('entity' => $entity), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getRepository', array('entityName' => $entityName), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'contains', array('entity' => $entity), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getEventManager', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getConfiguration', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'isOpen', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getUnitOfWork', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getProxyFactory', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'initializeObject', array('obj' => $obj), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'getFilters', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'isFiltersStateClean', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'hasFilters', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return $this->valueHolder87a21->hasFilters();
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

        $instance->initializer46ec5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder87a21) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder87a21 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder87a21->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, '__get', ['name' => $name], $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        if (isset(self::$publicPropertiesb71fa[$name])) {
            return $this->valueHolder87a21->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87a21;

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

        $targetObject = $this->valueHolder87a21;
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
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87a21;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder87a21;
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
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, '__isset', array('name' => $name), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87a21;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder87a21;
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
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, '__unset', array('name' => $name), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87a21;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder87a21;
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
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, '__clone', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        $this->valueHolder87a21 = clone $this->valueHolder87a21;
    }

    public function __sleep()
    {
        $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, '__sleep', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;

        return array('valueHolder87a21');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer46ec5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer46ec5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer46ec5 && ($this->initializer46ec5->__invoke($valueHolder87a21, $this, 'initializeProxy', array(), $this->initializer46ec5) || 1) && $this->valueHolder87a21 = $valueHolder87a21;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder87a21;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder87a21;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
