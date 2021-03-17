<?php
declare(strict_types = 1);
include_once "Entity.php";

class Student extends Entity
{
    private string $firstname;
    private string $lastname;
    private string $email;


    public function __construct(string $fitstname, string $lastname, string $email)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;

    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}