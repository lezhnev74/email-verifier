<?php
namespace Lezhnev74\EmailVerifier\Service;

use Lezhnev74\EmailVerifier\Data\Email;

interface EmailCodeVerifier
{
    public function verifyCodeFromEmail(string $code, Email $email): bool;
}