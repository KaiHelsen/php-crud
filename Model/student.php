<?php
declare(strict_types = 1);
include_once "Entity.php";

class Student extends Entity
{
    private string $name;
    private string $email;
    private string $class;
    private string $assignedTeacher;

    public function __construct(string $name, string $email, string $class, string $assignedTeacher) {
        $this->name = $name;
        $this->email = $email;
        $this->class = $class;
        $this->assignedTeacher = $assignedTeacher;
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
    public function getAssignedTeacher(): string
    {
        return $this->assignedTeacher;
    }
}