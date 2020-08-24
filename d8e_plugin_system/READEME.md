# Example of creating a plugin system.

This plugin system is how things like Blocks in Drupal are created and discovered.

The `Animal.php` annotation defines the annotation parts of the plugin and the `AnimalInterface` and `AnimalBase` define how the plugins should be structured, such as functions implementations for each plugin.

The `AnimalPluginManger.php` is a service that registers the plugins with the Drupal system.

In this example, we have all of our plugins in the same module, but plugins from all modules will be included. This is a great option if you want to allow other modules to define plugins.
