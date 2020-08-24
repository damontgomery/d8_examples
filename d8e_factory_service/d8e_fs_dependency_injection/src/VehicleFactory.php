<?php

namespace Drupal\d8e_fs_dependency_injection;

use Drupal\d8e_factory_service\Painter;

class VehicleFactory {

  private $painter;

  public function __construct(Painter $painter) {
    $this->painter = $painter;
  }

  /**
   * We can create a vehicle with both an injected service and variable.
   */
  public function createVehicle(string $manufacturer_name) {
    return new Vehicle($this->painter, $manufacturer_name);
  }
}
