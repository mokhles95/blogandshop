<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'payment.paypal.client' shared service.

return $this->services['payment.paypal.client'] = new \JMS\Payment\PaypalBundle\Client\Client(${($_ = isset($this->services['payment.paypal.authentication_strategy.token']) ? $this->services['payment.paypal.authentication_strategy.token'] : ($this->services['payment.paypal.authentication_strategy.token'] = new \JMS\Payment\PaypalBundle\Client\Authentication\TokenAuthenticationStrategy('your_api_username', 'your_api_password', 'your_api_signature'))) && false ?: '_'}, false);
