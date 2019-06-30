<?php

/**
 * @file
 * Contains \Drupal\mycustom_page\Controller\MyPageController.
 */

namespace Drupal\mycustom_page\Controller;

use Drupal\Core\Controller\ControllerBase;


/**
 * Class MyPageController
 *
 * @package Drupal\mycustom_page\Controller
 * Returns responses for My Custom Page module
 */
class MyPageController extends ControllerBase {

  /**
   * Returns markup for our custom page
   */
  public function customPage() {
    return [
      '#markup' => t('Welcome to my custom page'),
    ];
  }

}