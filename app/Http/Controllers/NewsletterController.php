<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Newsletter;

class NewsletterController extends Controller
{
    //Submit Newsletter
    public function index(Request $request)
    {

        $newsletter = new Newsletter;

        $newsletter->email = $request->email;

        $newsletter->save();


        return redirect()->back()->with('message', 'your message,here');   


    }


    //API Mailchimp Newsletter
    public function mailchimp_get_users()
    {

        $newsletter_list = Newsletter::all();

        return response()->json($newsletter_list);
    }
}
