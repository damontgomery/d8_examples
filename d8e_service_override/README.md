# D8 Examples: Service Override

There are several ways to override services in Drupal 8.

In some cases, you may have development mocks for services that connect to other systems. In those cases, you may want to create development modules that when enabled, replace those services with mock services.

## Mock service

In this example, we define a simple service in this module and a mock service in the `d8e_mock_service` submodule. When the submodule is enabled, the mock service is used in place of the real service.

The `ServiceModifierInterface` pattern is used to override the service container definition for the service. See, d8e_mock_service/src/D8eMockServiceServiceProvider.php

These services both share an interface and define a `getName` method.

To demonstrate this feature, a basic page is created using a controller and the `getName` method is called to show which service is being used at that time.

See, /d8e/service-override-demo