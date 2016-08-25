Feature: Service Dependency Injection with Controllers
  In order to show that the services can be used by controllers
  As a user
  I need to check the output on the demo page

  Scenario: Demo page
    Given I am on "/d8e/service-dependency-injection/controller-demo"
    Then I should see the text "d8e Service Dependency Injection with Controller"
    Then I should see the text "50 degrees C equals @122 dregress F"
