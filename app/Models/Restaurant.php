<?php

declare(strict_types=1);

namespace App\Models;

class Restaurant {

  /** @var string */
  private $api;

  /**
   * Restaurant constructor.
   * @param string $api
   */
  public function __construct(string $api) {
    $this->api = $api;
  }

  public function getRestaurantList(): array {
    return $this->callApi("$this->api/restaurant");
  }

  public function getMenuList(int $id): array {
    return $this->callApi("$this->api/daily-menu?restaurant_id=$id");
  }

  private function callApi(string $url) {
    return json_decode(file_get_contents($url));
  }

}