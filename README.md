# Drupal 8 Example Implementations and Reusable Patterns

This set of example modules provide a template for many of the new Drupal 8 patterns.

Each example is intended to be very simple so that the core concepts are clear. Most examples come with an example page (except for one which comes with an example block) where you can view the output of the example or trigger a debug session with XDebug.

To try an example, you can enable any of the submodules individually.

If you would like to enable all of the examples, you can enable this module by itself which is dependent on the other modules.

Testing examples are also provided. These cover both functional testing with Behat and unit testing with PhpUnit. This hopefully provides a good reference for implementing testing without Drupal 8 as well.

## Testing
Tests are made up of Behat functional tests and PHPUnit unit tests.

### Behat functional tests

_These require that a Drupal site is installed._

Instructions for running tests using Lando are included in `tests/README.md`.

### PHPUnit unit tests

These tests do not require that a Drupal site is installed. To run these tests, you can run a command such as,
`phpunit -c [your-site-install]/core/phpunit.xml.dist --group d8e`. If you are using PhpStorm, you can add the `--group d8e` to your test configuration under `Test runner options`.

The `--group d8e` will run only tests that are part of this module. This setup uses the Drupal 8 configuration file which sets up the testing environment.

Instructions for running tests using Lando are included in `tests/README.md`.
