<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function admin(){
        $contacts = Contact::with('category')->paginate(7);
        $categories = Category::all();
        return view('admin',compact('contacts','categories'));
    }
    public function search(Request $request){
        $selected_contact = Contact::with('category')
            ->CategorySearch($request->category_id)
            ->KeywordSearch($request->keyword)
            ->GenderSearch($request->gender)
            ->DateSearch($request->date)
            ->paginate(7);
        $categories = Category::all();
        return view('admin', compact('selected_contact', 'categories'));
    }
    
    
}
