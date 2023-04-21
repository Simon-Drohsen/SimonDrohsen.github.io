<?php
class customer
{
    protected $customerId;
    protected $firstname;
    protected $surname;

    public function getcustomerId()
    {
        return $this->customerId;
    }


    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }
}