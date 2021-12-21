<?php

namespace MyVendor\IwmExtension\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Email extends AbstractEntity
{
    protected $adress = '';

    protected $topic = '';

    protected $message = '';

    protected $password = '';

    public function __construct(string $adress = '', string $topic = 'Changed password', 
                                string $message = 'Here is your new password: ', string $password = '')
    {
        $this->setAdress($adress);
        $this->setTopic($topic);
        $this->setMessage($message);
        $this->createPassword($password);
    }
}