<?php
 require_once 'src/User.php';
class Customer extends User
{
    public function getAddress(): string
    {
        return '<p>' . $this->nameLine . '</br>' . $this->addressLine . '</p>';
    }
}