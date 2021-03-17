<?php
declare(strict_types = 1);
include_once "Entity.php";

class Student extends Entity
{
    private string $name;
    private string $email;
    private string $class;
    private string $teacher;

    public function __construct(string $name, string $email, string $class, string $teacher) {
        $this->name = $name;
        $this->email = $email;
        $this->class = $class;
        $this->teacher = $teacher;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @return string
     */
    public function getTeacher(): string
    {
        return $this->teacher;
    }

}