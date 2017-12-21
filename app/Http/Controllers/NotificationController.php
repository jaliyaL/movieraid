<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function makeNotificationRead(Request $request)
    {
      $id = $request->id;
      $user = Auth::user();
      //$user->unreadNotifications()->where('notifications.id', $id)->markAsRead();
    /*  foreach ($user->unreadNotifications as $notification) {
           $notification->markAsRead();
      }*/

      //$id = $user->unreadNotifications[0]->id;
      $user->unreadNotifications->where('id', $id)->markAsRead();

      return response()->json(['id'=>$request->id]);
    }
}
