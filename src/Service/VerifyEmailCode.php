<?php

namespace Lezhnev74\EmailVerifier\Service;

use Lezhnev74\EmailVerifier\Data\Email;
use Lezhnev74\EmailVerifier\Event\EmailVerified;

class VerifyEmailCode
{
    private $code;
    private $email;
    private $verifier;
    private $dispatcher;

    public function __construct(string $code, Email $email, EmailCodeVerifier $verifier, EventDispatcher $dispatcher)
    {
        $this->code = $code;
        $this->email = $email;
        $this->verifier = $verifier;
        $this->dispatcher = $dispatcher;
    }

    public function verify()
    {
        if ($this->verifier->verifyCodeFromEmail($this->code, $this->email)) {
            $this->dispatcher->fireEmaiLVerified(new EmailVerified($this->email));
        }
    }

}