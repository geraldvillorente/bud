<?php

namespace Drupal\bud_core\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class BUDCoreController.
 *
 * @package Drupal\bud_core\Controller
 */
class BUDCoreController extends ControllerBase {

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
