<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Models\Restaurant;
use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{
    /** @var Restaurant */
    private $restaurant;

  /**
   * HomepagePresenter constructor.
   * @param Restaurant $restaurant
   */
  public function __construct(Restaurant $restaurant) {
    $this->restaurant = $restaurant;
  }

  public function renderDefault()
    {
        $this->template->restaurants = $this->restaurant->getRestaurantList();

    }


    public function renderDetail(int $id)
    {
        $this->template->restaurant = $this->restaurant->getMenuList($id);
    }
}