Feature: Service Override
  In order to show that the default service is used
  As a user
  I need to check the output on the demo page

  @api
  Scenario: Default service
    Given I run drush "pm-uninstall" "d8e_mock_service -y"
    And I am on "/d8e/service-override-demo"
    Then I should see the text "d8e Service Override: Real Service"

  @api
  Scenario: Mock service
    Given I run drush "pm-enable" "d8e_mock_service -y"
    And I am on "/d8e/service-override-demo"
    Then I should see the text "d8e Service Override: Mock Service"
