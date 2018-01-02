<?php

namespace App\Events;

use App\Link;

class LinkOpened extends Event
{

	public $link;

    public function __construct(Link $link)
    {
        $this->link = $link;
    }
}
