<?php

/**
 * @file
 * Contains \Drupal\d8e_service_di_controller\Controller\ServiceDIControllerController.
 */

namespace Drupal\d8e_service_di_controller\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\d8e_service_dependency_injection\MeasurementConversion;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ServiceDIControllerController extends ControllerBase {

  /**
   * @var \Drupal\d8e_service_dependency_injection\MeasurementConversion
   */
  protected $measurementConversion;

  /**
   * {@inheritdoc}
   */
  public function __construct(MeasurementConversion $measurementConversion) {
    $this->measurementConversion = $measurementConversion;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('d8e_service_dependency_injection.measurement_conversion')
    );
  }

  /**
   *
   */
  public function demo() {
    $celcius = 50;
    $fahrenheit = $this->measurementConversion->celsiusToFahrenheit($celcius);

    return [
      '#markup' => t('d8e Service Dependency Injection with Controller: @celcius degrees C equals @fahrenheit dregress F', ['@celcius' => $celcius, @fahrenheit => $fahrenheit])
    ];
  }
}
