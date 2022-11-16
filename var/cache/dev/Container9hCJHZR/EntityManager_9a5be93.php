<?php

namespace Container9hCJHZR;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc1d63 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf12cf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbde8d = [
        
    ];

    public function getConnection()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getConnection', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getMetadataFactory', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getExpressionBuilder', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'beginTransaction', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getCache', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'transactional', array('func' => $func), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'commit', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->commit();
    }

    public function rollback()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'rollback', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getClassMetadata', array('className' => $className), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'createQuery', array('dql' => $dql), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'createNamedQuery', array('name' => $name), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'createQueryBuilder', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'flush', array('entity' => $entity), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'clear', array('entityName' => $entityName), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->clear($entityName);
    }

    public function close()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'close', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->close();
    }

    public function persist($entity)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'persist', array('entity' => $entity), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'remove', array('entity' => $entity), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'refresh', array('entity' => $entity), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'detach', array('entity' => $entity), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'merge', array('entity' => $entity), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'contains', array('entity' => $entity), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getEventManager', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getConfiguration', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'isOpen', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getUnitOfWork', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getProxyFactory', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'initializeObject', array('obj' => $obj), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'getFilters', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'isFiltersStateClean', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'hasFilters', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return $this->valueHolderc1d63->hasFilters();
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

        $instance->initializerf12cf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc1d63) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc1d63 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc1d63->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, '__get', ['name' => $name], $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        if (isset(self::$publicPropertiesbde8d[$name])) {
            return $this->valueHolderc1d63->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1d63;

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

        $targetObject = $this->valueHolderc1d63;
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
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1d63;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc1d63;
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
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, '__isset', array('name' => $name), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1d63;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc1d63;
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
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, '__unset', array('name' => $name), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1d63;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc1d63;
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
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, '__clone', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        $this->valueHolderc1d63 = clone $this->valueHolderc1d63;
    }

    public function __sleep()
    {
        $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, '__sleep', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;

        return array('valueHolderc1d63');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf12cf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf12cf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf12cf && ($this->initializerf12cf->__invoke($valueHolderc1d63, $this, 'initializeProxy', array(), $this->initializerf12cf) || 1) && $this->valueHolderc1d63 = $valueHolderc1d63;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc1d63;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc1d63;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
