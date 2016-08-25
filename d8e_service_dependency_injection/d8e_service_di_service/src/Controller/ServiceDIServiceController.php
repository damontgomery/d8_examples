<?php

/**
 * @file
 * Contains \Drupal\d8e_service_di_service\Controller\ServiceDIServiceController.
 */

namespace Drupal\d8e_service_di_service\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\d8e_service_di_service\DemoService;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ServiceDIServiceController extends ControllerBase {

  /**
   * @var \Drupal\d8e_service_di_service\DemoService
   */
  protected $demoService;

  /**
   * {@inheritdoc}
   */
  public function __construct(DemoService $demoService) {
    $this->demoService = $demoService;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('d8e_service_di_service.demo')
    );
  }

  public function demo() {
    $samples = [1,2,4,3,2,1,4,5];
    $units = 'in';
    $average_in_cm = $this->demoService->getAverageCM($samples, $units);

    return [
      '#markup' => t('d8e Service Dependency Injection with a Service Demo: @average cm', ['@average' => $average_in_cm])
    ];
  }
}
