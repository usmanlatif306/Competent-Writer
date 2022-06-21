<?php

namespace App\Http\Controllers;

use App\About;
use App\Services\SeoService;
use App\Contact;
use App\Faq;
use App\Services\PageService;
use App\User;

class PagesController extends Controller
{
    private $seoService;
    private $pageService;
    function __construct(SeoService $seoService, PageService $pageService)
    {
        $this->seoService = $seoService;
        $this->pageService = $pageService;
    }

    // services
    public function service()
    {
        $this->seoService->load('services');
        $data['faqs'] = Faq::where('page', 'home')->get();

        return view('website.pages.service', compact('data'));
    }
    // contact us
    public function contacts()
    {
        $this->seoService->load('contact_us');
        // $page = Contact::first();

        return view('website.pages.contact');
    }

    // about us
    public function about()
    {
        $this->seoService->load('about_us');

        $writers_all = User::select(['id', 'first_name', 'last_name', 'photo'])->with(['ratings_received'])->withCount(['ratings_received'])->where('role_id', 2)->orderBy('ratings_received_count', 'desc')->get();
        $writers = [];
        // has('completed_orders')->

        foreach ($writers_all  as $writer) {
            $writers[] =  $writer;
            // if ($writer->ratings_received->avg('number') >= 4) {
            //     $writers[] =  $writer;
            // }
        }
        $data['writers'] = array_chunk($writers, 3);

        return view('website.pages.about', compact('data'));
    }
}
