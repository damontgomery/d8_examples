Feature: Service
  In order to show that a service is used
  As a user
  I need to check the output on the demo page

  Scenario: Demo service
    Given I am on "/d8e/service-demo"
    Then I should see the text "d8e Service"
