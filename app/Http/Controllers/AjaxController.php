<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;
use App\Mail\ContactMail;

class AjaxController extends Controller
{
    public function quickcontact(Request $request)
    {
        switch ($request['mod']) {
            case 'quickcont':
            $data["name"]      = $request["sub"]." ".$request["name"];
            $data["email"]     = $request["mail"];
            $data["phone"]     = $request["numphone"];
            $data["subject"]   = "Quick Contact";
            $data["info"]      = $request["ques"];
            $data["country"]   = $request["contry"];
            $data["date_send"] = date("Y-m-d H:i:s",time());
            $data["ip_client"] = $request["ip_client"];
        break;
            case 'sub_step':
            $data["subject"]           = "Tailor Made";
            $data["name"]              = strip_tags($request["name"]);
            $data["email"]             = strip_tags($request["email"]);
            $data["phone"]             = strip_tags($request["phone"]);
            $data["country"]           = strip_tags($request["country"]);
            $content                   = "Destinations: ".$request["arr_cat"]."<br>";
            $content                   .= "Style: ".str_replace("|","&",$request["arr_tour"])."<br>";
            $content                   .= "Class: ".strip_tags($request["tour_sel"])."<br>";
            $content .= "Date Start: ".date("F d, Y",strtotime($request["date"]))."<br>";
            if(strlen($request["text_name"])==strlen(intval($request["text_name"]))){
                $content .= "Duration: ".strip_tags($request["text_name"])." Days"."<br>";
            }else{
                $content .= "Duration: ".strip_tags($request["text_name"])."<br>";
            }
            $content            .= "Adult: ".$request["adult"]." &nbsp; Child: ".$request["children"]."<br>";

            $data["info"]       = $content."<br>*Request: ".strip_tags($request["info"]);

            $data["date_send"]  = date("Y-m-d H:i:s",time());
            $data["ip_client"] = $request["ip_client"];
            
        break;
            default:
            $data["name"]      = $request["sub"]." ".$request["name"];
            $data["email"]     = $request["mail"];
            $data["phone"]     = $request["numphone"];
            $data["subject"]   = "Quick Contact";
            $data["info"]      = $request["ques"];
            $data["country"]   = $request["contry"];
            $data["date_send"] = date("Y-m-d H:i:s",time());
            $data["ip_client"] = $request["ip_client"];
            
        break;
        }


        if($contact = Contact::create($data)) {
            Mail::send(new ContactMail($contact));
            return '1|ok';
        }

        return abort(404);

    }
    public function success()
    {
        return view('contact.index');
    }
}