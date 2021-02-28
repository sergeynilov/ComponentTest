<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class ListingHeader extends Component
{


    public $iconHint= '';
    public $itemsLength= 0;
    public $itemsTotalCount= 0;

    public function __construct(string $iconHint= '', int $itemsLength= 0, int $itemsTotalCount= 0)
    {
        $this->iconHint= $iconHint;
        $this->itemsLength= $itemsLength;
        $this->itemsTotalCount= $itemsTotalCount;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        \Log::info(  ' -1 render ListingHeader::');
        return view('components.admin.listing-header');
    }
}
