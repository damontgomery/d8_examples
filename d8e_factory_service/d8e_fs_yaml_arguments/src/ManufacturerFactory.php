<?php

namespace Drupal\d8e_fs_yaml_arguments;

class ManufacturerFactory {

  /**
   * We can create a vehicle.
   */
  public static function createManufacturer(string $name) {
    return new Manufacturer($name);
  }
}
