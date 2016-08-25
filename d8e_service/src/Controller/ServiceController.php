<?php

/**
 * @file
 * Contains \Drupal\d8e_service\Controller\ServiceController.
 */

namespace Drupal\d8e_service\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\d8e_service\DemoService;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ServiceController extends ControllerBase {

  /**
   * @var \Drupal\d8e_service\DemoService
   */
  protected $service;

  /**
   * {@inheritdoc}
   */
  public function __construct(DemoService $service) {
    $this->service = $service;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('d8e_service.demo')
    );
  }

  /**
   * Example controller method that generates a page response.
   *
   * @return array
   */
  public function demo() {
    $demo_data = $this->service->getDemoData();
    return [
      '#markup' => $demo_data['response'],
    ];
  }
}