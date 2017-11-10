<?php

namespace Drupal\example_4\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class ExampleController extends ControllerBase {

/**
 * {@inheritdoc}
 */
  public function build() {
    $config = $this->config('example_4.settings');
    $build =  [
      '#theme' => 'example_4',
      '#test_var' => $config->get('example_thing'),
    ];

  return $build;

  }

}
