# D8 Examples: Service Dependency Injection with a Service

## Find the average length

A new service is created that can average lengths. This service will check if the units passed are inches and convert them to centimeters using the injected `MeasurementConversion` service before calculating and returning the average.

To show this feature, a page is created with a controller that calculates the average length of sample values.

See, /d8e/service-dependency-injection/service-demo
