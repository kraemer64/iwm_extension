<?php

namespace MyVendor\IwmExtension\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Formular extends AbstractEntity
{
    protected $firstname = '';

    protected $lastname = '';

    protected $email = '';

    protected $profilepicture = '';

    protected $password = '';

    protected $birthdate;

    public function __construct(string $firstname = '', string $lastname = '', string $email = '', 
                                string $profilepicture = '', string $password = '', date $birthdate)
    {
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setEmail($email);
        $this->setProfilepicture($profilepicture);
        $this->setPassword($password);
        $this->setBirthdate($birthdate);
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getFirstname():string
    {
        return $this->firstname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getLastname():string
    {
        return $this->lastname;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function setProfilepicture(string $profilepicture): void
    {
        $this->profilePicture = $profilepicture;
    }

    public function getProfilepicture():string
    {
        return $this->profilepicture;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getPassword():string
    {
        return $this->password;
    }

    public function setBirthdate(date $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    public function getPassword():date
    {
        return $this->birthdate;
    }
}