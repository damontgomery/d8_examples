<?php

namespace Drupal\d8e_fs_yaml_arguments;

class Manufacturer {

  protected $name;

  public function __construct(string $name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

}