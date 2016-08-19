# Running Behat tests

## Installation
- Create a drush alias file as `local.aliases.drushrc.php`
- Copy `example.behat.yml` as `behat.yml` and add your `drush alias` and `base URL`
- Run `composer install`

## Run tests
- Open a new terminal and run `vendor/bin/phantomjs --webdriver=4444` to start the PhantomJS headless browser
- In the original terminal, run `vendor/bin/behat`

## Notes
If you want to override additional settings found in `defaults.behat.yml`, you can add the same settings in your local `behat.yml` file.
