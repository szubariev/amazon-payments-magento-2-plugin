<?php

namespace Amazon\Payment\Domain;

class AmazonAuthorizationResponse extends AbstractAmazonAuthorizationResponse
{
    protected $resultKey = 'AuthorizeResult';

    /**
     * {@inheritDoc}
     */
    protected function getResultKey()
    {
        return $this->resultKey;
    }
}