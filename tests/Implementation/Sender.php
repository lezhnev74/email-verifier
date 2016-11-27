<?php

namespace Tests\Implementation;

use Lezhnev74\EmailVerifierLaravel\Laravel\Mail\UserNeedsVerifyEmail;
use Lezhnev74\EmailVerifier\Data\Email;
use Lezhnev74\EmailVerifier\Service\EmailSender;

class Sender implements EmailSender
{
    public function sendVerificationCodeToEmail(string $code, Email $email)
    {
        // as a test - it will throw an exception
        throw new \Exception("EVENT", 200);
    }

}