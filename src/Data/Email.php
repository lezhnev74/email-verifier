<?php

namespace Lezhnev74\EmailVerifier\Data;

class Email
{
    private $email;

    public function __construct(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidEmail();
        }

        $this->email = $email;
    }


    public function getEmail()
    {
        return $this->email;
    }


}