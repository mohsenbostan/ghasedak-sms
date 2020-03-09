<?php

namespace MohsenBostan;


use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class GhasedakSms
{
    /**
     * Use this method to send SMS as single.
     * @param string $message
     * @param string $receptor
     * @param string $linenumber
     * @param string|null $senddate
     * @return array
     */
    public static function sendSingleSMS(string $message, string $receptor, ?string $senddate = null)
    {
        // Storing Data In A Variable To Make It More Readable!
        $data_to_send = [
            "message" => $message,
            "receptor" => $receptor,
            "linenumber" => config('ghasedak-sms.line_number')
        ];
        if ($senddate) {
            $send_date = Carbon::createFromFormat('Y-m-d H:i:s', $senddate, 'Asia/Tehran');
            $data_to_send["senddate"] = $send_date->timestamp;
        }

        // Sending SMS Using Laravel Http Client
        $send_sms = Http::withHeaders([
            "apikey" => config('ghasedak-sms.api_key'),
        ])->asForm()->post("https://api.ghasedak.io/v2/sms/send/simple", $data_to_send);

        // Return Json Response
        // To Know More About All Possible Responses, Please Visit : https://ghasedak.io/docs
        return $send_sms->json();
    }


    /**
     * Use this method to send SMS to multiple receptors.
     * @param string $message
     * @param string $receptors
     * @param string $linenumbers
     * @param string|null $senddate
     * @return array
     */
    public static function sendType1MultipleSMS(string $message, string $receptors, ?string $senddate = null)
    {
        // Storing Data In A Variable To Make It More Readable!
        $data_to_send = [
            "message" => $message,
            "receptor" => $receptors,
            "linenumber" => config('ghasedak-sms.line_numbers')
        ];
        if ($senddate) {
            $send_date = Carbon::createFromFormat('Y-m-d H:i:s', $senddate, 'Asia/Tehran');
            $data_to_send["senddate"] = $send_date->timestamp;
        }

        // Sending SMS Using Laravel Http Client
        $send_sms = Http::withHeaders([
            "apikey" => config('ghasedak-sms.api_key'),
        ])->asForm()->post("https://api.ghasedak.io/v2/sms/send/pair", $data_to_send);

        // Return Json Response
        // To Know More About All Possible Responses, Please Visit : https://ghasedak.io/docs
        return $send_sms->json();
    }


    /**
     * Use this method to send SMS to multiple receptors.
     * @param string $message
     * @param string $receptors
     * @param string $linenumber
     * @param string|null $senddate
     * @return array
     */
    public static function sendType2MultipleSMS(string $message, string $receptors, ?string $senddate = null)
    {
        // Storing Data In A Variable To Make It More Readable!
        $data_to_send = [
            "message" => $message,
            "receptor" => $receptors,
            "linenumber" => config('ghasedak-sms.line_number')
        ];
        if ($senddate) {
            $send_date = Carbon::createFromFormat('Y-m-d H:i:s', $senddate, 'Asia/Tehran');
            $data_to_send["senddate"] = $send_date->timestamp;
        }

        // Sending SMS Using Laravel Http Client
        $send_sms = Http::withHeaders([
            "apikey" => config('ghasedak-sms.api_key'),
        ])->asForm()->post("https://api.ghasedak.io/v2/sms/send/pair", $data_to_send);

        // Return Json Response
        // To Know More About All Possible Responses, Please Visit : https://ghasedak.io/docs
        return $send_sms->json();
    }

    /**
     * Use this method to send Voice Message
     * @param string $message
     * @param string $receptors
     * @param string|null $senddate
     */
    public static function sendVoiceMessage(string $message, string $receptor, ?string $senddate = null)
    {
        // Storing Data In A Variable To Make It More Readable!
        $data_to_send = [
            "message" => $message,
            "receptor" => $receptor,
        ];
        if ($senddate) {
            $send_date = Carbon::createFromFormat('Y-m-d H:i:s', $senddate, 'Asia/Tehran');
            $data_to_send["senddate"] = $send_date->timestamp;
        }

        // Sending Voice Message Using Laravel Http Client
        $send_sms = Http::withHeaders([
            "apikey" => config('ghasedak-sms.api_key'),
        ])->asForm()->post("https://api.ghasedak.io/v2/voice/send/simple", $data_to_send);

        // Return Json Response
        // To Know More About All Possible Responses, Please Visit : https://ghasedak.io/docs
        return $send_sms->json();
    }
}
