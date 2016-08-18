<?php

/**
 * @file
 * Contains \Drupal\d8e_real_service\Controller\ServiceOverrideController.
 */

namespace Drupal\d8e_real_service\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\d8e_real_service\ServiceOverrideInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ServiceOverrideController extends ControllerBase {

  /**
   * @var \Drupal\d8e_real_service\ServiceOverrideInterface
   */
  protected $service;

  /**
   * {@inheritdoc}
   */
  public function __construct(ServiceOverrideInterface $service) {
    $this->service = $service;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('d8e_service_override.real')
    );
  }

  public function demo() {
    return [
      '#markup' => $this->service->getName()
    ];
  }
}