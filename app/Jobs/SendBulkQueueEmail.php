<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
// use App\Models\Mail;
use TblMail;
use Mail;

class SendBulkQueueEmail implements ShouldQueue
{
    
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    public $timeout = 7200; // 2 hours

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function handle()
    {
        $data = TblMail::all();
        $input['subject'] = $this->details['subject'];
        // var_dump($this->details);die;
        foreach ($data as $key => $value) {
            $input['email'] = $value->email;
            \Mail::send('mails.news_letter', [], function($message) use($input){
                $message->to($input['email'])
                    ->subject($input['subject']);
            });
        }
    }
}
