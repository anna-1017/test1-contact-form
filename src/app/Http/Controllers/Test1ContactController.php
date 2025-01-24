<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class Test1ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'detail','content']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        
        $contact = $request ->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'detail','content']);

        // genderの変換
        if ($contact['gender'] === '男性'){
            $contact['gender'] = 1;
        } elseif($contact['gender'] === '女性'){
            $contact['gender'] =2;
        } elseif($contact['gender'] ==='その他'){
            $contact['gender'] =3;
        }
        Contact::create($contact);
        return view('thanks');
    }
}
