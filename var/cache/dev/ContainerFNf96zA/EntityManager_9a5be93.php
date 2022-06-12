<?php

namespace ContainerFNf96zA;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd32f7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer04397 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3e562 = [
        
    ];

    public function getConnection()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getConnection', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getMetadataFactory', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getExpressionBuilder', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'beginTransaction', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getCache', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'transactional', array('func' => $func), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'wrapInTransaction', array('func' => $func), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'commit', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->commit();
    }

    public function rollback()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'rollback', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getClassMetadata', array('className' => $className), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'createQuery', array('dql' => $dql), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'createNamedQuery', array('name' => $name), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'createQueryBuilder', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'flush', array('entity' => $entity), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'clear', array('entityName' => $entityName), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->clear($entityName);
    }

    public function close()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'close', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->close();
    }

    public function persist($entity)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'persist', array('entity' => $entity), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'remove', array('entity' => $entity), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'refresh', array('entity' => $entity), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'detach', array('entity' => $entity), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'merge', array('entity' => $entity), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'contains', array('entity' => $entity), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getEventManager', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getConfiguration', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'isOpen', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getUnitOfWork', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getProxyFactory', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'initializeObject', array('obj' => $obj), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'getFilters', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'isFiltersStateClean', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'hasFilters', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return $this->valueHolderd32f7->hasFilters();
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

        $instance->initializer04397 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd32f7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd32f7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd32f7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, '__get', ['name' => $name], $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        if (isset(self::$publicProperties3e562[$name])) {
            return $this->valueHolderd32f7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd32f7;

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

        $targetObject = $this->valueHolderd32f7;
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
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd32f7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd32f7;
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
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, '__isset', array('name' => $name), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd32f7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd32f7;
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
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, '__unset', array('name' => $name), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd32f7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd32f7;
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
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, '__clone', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        $this->valueHolderd32f7 = clone $this->valueHolderd32f7;
    }

    public function __sleep()
    {
        $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, '__sleep', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;

        return array('valueHolderd32f7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer04397 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer04397;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer04397 && ($this->initializer04397->__invoke($valueHolderd32f7, $this, 'initializeProxy', array(), $this->initializer04397) || 1) && $this->valueHolderd32f7 = $valueHolderd32f7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd32f7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd32f7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
