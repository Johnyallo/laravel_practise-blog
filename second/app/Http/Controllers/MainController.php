<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class MainController extends Controller {
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function review() {
        $reviews = new Contact();
        return view('review', ['reviews'=>$reviews->all()]);
    }

    public function review_check(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:40',
            'subject' => 'required|min:4|max:80',
            'message' => 'required|min:15|max:100'
        ]);

        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
}
