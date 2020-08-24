<?php

namespace Drupal\d8e_fs_dependency_injection\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\d8e_fs_dependency_injection\VehicleFactory;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FactoryServiceDependencyInjectionController extends ControllerBase {

  /**
   * @var \Drupal\d8e_fs_dependency_injection\VehicleFactory
   */
  protected $vehicleFactory;

  /**
   * {@inheritdoc}
   */
  public function __construct(VehicleFactory $vehicle_factory) {
    $this->vehicleFactory = $vehicle_factory;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('d8e_fs_dependency_injection.vehicle_factory')
    );
  }

  /**
   * Example controller method that generates a page response.
   *
   * @return array
   */
  public function demo() {

    $vehicle = $this->vehicleFactory->createVehicle('Dan Motor Company');

    $color_preferences = [
      'blue',
      'yellow',
    ];

    $color_matches = [];

    foreach ($color_preferences as $color_preference) {
      if ($vehicle->isPaintColorAvailable($color_preference)) {
        $color_matches[] = $color_preference;
      }
    }

    return [
      '#markup' => 'Available colors that match preferences: ' . implode(', ', $color_matches),
    ];
  }
}