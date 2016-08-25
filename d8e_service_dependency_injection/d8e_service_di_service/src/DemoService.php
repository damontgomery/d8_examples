<?php

/**
 * @file
 * Contains \Drupal\d8e_service_di_service\DemoService.
 */

namespace Drupal\d8e_service_di_service;

use Drupal\d8e_service_dependency_injection\MeasurementConversion;

class DemoService {

  /**
   * @var \Drupal\d8e_service_dependency_injection\MeasurementConversion
   */
  protected $measurementConversion;

  /**
   * We will inject our services and store it for use in our service methods.
   *
   * @param \Drupal\d8e_service_dependency_injection\MeasurementConversion $measurementConversion
   */
  public function __construct(MeasurementConversion $measurementConversion) {
    $this->measurementConversion = $measurementConversion;
  }

  /**
   * Return the average in cm.
   *
   * @param array $samples
   * @param string $units
   *
   * @return float
   */
  public function getAverageCM($samples, $units) {
    // If we are using inches, we want to convert to standard units.
    if ($units === 'in') {
      /**
       * We can use the array map function which applies the inchToCentimeter function to each value of the array and stores the converted values as a new array.
       * This is equivalent to calling $this->measurementConversion->inchToCentimeter($samples[$i]) for each value.
       *
       * See http://php.net/manual/en/language.types.callable.php for the object method pattern.
       */
      $samples = array_map([$this->measurementConversion, 'inchToCentimeter'], $samples);
    }

    // Calculate the average.
    $average = array_sum($samples) / count($samples);

    return $average;
  }

}