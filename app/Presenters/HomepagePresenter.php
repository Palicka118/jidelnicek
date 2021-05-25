<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{
    public function renderDefault()
    {
        $this->template->restaurants = json_decode(file_get_contents("https://private-anon-0c1a8771f3-idcrestaurant.apiary-mock.com/restaurant"));

    }
}