<?php

use Behat\Mink\Element\ElementInterface;
use Behat\MinkExtension\Context\MinkAwareContext;
use Behat\MinkExtension\Context\MinkContext;

class StripeContext extends MinkContext implements MinkAwareContext
{
    public function visit($page) {
        $host = $this->getMinkParameter('base_url');
        parent::visit($host . $page);
    }

    /**
     * @Given /^I go to stripe payment$/
     */
    public function stripePaymentPage()
    {
        $this->visit('/');
    }

    /**
     * @When /^I fill "(.*)" on credit card number field$/
     * @param $creditCardNumber
     *
     * @throws Exception
     */
    public function iFillCreditCardNumber($creditCardNumber)
    {
        $session = $this->getMink()->getSession();
        $session->switchToIFrame('__privateStripeFrame3');

        $dom = $session->getPage();
        $input = $dom->findField('cardnumber');

        if (!$input) {
            throw new \Exception('Input not found');
        }

        $input->setValue($creditCardNumber);

        sleep(10);
    }
}
