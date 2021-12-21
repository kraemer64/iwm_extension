<?php

namespace MyVendor\IwmExtension\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Email extends AbstractEntity
{
    protected $adress = '';

    public function __construct(string $adress = '')
    {
        $this->setEmail($adress);
    }

    public function setAdress(string $firstname): void
    {
        $this->adress = $adress;
    }

    public function getAdress():string
    {
        return $this->adress;
    }
}