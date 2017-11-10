<?php

namespace Drupal\example_2\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class ExampleController extends ControllerBase {

/**
 * {@inheritdoc}
 */
  public function build() {
    $build = [
      '#type' => 'markup',
      '#markup' => 'Hello World!',
    ];

  return $build;

  }

}
