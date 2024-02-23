<?php
require_once 'src/Address.php';
class User implements Address
{
    public string $firstName;
    public string $lastName;
    public string $addressStreet;
    public string $postcode;
    public string $email;
    public string $nameLine;
    public string $addressLine;
    public function __construct(string $firstName, string $lastName, string $addressStreet, string $postcode, string $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->addressStreet = $addressStreet;
        $this->postcode = $postcode;
        $this->email = $email;
        $this->nameLine = $this->lastName . ', ' . $this->firstName;
        $this->addressLine  = $this->addressStreet . ' ' . $this->postcode;
    }

    public function getAddress(): string
    {
       return '<p>' . $this->nameLine . '</br>' . $this->addressLine . '</p>';
    }

}