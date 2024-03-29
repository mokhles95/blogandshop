<?php

namespace Proxies\__CG__\JMS\Payment\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Credit extends \JMS\Payment\CoreBundle\Entity\Credit implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'attentionRequired', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'createdAt', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'creditedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'creditingAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'id', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'payment', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'paymentInstruction', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'transactions', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'reversingAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'state', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'targetAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'attentionRequired', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'createdAt', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'creditedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'creditingAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'id', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'payment', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'paymentInstruction', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'transactions', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'reversingAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'state', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'targetAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\Credit' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Credit $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function addTransaction(\JMS\Payment\CoreBundle\Entity\FinancialTransaction $transaction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTransaction', [$transaction]);

        return parent::addTransaction($transaction);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreditedAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreditedAmount', []);

        return parent::getCreditedAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreditingAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreditingAmount', []);

        return parent::getCreditingAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreditTransaction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreditTransaction', []);

        return parent::getCreditTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPayment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPayment', []);

        return parent::getPayment();
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentInstruction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaymentInstruction', []);

        return parent::getPaymentInstruction();
    }

    /**
     * {@inheritDoc}
     */
    public function getPendingTransaction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPendingTransaction', []);

        return parent::getPendingTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function getReverseCreditTransactions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReverseCreditTransactions', []);

        return parent::getReverseCreditTransactions();
    }

    /**
     * {@inheritDoc}
     */
    public function getReversingAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReversingAmount', []);

        return parent::getReversingAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function getTargetAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTargetAmount', []);

        return parent::getTargetAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getTransactions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransactions', []);

        return parent::getTransactions();
    }

    /**
     * {@inheritDoc}
     */
    public function isAttentionRequired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAttentionRequired', []);

        return parent::isAttentionRequired();
    }

    /**
     * {@inheritDoc}
     */
    public function isIndependent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isIndependent', []);

        return parent::isIndependent();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttentionRequired($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttentionRequired', [$boolean]);

        return parent::setAttentionRequired($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setPayment(\JMS\Payment\CoreBundle\Model\PaymentInterface $payment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPayment', [$payment]);

        return parent::setPayment($payment);
    }

    /**
     * {@inheritDoc}
     */
    public function hasPendingTransaction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPendingTransaction', []);

        return parent::hasPendingTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreditedAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreditedAmount', [$amount]);

        return parent::setCreditedAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreditingAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreditingAmount', [$amount]);

        return parent::setCreditingAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function setReversingAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReversingAmount', [$amount]);

        return parent::setReversingAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', [$state]);

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function onPreSave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPreSave', []);

        return parent::onPreSave();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

}
