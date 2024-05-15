<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    protected $contact;
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function contact(Request $request)
    {
        try {
            return $this->contact->contactUs($request);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }
}
