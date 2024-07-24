<?php

namespace App\View\Components\Courses;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsSection;

class ListCard extends Component
{
    
    protected $coursesHome;

    public function __construct()
    {

        $this->coursesHome = CmsSection::where('component_id', 'cursos_area_5')
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
        return view('components.courses.list-card', [
            'coursesHome' => $this->coursesHome
        ]);
    }
}
