<?php

namespace Drupal\micro_gc\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * An example controller.
 */
class MicroGC extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function content($address) {
    $headers = array(
      'Content-Type' => 'application/json'
    );

    $result = micro_gc_query($address);

    $response = new JsonResponse();
    $response->setData(array('result' => $result));

    return $response;
  }
}
