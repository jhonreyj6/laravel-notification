<?php

namespace App\Http\Controllers;

use App\Notifications\ContactNotification;
use Illuminate\Http\Request;
use Notification;
use App\Models\User;

class NotificationController extends Controller
{
    public function store(Request $request) {
        $user = User::first();
        Notification::send($user, new ContactNotification($request->all()));
        return response()->json(['message' => 'ok'], 200);
    }
}
