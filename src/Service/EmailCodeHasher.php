<?php
namespace Lezhnev74\EmailVerifier\Service;

use Lezhnev74\EmailVerifier\Data\Email;

interface EmailCodeHasher
{
    public function makeCodeForEmail(Email $email): string;
}