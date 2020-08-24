<?php

namespace Drupal\d8e_plugin_system;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

class AnimalPluginManager extends DefaultPluginManager {

  /**
   * This is copied mostly from the DefaultPluginManager.
   *
   * @param \Traversable $namespaces
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct(
      'Plugin/Animal',
      $namespaces,
      $module_handler,
      'Drupal\d8e_plugin_system\AnimalInterface',
      'Drupal\d8e_plugin_system\Annotation\Animal');

    $this->alterInfo('animal');
    $this->setCacheBackend($cache_backend, 'animal');
  }

}
