<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(Request $request){
        $categories = Category::all();
        return view('index',compact('categories'));
    }
    public function confirm(ContactRequest $request){
        $tel = $request->tel1 . $request->tel2 . $request->tel3;
        $contact = $request->only(['first_name',
        'last_name',
        'gender',
        'email',
        'adress',
        'building',
        'category_id',
        'detail']);
        $contact['tel'] = $tel;
        $selected_category = Category::find($request->category_id);
        return view('confirm',compact('contact','selected_category'));

    }
    public function store(Request $request){
        $contact = $request->only([
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'adress',
        'building',
        'detail']);
        $contact['category_id'] = $request->category_id;
        Contact::create($contact);
        return view('thanks');
    }
}
