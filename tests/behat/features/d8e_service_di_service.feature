Feature: Service Dependency Injection with Services
  In order to show that the services can be used by other services
  As a user
  I need to check the output on the demo page

  Scenario: Demo page
    Given I am on "/d8e/service-dependency-injection/service-demo"
    Then I should see the text "d8e Service Dependency Injection with a Service Demo"
    Then I should see the text "6.985 cm"
