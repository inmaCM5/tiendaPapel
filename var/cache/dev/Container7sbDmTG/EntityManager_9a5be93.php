<?php

namespace Container7sbDmTG;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder50977 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbebd1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9727c = [
        
    ];

    public function getConnection()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getConnection', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getMetadataFactory', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getExpressionBuilder', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'beginTransaction', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getCache', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'transactional', array('func' => $func), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'commit', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->commit();
    }

    public function rollback()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'rollback', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getClassMetadata', array('className' => $className), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'createQuery', array('dql' => $dql), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'createNamedQuery', array('name' => $name), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'createQueryBuilder', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'flush', array('entity' => $entity), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'clear', array('entityName' => $entityName), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->clear($entityName);
    }

    public function close()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'close', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->close();
    }

    public function persist($entity)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'persist', array('entity' => $entity), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'remove', array('entity' => $entity), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'refresh', array('entity' => $entity), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'detach', array('entity' => $entity), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'merge', array('entity' => $entity), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'contains', array('entity' => $entity), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getEventManager', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getConfiguration', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'isOpen', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getUnitOfWork', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getProxyFactory', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'initializeObject', array('obj' => $obj), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'getFilters', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'isFiltersStateClean', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'hasFilters', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return $this->valueHolder50977->hasFilters();
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

        $instance->initializerbebd1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder50977) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder50977 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder50977->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, '__get', ['name' => $name], $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        if (isset(self::$publicProperties9727c[$name])) {
            return $this->valueHolder50977->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder50977;

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

        $targetObject = $this->valueHolder50977;
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
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder50977;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder50977;
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
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, '__isset', array('name' => $name), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder50977;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder50977;
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
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, '__unset', array('name' => $name), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder50977;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder50977;
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
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, '__clone', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        $this->valueHolder50977 = clone $this->valueHolder50977;
    }

    public function __sleep()
    {
        $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, '__sleep', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;

        return array('valueHolder50977');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbebd1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbebd1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbebd1 && ($this->initializerbebd1->__invoke($valueHolder50977, $this, 'initializeProxy', array(), $this->initializerbebd1) || 1) && $this->valueHolder50977 = $valueHolder50977;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder50977;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder50977;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
