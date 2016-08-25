# Drupal 8 Example Implementations and Reusable Patterns


## Testing
Tests are made up of Behat functional tests and PHPUnit unit tests.

### Behat functional tests

These require that a Drupal site is installed. Tests can be run from `tests/behat`. After configuring, you can run tests from that directory with the command, `vendor/bin/behat`.

### PHPUnit unit tests

These tests do not require that a Drupal site is installed. To run these tests, you can run a command such as,
`phpunit -c [your-site-install]/core/phpunit.xml.dist --group d8e`. If you are using PhpStorm, you can add the `--group d8e` to your test configuration under `Test runner options`.

The `--group d8e` will run only tests that are part of this module. This setup uses the Drupal 8 configuration file which sets up the testing environment.
