<?php

namespace App\Models;

use App\Notifications\ContactUsQueryNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;

class Contact extends Model
{
    use HasFactory, Notifiable;

    public function contactUs(Request $request)
    {
        Notification::route('mail', 'umerqaiser1009@gmail.com')
            ->notify(new ContactUsQueryNotification($request));

        return response()->json(['status' => 200, 'message' => 'Your query submitted successfully']);
    }
}
