<?php

namespace Tests\Implementation;

use Lezhnev74\EmailVerifier\Event\EmailVerified;
use Lezhnev74\EmailVerifier\Service\EventDispatcher;

class Dispatcher implements EventDispatcher
{
    public function fireEmailVerified(EmailVerified $event)
    {
        // as a test - it will throw an exception
        throw new \Exception("EVENT", 100);
    }

}