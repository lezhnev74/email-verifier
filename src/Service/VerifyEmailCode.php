<?php

namespace Lezhnev74\EmailVerifier\Service;

use Lezhnev74\EmailVerifier\Data\Email;
use Lezhnev74\EmailVerifier\Event\EmailVerified;

class VerifyEmailCode
{
    private $verifier;
    private $dispatcher;

    public function __construct(EmailCodeVerifier $verifier, EventDispatcher $dispatcher)
    {
        $this->verifier = $verifier;
        $this->dispatcher = $dispatcher;
    }

    public function verify(string $code, Email $email)
    {
        if ($this->verifier->verifyCodeFromEmail($code, $email)) {
            $this->dispatcher->fireEmaiLVerified(new EmailVerified($email));
        }
    }

}