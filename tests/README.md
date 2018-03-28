# Running Behat tests

## With Lando
With Lando, you can easily run Behat tests from this project.

### Installation
 This section of the readme will provide a few steps on getting Behat working with Lando.

For details on configuring Lando for Behat, some information is available here, [https://docs.devwithlando.io/tutorials/lando-pantheon-workflow.html](https://docs.devwithlando.io/tutorials/lando-pantheon-workflow.html).

#### Add Behat to your project with Composer

`composer require --dev behat/behat:">=3.1 <3.4" behat/mink:"~1.7" behat/mink-selenium2-driver:"^1.3.1"`

These requirements were taken from Acquia BLT. You may be able to use a different set of dependencies.

#### Modify Lando configuration

Modify your `.lando.yml` configuration file.

Add something like the following. You can get the base_url and root using `lando info`.

```
services:
  appserver:
    overrides:
      services:
        environment:
          BEHAT_PARAMS: '{"extensions" : {"Behat\\MinkExtension" : {"base_url" : "http://d-8-app.lndo.site/"}, "Drupal\\DrupalExtension" : {"drush" :   {  "root":  "/app/docroot" }}}}'
tooling:
  behat:
    service: appserver
    cmd: /app/vendor/bin/behat
```

Restart Lando

`lando restart`

### Run tests
_You may need to modify the path to the behat configuration file if you have installed your Drupal 8 site and this module in different locations._

Open a new terminal and run `lando behat --config=/app/docroot/modules/custom/d8_examples/tests/behat/defaults.behat.yml` 

# Running PhpUnit Tests

## With Lando
With Lando, you can easily run PhpUnit tests from this project.

### Installation
 This section of the readme will provide a few steps on getting PhpUnit working with Lando.

#### Add PhpUnit to your project with Composer

`composer require --dev phpunit/phpunit:"^4.8"`

These requirements were taken from Acquia BLT. You may be able to use a different set of dependencies.

#### Modify Lando configuration

Modify your `.lando.yml` configuration file.

Add something like the following. You can get the base_url and root using `lando info`.

```
tooling:
  phpunit:
    service: appserver
    cmd: /app/vendor/bin/phpunit
```

Restart Lando

`lando restart`

### Run tests
_You may need to modify the path to the behat configuration file if you have installed your Drupal 8 site and this module in different locations._

Open a new terminal and run `lando phpunit -c /app/docroot/core/phpunit.xml.dist --group d8e`

