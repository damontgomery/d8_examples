<?php

/**
 * @file
 * Contains \Drupal\d8e_service_dependency_injection\MeasurementConversion.
 */

namespace Drupal\d8e_service_dependency_injection;

/**
 * Provide functions for converting measurements.
 */
class MeasurementConversion {

  /**
   * Convert Celsius to Fahrenheit
   *
   * @param $temp
   *
   * @return int
   */
  public function celsiusToFahrenheit($temp) {
    return ($temp * (9/5)) + 32;
  }

  /**
   * Convert Fahrenheit to Celsius
   *
   * @param $temp
   *
   * @return int
   */
  public function fahrenheitToCelsius($temp) {
    return ($temp - 32) * (5/9);
  }

  /**
   * Convert centimeter to inches.
   *
   * @param $length
   *
   * @return int
   */
  public function centimeterToInch($length) {
    return $length / 2.54;
  }

  /**
   * Convert inches to centimeters.
   *
   * @param $length
   *
   * @return int
   */
  public function inchToCentimeter($length) {
    return $length * 2.54;
  }

}