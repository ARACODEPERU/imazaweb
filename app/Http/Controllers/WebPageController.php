<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WebPageController extends Controller
{
    protected $listcard;

    public function __construct()
    {

        $this->listcard = CmsSection::where('component_id', 'cursos_area_5')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

    }
    public function index()
    {
        return view('pages.home', [
            'listcard' => $this->listcard
        ]);
    }
}
