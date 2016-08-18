<?php

/**
 * @file
 * Contains \Drupal\d8e_mock_service\D8eMockServiceServiceProvider.
 */

namespace Drupal\d8e_mock_service;

use Drupal\Core\DependencyInjection\ServiceModifierInterface;
use Drupal\Core\DependencyInjection\ContainerBuilder;

/**
 * Override the service used for d8e_service_override.real with d8e_service_override.mock.
 * The name of this class must be the module name in CamelCase with ServiceProvider appended.
 */
class D8eMockServiceServiceProvider implements ServiceModifierInterface {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    # Set the definition for d8e_service_override.real to that of d8e_service_override.mock
    $container->setDefinition(
      'd8e_service_override.real',
      $container->getDefinition('d8e_service_override.mock')
    );
  }
}
