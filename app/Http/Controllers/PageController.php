<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Support\Repositories\PageRepository;
use Illuminate\Support\Facades\Mail;
use App\Contact;
use App\Customized;
use App\Mail\ContactMail;

class PageController extends  Controller
{
    protected $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function show($slug)
    {
        $page = $this->pageRepository->getPageViaSlug($slug, true);

        if (!$page) {
            abort(404);
        }

        $title = $page->name;
        $description = $page->description;

        return view('page.index', compact('page','title','description'));
    }
    
    public function contact()
    {
        $title = 'Contact Us';
        $description = 'Contact us, Discover Indochina Center : Please feel free to submit to us your requests, questions, ideals about holidays in Vietnam';
        $keyworld = 'Contact us, Discover Indochina Center, Address, Phone, submit a request, Discover Indochina';

        return view('page.contact',compact('title','description','keyworld'));
    }

    public function postContact(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $data["name"]      = $request->name;
        $data["email"]     = $request->email;
        $data["phone"]     = $request->phone;
        $data["subject"]   = "Contact Pages";
        $data["info"]      = $request->message;
        $data["country"]   = $request->country;
        $data["date_send"] = date("Y-m-d H:i:s",time());
        $data["ip_client"] = $request["ip_client"];
        if($contact = Contact::create($data)) {
            Mail::send(new ContactMail($contact));
            return redirect('/success');
        } else {
            return back();
        }
    }

    public function customized()
    {
        $title = 'Customized your own Discover Indochina private tours - Discover Indochina';
        $description = 'Discover Indochina - Design a Private Discover Indochina Tour then send you itinerary suggestions and budget options within 1 to 12 hours. Save your time &amp; money…';
        $keyworld = 'cambodia tours, vietnam tours, private cambodia tours, cambodia travel agent, cambodia holidays, cambodia vacations, cambodia trip, travel to cambodia , cambodia travel, book cambodia tour, plan cambodia tour, private cambodia travel, cambodia packages';
        return view('page.customized',compact('title','description','keyworld'));
    }

    public function postCustomized(Request $request)
    {
        $request->validate([
            '_token' => 'required',
        ]);

        $data = $request->except(['_token']);

        if($contact = Customized::create(['content' => json_encode($data)])) {
            return redirect('/success');
        }
        else {
            return back();
        }
    }
}