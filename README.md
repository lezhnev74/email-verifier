#Overview

The validation flow looks like this:

1. User claims he owns the email;
2. Library prepares an email to be sent to given email (message contains a link);
3. Library sends an email;
4. User opens it and clicks the link;
5. User is redirected to special secure URL which is only known by email owner (the link);
6. System verifies that email is known by the user and fires an event "Email is verified";
7. It is code's responsibility to handle the event and do whatever needed to be done with verified email (complete signup or whatever);

## Abstracted
The library is framework agnostic and abstracted. To make it work I will provide additional package for frameworks
to make it work.


# Domain
Package offers two services: one for sending emails and one for verifying the recieved code

It uses few Intefaces - they are to be implemented in integration package.