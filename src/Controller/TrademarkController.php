<?php

namespace Drupal\trademark\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class TrademarkController extends ControllerBase {
    public function content() {
        $build = [
            '#markup' => t('Trademark settings.'),
        ];
        return $build;
    }

}
