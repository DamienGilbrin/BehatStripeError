@stripe @javascript
Feature: Stripe error

  Scenario: Reproduce stripe error
    Given I go to stripe payment
    When I fill "4242424242424242" on credit card number field