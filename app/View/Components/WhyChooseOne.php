<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsSection;

class WhyChooseOne extends Component
{
    
    protected $elegirnos;

    public function __construct()
    {

        $this->elegirnos = CmsSection::where('component_id', 'elegirnos_area_9')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.why-choose-one', [
            'elegirnos' => $this->elegirnos
        ]);
    }
}
