<?php

class User {
    private $name = 'Guest';
    private $surname = '';
    private $email = '';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = strip_tags($name);
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param $surname
     */
    public function setSurname($surname)
    {
        $this->surname = strip_tags($surname);
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->name . '' . $this->surname;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = strip_tags($email);
    }
}