<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Jobs\SendBulkQueueEmail;

class SendBulkMailController extends Controller
{
    public function sendBulkMail(Request $request)
    {
        $details = [
            'name' => 'admin',
            'subject' => 'Weekly Notification',
            'message' => 'old msg'
        ];
 
        // send all mail in the queue.
        $job = (new SendBulkQueueEmail($details))
            ->delay(
                now()
                ->addSeconds(2)
            ); 

        dispatch($job);
        echo "Bulk mail send successfully in the background...";
    }
    public function show(){
        return view('mails.news_letter');
    }
}
