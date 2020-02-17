<?php

namespace Omt\ZoomAPI\Api;

use Omt\ZoomAPI\ZoomAPIClient;

/**
 * Zoom API Interface.
 */
interface ApiInterface {

  /**
   * ZoomAPI API Constructor.
   */
  public function __construct(ZoomAPIClient $client);

}
