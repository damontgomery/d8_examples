Feature: Route and Permission example
  In order to show how a route and permission are used
  As a user
  I need to check the output on the demo page

  Scenario: Anonymous User
    Given I am on "/d8e/route-permission-demo"
    Then I should not see the text "d8e Route & Permission Demo"

  @api
  Scenario: Administrative User
    Given I am logged in as a user with the "administrator" role
    And I am on "/d8e/route-permission-demo"
    Then I should see the text "d8e Route & Permission Demo"
