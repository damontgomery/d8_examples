<?php

namespace Drupal\d8e_plugin_system\Plugin\Animal;

use Drupal\d8e_plugin_system\AnimalBase;

/**
 * A dog plugin.
 *
 * @Animal(
 *   id = "dog",
 *   label = @Translation("Dog"),
 * )
 */
class Dog extends AnimalBase {

  public function getDescription() {
    return 'A dog is a very nice and friendly animal.';
  }

}