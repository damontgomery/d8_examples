<?php

namespace Drupal\d8e_fs_dependency_injection;

use Drupal\d8e_factory_service\Painter;

class Vehicle {

  protected $painter;

  /**
   * @var
   */
  protected $manufacturerName;

  public function __construct(Painter $painter, $manufacturer_name) {
    $this->painter = $painter;
    $this->manufacturerName = $manufacturer_name;
  }

  public function isPaintColorAvailable($color) {
    return in_array($color, $this->painter->getAvailablePaint());
  }

}