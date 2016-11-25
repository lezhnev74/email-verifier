<?php
namespace Lezhnev74\EmailVerifier\Service;

use Lezhnev74\EmailVerifier\Event\EmailVerified;

interface EventDispatcher
{
    public function fireEmailVerified(EmailVerified $event);
}