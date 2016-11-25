<?php

namespace Tests\Implementation;

use Lezhnev74\EmailVerifier\Data\Email;
use Lezhnev74\EmailVerifier\Service\EmailCodeVerifier;

class Verifier implements EmailCodeVerifier
{
    function verifyCodeFromEmail(string $code, Email $email): bool
    {
        return $code == $this->hash($email);
    }

    private function hash(Email $email)
    {
        return md5($email->getEmail() . "__saaalt");
    }
}