<?php

/**
 * @file
 *
 * Contains \Drupal\Tests\d8e_service_dependency_injection\Unit\MeasurementConversionTest.
 */

namespace Drupal\Tests\d8e_service_dependency_injection\Unit;

use Drupal\d8e_service_dependency_injection\MeasurementConversion;
use Drupal\Tests\UnitTestCase;

/**
 * Tests the MeasurementConversion service.
 *
 * @group d8e
 */
class MeasurementConversionTest extends UnitTestCase {

  /**
   * @var \Drupal\d8e_service_dependency_injection\MeasurementConversion
   */
  public $measurementConversionService;

  public function setUp() {
    $this->measurementConversionService = new MeasurementConversion();
  }

  /**
   * A simple test that that we can convert from fahrenheit to celcius.
   */
  public function testFahrenheitToCelcius() {
    // Test that we can convert from fahrenheit to celcius.
    $this->assertEquals(50, $this->measurementConversionService->fahrenheitToCelsius(122));
  }

  /**
   * A simple test that that we can convert from celcius to fahrenheit.
   */
  public function testCelciusToFahrenheit() {
    // Test that we can convert from celcius to fahrenheit.
    $this->assertEquals(50, $this->measurementConversionService->celsiusToFahrenheit(10));
  }

  /**
   * Provides data for the testCentimetersToInches method.
   *
   * @return array
   */
  public function providerCentimetersToInches() {
    return [
      [2.54,1],
      [254,100],
      [0,0],
      [-2.54,-1],
    ];
  }

  /**
   * Tests centimeterToInch method.
   *
   * @dataProvider providerCentimetersToInches
   */
  public function testCentimetersToInches($cm, $in) {
    $this->assertEquals($in, $this->measurementConversionService->centimeterToInch($cm));
  }

  /**
   * Provides data for the testCentimetersToInches method.
   *
   * @return array
   */
  public function providerInchesToCentimeters() {
    return [
      [1, 2.54],
      [100, 254],
      [0,0],
      [-1, -2.54],
    ];
  }

  /**
   * Tests inchToCentimeter method.
   *
   * @dataProvider providerInchesToCentimeters
   */
  public function testInchesToCentimeters($in, $cm) {
    $this->assertEquals($cm, $this->measurementConversionService->inchToCentimeter($in));
  }

}
