<?php
namespace Lezhnev74\EmailVerifier\Service;

use Lezhnev74\EmailVerifier\Data\Email;

class SendVerificationEmail
{
    private $sender;
    private $hasher;

    public function __construct(EmailSender $sender, EmailCodeHasher $hasher)
    {
        $this->sender = $sender;
        $this->hasher = $hasher;
    }

    public function send(Email $email)
    {
        $code = $this->hasher->makeCodeForEmail($email);
        $this->sender->sendVerificationCodeToEmail($code, $email);
    }
}