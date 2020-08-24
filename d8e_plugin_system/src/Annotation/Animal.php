<?php

namespace Drupal\d8e_plugin_system\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a Animal annotation object.
 *
 * @Annotation
 */
class Animal extends Plugin {
  /**
   * The machine name for the animal.
   *
   * @var string
   */
  public $id;

  /**
   * The label for the plugin.
   *
   * @ingroup plugin_translatable
   *
   * @var \Drupal\Core\Annotation\Translation
   */
  public $label;

}
