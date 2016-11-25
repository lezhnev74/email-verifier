<?php
namespace Lezhnev74\EmailVerifier\Service;

use Lezhnev74\EmailVerifier\Data\Email;

class SendVerificationEmail
{
    private $email;
    private $sender;
    private $hasher;

    public function __construct(Email $email, EmailSender $sender, EmailCodeHasher $hasher)
    {
        $this->email = $email;
        $this->sender = $sender;
        $this->hasher = $hasher;
    }

    public function send()
    {
        $code = $this->hasher->makeCodeForEmail($this->email);
        $this->sender->sendVerificationCodeToEmail($code, $this->email);
    }
}