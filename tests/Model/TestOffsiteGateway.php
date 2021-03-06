<?php

namespace SilverStripe\Omnipay\Tests\Model;

use SilverStripe\Dev\TestOnly;
use Omnipay\Common\AbstractGateway;

/**
 * @method \Omnipay\Common\Message\RequestInterface authorize(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface completeAuthorize(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface capture(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface refund(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface void(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface createCard(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface updateCard(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface deleteCard(array $options = array())
 */
class TestOffsiteGateway extends AbstractGateway implements TestOnly
{
    public function getName()
    {
        return 'TestOffsite';
    }

    public function getDefaultParameters()
    {
        return [];
    }

    public function purchase(array $parameters = [])
    {
    }

    public function completePurchase(array $options = [])
    {
    }

    public function __call($name, $arguments)
    {
    }
}
