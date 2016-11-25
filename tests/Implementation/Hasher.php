<?php

namespace Tests\Implementation;

use Lezhnev74\EmailVerifier\Data\Email;
use Lezhnev74\EmailVerifier\Service\EmailCodeHasher;

class Hasher implements EmailCodeHasher
{

    public function makeCodeForEmail(Email $email): string
    {
        return md5($email->getEmail() . "__saaalt");
    }

}