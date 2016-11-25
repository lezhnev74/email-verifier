<?php
namespace Lezhnev74\EmailVerifier\Service;

use Lezhnev74\EmailVerifier\Data\Email;

interface EmailSender
{
    public function sendVerificationCodeToEmail(string $code, Email $email);
}