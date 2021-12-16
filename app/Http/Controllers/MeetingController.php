<?php

namespace App\Http\Controllers;

require_once base_path('vendor/autoload.php');

use \Firebase\JWT\JWT;
use GuzzleHttp\Client as Http;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

define('ZOOM_API_KEY', config('services.zoom.key'));
define('ZOOM_SECRET_KEY', config('services.zoom.secret'));

class MeetingController extends Controller
{
    function getZoomAccessToken()
    {
        $key = ZOOM_SECRET_KEY;
        $payload = array(
            "iss" => ZOOM_API_KEY,
            'exp' => time() + 3600,
        );
        return JWT::encode($payload, $key);
    }

    function createZoomMeeting()
    {
        $client = new Http([
            'base_uri' => 'https://api.zoom.us',
        ]);

        $response = $client->request('POST', '/v2/users/me/meetings', [
            "headers" => [
                "Authorization" => "Bearer " . getZoomAccessToken()
            ],
            'json' => [
                "topic" => "Meeting",
                "type" => 2,
                "start_time" => "2021-01-30T20:30:00",
                "duration" => "30",
                "password" => "123456"
            ],
        ]);

        $data = json_decode($response->getBody());
        echo "Join URL: " . $data->join_url;
        echo "<br>";
        echo "Meeting Password: " . $data->password;
    }

    function updateZoomMeeting($meeting_id)
    {
        $client = new Http([
            'base_uri' => "https://api.zoom.us",
        ]);

        $response = $client->request('PATCH', '/v2/meetings/' . $meeting_id, [
            "headers" => [
                "Authorization" => "Bearer" . getZoomAccessToken()
            ],
            "json" => [
                "topic" => "Meeting",
                "type" => 2,
                "start_time" => "2022-01-03T10:30:00",
                "duration" => "30",
                "password" => "123456"
            ],

        ]);
        if ($response->getStatusCode() == 204) {
            echo "Meeting is updated successfully.";
        }
    }

    function list_meetings($next_page_token = '')
    {
        $client = new Http(['base_uri' => 'https://api.zoom.us']);

        $arr_request = [
            "headers" => [
                "Authorization" => "Bearer " . $this->getZoomAccessToken()
            ]
        ];

        if (!empty($next_page_token)) {
            $arr_request['query'] = ["next_page_token" => $next_page_token];
        }

        $response = $client->request('GET', '/v2/users/me/meetings', $arr_request);

        $data = json_decode($response->getBody());

        if (!empty($data)) {
            foreach ($data->meetings as $d) {
                $topic = $d->topic;
                $join_url = $d->join_url;
                echo "<h3>Topic: $topic</h3>";
                echo "Join URL: $join_url";
            }

            if (!empty($data->next_page_token)) {
                list_meetings($data->next_page_token);
            }
        }
    }

    function deleteZoomMeeting($meeting_id)
    {
        $client = new Http([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.zoom.us',
        ]);

        $response = $client->request("DELETE", "/v2/meetings/$meeting_id", [
            "headers" => [
                "Authorization" => "Bearer " . getZoomAccessToken()
            ]
        ]);

        if (204 == $response->getStatusCode()) {
            echo "Meeting deleted.";
        }
    }
}
