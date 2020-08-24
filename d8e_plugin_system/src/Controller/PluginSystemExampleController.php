<?php

namespace Drupal\d8e_plugin_system\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\d8e_plugin_system\AnimalPluginManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PluginSystemExampleController extends ControllerBase {

  /**
   * @var \Drupal\d8e_plugin_system\AnimalPluginManager
   */
  protected $animalPluginManager;

  /**
   * {@inheritdoc}
   */
  public function __construct(AnimalPluginManager $animal_plugin_manager) {
    $this->animalPluginManager = $animal_plugin_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.d8e_animal')
    );
  }

  /**
   * Example controller method that generates a page response.
   *
   * @return array
   */
  public function demo() {
    $output = '';

    foreach ($this->animalPluginManager->getDefinitions() as $animal_plugin_id => $animal_plugin_definition) {
      /* @var \Drupal\d8e_plugin_system\AnimalInterface $animal_plugin */
      $animal_plugin = $this->animalPluginManager->createInstance($animal_plugin_id);

      $output .= '<p>' . $animal_plugin->getLabel() . ': ' . $animal_plugin->getDescription() . '</p>';
    }

    return [
      '#markup' => $output,
    ];
  }
}