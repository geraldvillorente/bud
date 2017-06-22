<?php

namespace Drupal\bms_core\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class BMSCoreController.
 *
 * @package Drupal\bms_core\Controller
 */
class BMSCoreController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hello with parameter(s): $name'),
    ];
  }

}
