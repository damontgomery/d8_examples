<?php

namespace Drupal\d8e_plugin_system;

use Drupal\Core\Plugin\ContextAwarePluginBase;

abstract class AnimalBase extends ContextAwarePluginBase implements AnimalInterface {

  public function getID() {
    return $this->pluginDefinition['id'];
  }

  public function getLabel() {
    return $this->pluginDefinition['label'];
  }

}
