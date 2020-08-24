<?php

namespace Drupal\d8e_plugin_system\Plugin\Animal;

use Drupal\d8e_plugin_system\AnimalBase;

/**
 * A pika plugin.
 *
 * @Animal(
 *   id = "pika",
 *   label = @Translation("Pika"),
 * )
 */
class Pika extends AnimalBase {

  public function getDescription() {
    return 'A pika is a small mouse like animal found in the Americas.';
  }

}