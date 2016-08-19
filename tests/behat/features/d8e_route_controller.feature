Feature: Route and Controller example
  In order to show how a route and controller are used
  As a user
  I need to check the output on the demo page

  Scenario: Demo page
    Given I am on "/d8e/route-controller-demo"
    Then I should see the text "d8e Route & Controller Demo"
