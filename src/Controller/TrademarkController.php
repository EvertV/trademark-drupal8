<?php

namespace Drupal\trademark\Controller;

use Drupal\Core\Controller\ControllerBase;

class TrademarkController extends ControllerBase {
    public function test() {
        $build = [
            '#markup' => t('Trademark controller.'),
        ];
        return $build;
    }
}