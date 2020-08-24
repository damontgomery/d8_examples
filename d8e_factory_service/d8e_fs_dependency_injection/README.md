# D8 Examples: Factory Service with Dependency Injection

This example contains a class called `Vehicle` which takes a service and a variable when being created. There is a `VehicleFactory` service that can be used to create these vehicles by passing in the variable. This allows us to just pass in the variable bits while keeping the service dependencies injected behind the scenes.
