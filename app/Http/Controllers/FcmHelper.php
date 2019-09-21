<?php
/**
 * Created by PhpStorm.
 * User: MRC2
 * Date: 03-Apr-17
 * Time: 2:40 AM
 */

namespace App\Http\Controllers;


use App\Device;
use App\User;
use GuzzleHttp\Client;
use stdClass;

class FcmHelper
{
    public static function getUserTokens($users)
    {
        $tokens = [];
        foreach ($users as $user) {
            array_push($tokens, $user->device);
        }
        return $tokens;
    }

    public static function sendPushPayload($ids, $title, $body, $data)
    {

        $client = new Client();
        $data['title'] = $title;
        $data['body'] = $body;
        $res = $client->request('POST', 'https://fcm.googleapis.com/fcm/send', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'key=AAAAOhNb21g:APA91bHyh-nJe5Y50Q_WGU1vX39F1y-TjEqwhJPCcW3AUUsWxuFqVfGiHWtf3ZF7gIY2hb9h8a8L84rMopwK6YkT_94k-QpDBa6LnSgdZ5w2WjBgJ8nmnJKSJrAvNzP6ljUtMlXrQ0GB',
            ],
            'verify' => false,
            'json' => [
                'registration_ids' => $ids,
                'priority' => 'high',
                'icon' => 'myicon',
                'data' => $data,
            ]
        ]);

    }

    public static function sendPushNotification($ids, $title, $body, $data)
    {

        $client = new Client();
        $res = $client->request('POST', 'https://fcm.googleapis.com/fcm/send', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'key=AAAAUEB3WXk:APA91bFTgJr2YzJKQouHoCMNoJHwIFOAiI3GjkRvaQU1gd3GW0ap0Mp9T1L796K4_Cf56Es41KroxwCcg6Q1fTgGrbkFn9dRG4ZU4v7DrwVS56HSvT_m4IWXObCN0Nu9aQQoeafz0Gif',
            ],
            'verify' => false,
            'json' => [
                'registration_ids' => $ids,
                'priority' => 'high',
                'icon' => 'myicon',
                'data' => $data,
                'notification' => [
                    'body' => $body,
                    'title' => $title,
                    'icon' => 'myicon',
                    'sound' => 'default',
                    'click_action' => $data['activity']
                ]
            ]
        ]);

        // "200"
//        echo $res->getHeader('content-type');
        // 'application/json; charset=utf8'
//        echo $res->getBody();


//        $optionBuiler = new OptionsBuilder();
//        $optionBuiler->setTimeToLive(60 * 20);
//
//        $notificationBuilder = new PayloadNotificationBuilder($title);
//        $notificationBuilder->setBody($body)
//            ->setSound('default');
////            ->setClickAction('classroom');
//
//        $dataBuilder = new PayloadDataBuilder();
//        $dataBuilder->addData($data);
//
//        $option = $optionBuiler->build();
//        $notification = $notificationBuilder->build();
//        $data = $dataBuilder->build();
//
//// You must change it to get your tokens
////        $tokens = MYDATABASE::pluck('fcm_token')->toArray();
//
//        $downstreamResponse = FCM::sendTo($ids, $option, $notification, $data);
//
//        $stats = new StdClass;
//        $stats->numberSuccess = $downstreamResponse->numberSuccess();
//        $stats->numberFailure = $downstreamResponse->numberFailure();
//        $stats->numberModification = $downstreamResponse->numberModification();
//        $stats->tokensToDelete = $downstreamResponse->tokensToDelete();
//        $stats->tokensToModify = $downstreamResponse->tokensToModify();
//        $stats->tokensToRetry = $downstreamResponse->tokensToRetry();
//        $stats->tokensWithError = $downstreamResponse->tokensWithError();
//
//        return $stats;
    }
}