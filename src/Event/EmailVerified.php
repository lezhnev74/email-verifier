<?php
namespace Lezhnev74\EmailVerifier\Event;

use Lezhnev74\EmailVerifier\Data\Email;

class EmailVerified
{
    private $email;

    public function __construct(Email $email)
    {
        $this->email = $email;
    }

    /**
     * @return Email
     */
    public function getEmail(): Email
    {
        return $this->email;
    }


}
