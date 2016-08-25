<?php

/**
 * @file
 *
 * Contains \Drupal\Tests\d8e_service_di_service\Unit\DemoServiceTest.
 */

namespace Drupal\Tests\d8e_service_dependency_injection\Unit;

use Drupal\d8e_service_di_service\DemoService;
use Drupal\Tests\UnitTestCase;

/**
 * Tests the DemoService service.
 *
 * @group d8e
 */
class DemoServiceTest extends UnitTestCase {

  /**
   * @var DemoService
   */
  public $demoService;

  public function setUp() {
    /**
     * We need to make a mock of the measurementConversion service.
     * @var $measurement_service \Drupal\d8e_service_dependency_injection\MeasurementConversion
     */
    $measurement_service = $this->getMockBuilder('\Drupal\d8e_service_dependency_injection\MeasurementConversion')
      ->getMock();

    /**
     * We are going to mock our method inchToCentimeter and return set values
     * for a handful of cases we will use. This is necessary because this is the
     * one method that our service uses from the MeasurementConversion service.
     * We don't need to test that our MeasurementConversion service is working
     * properly because our unit tests for that service accomplish that goal.
     */
    $measurement_service->expects($this->any())->method('inchToCentimeter')
      ->willReturnMap([
        [1, 2.54],
        [2, 2 * 2.54],
        [5, 5 * 2.54],
        [7, 7 * 2.54],
      ]);

    // Load the service and store it for testing.
    $this->demoService = new DemoService($measurement_service);
  }

  /**
   * A simple test that we can get the average when using centimeters.
   */
  public function testAverageFromCM() {
    $samples = [1,4,6,3];
    $units = 'cm';

    $this->assertEquals(3.5, $this->demoService->getAverageCM($samples, $units));
  }

  /**
   * A simple test that we can get the average when using inches.
   */
  public function testAverageFromIN() {
    $samples = [1,2,5,7];
    $units = 'in';

    $this->assertEquals(9.525, $this->demoService->getAverageCM($samples, $units));
  }

}
