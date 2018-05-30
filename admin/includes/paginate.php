<?php

class Paginate
{
    public $page;
    public $items_per_page;
    public $items_total_count;

    public function __construct($page=1, $items_per_page=10, $items_total_count=0)
    {
        $this->page = $page;
        $this->items_per_page = $items_per_page;
        $this->items_total_count = $items_total_count;
    }
}

?>