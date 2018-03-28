# Drupal 8 Example Implementations and Reusable Patterns

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
