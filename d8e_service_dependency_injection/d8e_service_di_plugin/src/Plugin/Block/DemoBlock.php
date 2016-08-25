<?php
/**
 * @file
 * Contains \Drupal\d8e_service_di_plugin\Plugin\Block\DemoBlock.
 */

namespace Drupal\d8e_service_di_plugin\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\d8e_service_dependency_injection\MeasurementConversion;

/**
 * Provides a block to that shows a conversation about mood.
 *
 * @Block(
 *   id = "d8e_service_di_plugin_block",
 *   admin_label = @Translation("d8e Service Dependency Injection with Plugin: Block")
 * )
 */
class DemoBlock extends BlockBase implements ContainerFactoryPluginInterface {
  /**
   * @var $measurementConversion \Drupal\d8e_service_dependency_injection\MeasurementConversion
   */
  protected $measurementConversion;

  /**
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   * @param \Drupal\d8e_service_dependency_injection\MeasurementConversion $measurementConversion
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, MeasurementConversion $measurementConversion) {
    // Call parent construct method.
    parent::__construct($configuration, $plugin_id, $plugin_definition);

    // Store our dependency.
    $this->measurementConversion = $measurementConversion;
  }

  /**
   * @param ContainerInterface $container
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   * @return static
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('d8e_service_dependency_injection.measurement_conversion')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $celcius = 10;
    $fahrenheit = $this->measurementConversion->celsiusToFahrenheit($celcius);

    // We return a render array of the message.
    return [
      '#markup' => $this->t('d8e Service Dependency Injection with Plugin: @celcius degrees C equals @fahrenheit degrees F', ['@celcius' => $celcius, '@fahrenheit' => $fahrenheit])
    ];
  }
}
