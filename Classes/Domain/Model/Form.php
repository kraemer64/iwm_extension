<?php

namespace MyVendor\StoreInventory\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Formular extends AbstractEntity
{
    protected $firstname = '';

    protected $lastname = '';

    protected $email = '';

    protected $profilepicture = '';

    protected $password = '';

    protected $birthdate = '';

    public function __construct(string $firstname = '', string $lastname = '', string $email = '', 
                                string $profilepicture = '', string $password = '', date $birthdate = '' ): void
    {
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setEmail($email);
        $this->setProfilepicture($profilepicture);
        $this->setpassword($password);
        $this->setBirthdate($birthdate);
    }
}