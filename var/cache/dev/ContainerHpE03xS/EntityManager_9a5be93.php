<?php

namespace ContainerHpE03xS;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc25d9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerda94e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf7fcb = [
        
    ];

    public function getConnection()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getConnection', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getMetadataFactory', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getExpressionBuilder', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'beginTransaction', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getCache', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getCache();
    }

    public function transactional($func)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'transactional', array('func' => $func), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'wrapInTransaction', array('func' => $func), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'commit', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->commit();
    }

    public function rollback()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'rollback', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getClassMetadata', array('className' => $className), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'createQuery', array('dql' => $dql), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'createNamedQuery', array('name' => $name), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'createQueryBuilder', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'flush', array('entity' => $entity), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'clear', array('entityName' => $entityName), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->clear($entityName);
    }

    public function close()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'close', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->close();
    }

    public function persist($entity)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'persist', array('entity' => $entity), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'remove', array('entity' => $entity), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'refresh', array('entity' => $entity), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'detach', array('entity' => $entity), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'merge', array('entity' => $entity), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getRepository', array('entityName' => $entityName), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'contains', array('entity' => $entity), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getEventManager', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getConfiguration', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'isOpen', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getUnitOfWork', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getProxyFactory', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'initializeObject', array('obj' => $obj), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'getFilters', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'isFiltersStateClean', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'hasFilters', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return $this->valueHolderc25d9->hasFilters();
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

        $instance->initializerda94e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc25d9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc25d9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc25d9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, '__get', ['name' => $name], $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        if (isset(self::$publicPropertiesf7fcb[$name])) {
            return $this->valueHolderc25d9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc25d9;

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

        $targetObject = $this->valueHolderc25d9;
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
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc25d9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc25d9;
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
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, '__isset', array('name' => $name), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc25d9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc25d9;
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
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, '__unset', array('name' => $name), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc25d9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc25d9;
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
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, '__clone', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        $this->valueHolderc25d9 = clone $this->valueHolderc25d9;
    }

    public function __sleep()
    {
        $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, '__sleep', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;

        return array('valueHolderc25d9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerda94e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerda94e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerda94e && ($this->initializerda94e->__invoke($valueHolderc25d9, $this, 'initializeProxy', array(), $this->initializerda94e) || 1) && $this->valueHolderc25d9 = $valueHolderc25d9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc25d9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc25d9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
