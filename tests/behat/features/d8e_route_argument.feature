Feature: Route and Argument example
  In order to show how a route and argument are used
  As a user
  I need to check the output on the demo page

  Scenario: Text demo page: behat
    Given I am on "/d8e/route-argument-text-demo/behat"
    Then I should see the text "d8e Route & Argument Text Demo: behat"
    And I should not see the text "d8e Route & Argument Text Demo: beta"

  Scenario: Text demo page: beta
    Given I am on "/d8e/route-argument-text-demo/beta"
    Then I should see the text "d8e Route & Argument Text Demo: beta"
    And I should not see the text "d8e Route & Argument Text Demo: behat"

  Scenario: User demo page: anonymous user
    Given I am on "/d8e/route-argument-user-demo/0"
    Then I should see the text "d8e Route & Argument User Demo: Anonymous"
    And I should not see the text "d8e Route & Argument User Demo: Admin"

  Scenario: User demo page: administrative user
    Given I am on "/d8e/route-argument-user-demo/1"
    Then I should see the text "d8e Route & Argument User Demo: Admin"
    And I should not see the text "d8e Route & Argument User Demo: Anonymous"
