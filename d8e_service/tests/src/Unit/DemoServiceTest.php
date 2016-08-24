<?php

/**
 * @file
 *
 * Contains \Drupal\Tests\d8e_service\Unit\DemoServiceTest.
 */

namespace Drupal\Tests\d8e_service\Unit;

use Drupal\d8e_service\DemoService;
use Drupal\Tests\UnitTestCase;

/**
 * Tests the DemoService service.
 *
 * @group d8e
 */
class DemoServiceTest extends UnitTestCase {

  /**
   * @var \Drupal\d8e_service\DemoService
   */
  public $demoService;

  public function setUp() {
    $this->demoService = new DemoService();
  }

  /**
   * A simple test that tests our demo() function.
   */
  public function testDemoData() {
    // Get the demo data from our service.
    $demo_data = $this->demoService->getDemoData();

    // Test that our key is between 1 and 100.
    $this->assertGreaterThanOrEqual(1, $demo_data['key']);
    $this->assertLessThanOrEqual(100, $demo_data['key']);

    // Test that our response is a specific value.
    $this->assertEquals('d8e Service', $demo_data['response']);
  }

}
