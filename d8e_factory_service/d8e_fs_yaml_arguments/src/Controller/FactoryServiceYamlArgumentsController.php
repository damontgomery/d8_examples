<?php

namespace Drupal\d8e_fs_yaml_arguments\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\d8e_fs_yaml_arguments\Manufacturer;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FactoryServiceYamlArgumentsController extends ControllerBase {

  /**
   * @var \Drupal\d8e_fs_yaml_arguments\Manufacturer
   */
  protected $danMotors;

  /**
   * @var \Drupal\d8e_fs_yaml_arguments\Manufacturer
   */
  protected $montgomeryMotors;

  /**
   * {@inheritdoc}
   */
  public function __construct(Manufacturer $dan_motors, Manufacturer $montgomery_motors) {
    $this->danMotors = $dan_motors;
    $this->montgomeryMotors = $montgomery_motors;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('d8e_fs_yaml_arguments.dan_motors'),
      $container->get('d8e_fs_yaml_arguments.montgomery_motors')
    );
  }

  /**
   * Example controller method that generates a page response.
   *
   * @return array
   */
  public function demo() {

    return [
      '#markup' => 'Montgomery Motors name is ' . $this->montgomeryMotors->getName(),
    ];
  }
}