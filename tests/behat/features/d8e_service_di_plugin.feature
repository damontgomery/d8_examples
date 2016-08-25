Feature: Service Dependency Injection with a Plugin
  In order to show that the a plugin can use a service
  As a user
  I need to check the output on the demo page

  @api
  Scenario: Demo page with block disabled
    Given I run drush "pm-uninstall" "d8e_service_di_plugin -y"
    And I am on "/"
    Then I should not see the text "d8e Service Dependency Injection with Plugin"
    Then I should not see the text "10 degrees C equals 50 degrees F"

  @api
  Scenario: Demo page with block enabled
    Given I run drush "pm-enable" "d8e_service_di_plugin -y"
    And I am on "/"
    Then I should see the text "d8e Service Dependency Injection with Plugin"
    Then I should see the text "10 degrees C equals 50 degrees F"
