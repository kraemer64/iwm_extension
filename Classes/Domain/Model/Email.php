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

    public function setAdress(string $firstname): void
    {
        $this->adress = $adress;
    }

    public function getAdress():string
    {
        return $this->adress;
    }

    public function setTopic(string $topic): void
    {
        $this->topic = $topic;
    }

    public function getTopic():string
    {
        return $this->topic;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getMessage():string
    {
        return $this->message;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getPassword():string
    {
        return $this->password;
    }

    public function createPassword():void
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); 
        $alphaLength = strlen($alphabet) - 1; 

        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }

        $this->password = implode($pass)
    }
}