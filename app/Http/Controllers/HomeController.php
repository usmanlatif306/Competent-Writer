<?php

namespace App\Http\Controllers;

use App\Choice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Service;
use App\Content;
use App\Faq;
use App\Services\CalculatorService;
use App\Services\SeoService;
use App\Mail\CustomerQuery;
use App\Order;
use App\Quality;
use App\Rating;
use App\Services\ApiService;
use App\Services\ApiWriterService;
use App\Services\PageService;
use App\Subject;
use App\Tag;
use App\Testimonial;
use App\Tutor;
use App\User;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    private $seoService;
    private $pageService;

    function __construct(SeoService $seoService, PageService $pageService)
    {
        $this->seoService = $seoService;
        $this->pageService = $pageService;
    }

    public function index()
    {
        if (env('ENABLE_APP_SETUP_CONFIG') != TRUE) {
            return redirect()->route('installer_page');
        }
        $data = $this->pageService->calculatorData('home');
        // dd($data);
        $data['add_to_cart'] = env('API_URL') . 'order/create';
        return view('website.index', compact('data'));
    }

    function pricing(CalculatorService $calculator)
    {
        $this->seoService->load('pricing');

        return view('website.pricing')->with(['data' => $calculator->priceList()]);
    }

    function content(Request $request)
    {
        $this->seoService->load($request->route()->getName());

        $slug = $request->segment(count($request->segments()));

        $content = Content::where('slug', $slug)->get();

        if ($content->count() > 0) {
            $content = $content->first();
        } else {
            abort(404);
        }

        return view('website.content')->with('content', $content);
    }

    function contact()
    {
        $this->seoService->load('contact');

        return view('website.contact');
    }

    function handle_email_query(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required'
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Mail::to(settings('company_email'))->send(new CustomerQuery($request->all()));

        $request->session()->flash('alert-class', 'alert-success');
        $request->session()->flash('message', 'Thank you for your query. We will get back to you as soon as possible');

        return redirect()->back();
    }
}
