<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\SMS;
use App\SmsCount;
use SMSCounter;

use Twilio\Rest\Client;

class SmsController extends Controller
{
    public function __construct(Client $client)
    {
        $this->middleware('auth');
        $this->client = $client;
    }

    public function index()
    {
        return view('sms.index');
    }

    public function send(Request $request)
    {
        $message = $request->input('message');
        $phoneNumbers = $request->input('phoneNumber');
        $from = $request->input('senderId');

        $remaining = SmsCount::find(1);
        $counter = SMSCounter::count($message);

        $phoneNumber = '+960'.$phoneNumbers;
        
        $sms = SMS::create([
            'to' => $phoneNumbers,
            'from' => $from,
            'message' => $message
        ]);

        if ($from == 'Nilsham' OR $from == 'LocalEscape' OR $from == 'LeBoutique') {
            try {
                $this->sendMessage($phoneNumber, $message, $from);
                $sms->status = 'SMS successfully send';
                $sms->save();

                $remaining->sms = $remaining->sms - $counter->messages;
                $remaining->save();

                return redirect('sms')->with('alert-success', 'SMS successfully send');
    
            } catch ( \Twilio\Exceptions\RestException  $e ) {
                $sms->status = $e->getMessage();
                $sms->save();
                return redirect('sms')->with('alert-danger', $e->getMessage());
            }
        } else {
            $sms->status = 'Sender Id not verified';
            $sms->save();
            return redirect('sms')->with('alert-danger', 'Sender Id not verified');
        }
        
        // Testing Numbers
        // (Pass Validation)
        // $from = '+15005550006';
        // (Invalid Number)
        // $from = '+15005550001';
        // (Not available for the account)
        // $from = '+15005550007';
        //dd($from);
    }

    private function sendMessage($phoneNumber, $message, $from)
    {
        $twilioPhoneNumber = config('services.twilio')['phoneNumber'];
        $messageParams = array(
            'from' => $from,
            'body' => $message
        );

        $this->client->messages->create(
            $phoneNumber,
            $messageParams
        );
    }

    public function call()
    {
        return view('call');
    }

}
