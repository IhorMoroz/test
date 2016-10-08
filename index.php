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

    
}