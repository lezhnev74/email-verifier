<?php
namespace Tests;


use Lezhnev74\EmailVerifier\Data\Email;
use Lezhnev74\EmailVerifier\Service\SendVerificationEmail;
use Lezhnev74\EmailVerifier\Service\VerifyEmailCode;
use Tests\Implementation\Dispatcher;
use Tests\Implementation\Hasher;
use Tests\Implementation\Sender;
use Tests\Implementation\Verifier;

class FlowTest extends \PHPUnit_Framework_TestCase
{

    function test_sender_works_as_expected()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(200);

        $email = new Email('some@example.org');
        $service = new SendVerificationEmail($email, new Sender(), new Hasher());
        $service->send();
    }

    function test_verifier_works_as_expected()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(100);

        $email = new Email('some@example.org');
        $hahser = new Hasher();
        $code = $hahser->makeCodeForEmail($email);

        $service = new VerifyEmailCode($code, $email, new Verifier(), new Dispatcher());
        $service->verify();
    }
}