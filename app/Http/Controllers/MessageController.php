<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessage;
use App\Jobs\SendNewMessageNotificationEmail;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(StoreMessage $message) {
        $new_message = Message::create($message->except('_token'));

        if ($new_message->exist)
            return response()->json(['error' => 'The messages was not received. Please try again.'], 400);

        SendNewMessageNotificationEmail::dispatch($new_message)->onQueue('emails');

        return response()->json(['success' => 'OK'], 200);

    }
}
