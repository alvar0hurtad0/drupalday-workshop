<?php

namespace Drupal\example_3\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class ExampleController extends ControllerBase {

/**
 * {@inheritdoc}
 */
  public function build() {
    $build =  [
      '#theme' => 'example_3',
      '#test_var' => '123456',
    ];

  return $build;

  }

}
