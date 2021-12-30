<?php

namespace App\Http\Controllers;

require_once base_path('vendor/autoload.php');
use \Firebase\JWT\JWT;
use GuzzleHttp\Client as Http;
use Illuminate\Http\Request;

// REMEMBER TO INCLUDE JWT API AND SECRET IN ENV FILE
define('ZOOM_API_KEY', config('services.zoom.key'));
define('ZOOM_SECRET_KEY', config('services.zoom.secret'));

class MeetingController extends Controller
{
    // ------------------ JWT TOKEN ------------------
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    function getZoomAccessToken()
    {
        $key = ZOOM_SECRET_KEY;
        $payload = array(
            "iss" => ZOOM_API_KEY,
            'exp' => time() + 3600,
        );
        return JWT::encode($payload, $key);
    }

    function createZoomMeeting(Request $request)
    {
        $client = new Http([
            'base_uri' => 'https://api.zoom.us',
        ]);

        $response = $client->request('POST', '/v2/users/me/meetings', [
            "headers" => [
                "Authorization" => "Bearer " . $this->getZoomAccessToken()
            ],
            'json' => [
                "topic" => $request->topic,
                "type" => $request->type, // 1 = INSTANT MEETING, 2 = SCHEDULED MEETING
                "start_time" => $request->start_time, // FORMAT: 2021-12-31 23:59:59 Y-m-d H:i:s
                "duration" => $request->duration, // DURATION IN MINUTES
                "password" => $request->password
            ],
        ]);

        $data = json_decode($response->getBody());

        return $data;
    }

    function updateZoomMeeting(Request $request, $meeting_id)
    {
        $client = new Http([
            'base_uri' => "https://api.zoom.us",
        ]);

        $response = $client->request('PATCH', '/v2/meetings/' . $meeting_id, [
            "headers" => [
                "Authorization" => "Bearer" . $this->getZoomAccessToken()
            ],
            "json" => [
                "topic" => $request->topic,
                "type" => $request->type,
                "start_time" => $request->start_time,
                "duration" => $request->duration,
                "password" => $request->password
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

        return response()->json([
            "data" => $data,
        ]);

        // Uncomment below codes if want to view the meeting details from controller here

        // if (!empty($data)) {
        //     foreach ($data->meetings as $d) {
        //         echo "<h3>Topic: $d->topic</h3>";
        //         echo "Join URL: $d->join_url";
        //     }

        //     if (!empty($data->next_page_token)) {
        //         list_meetings($data->next_page_token);
        //     }
        // }
    }

    function deleteZoomMeeting($meeting_id)
    {
        $client = new Http([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.zoom.us',
        ]);

        $response = $client->request("DELETE", "/v2/meetings/$meeting_id", [
            "headers" => [
                "Authorization" => "Bearer " . $this->getZoomAccessToken()
            ]
        ]);

        // IF MEETING DELETED SUCCESSFULLY
        if (204 == $response->getStatusCode()) {
            return response()->json(['message', 'Meeting ID:' . $meeting_id . ' has been deleted.']);
        }
        else{
            return response()->json([
                'message'=>"Meeting is not deleted",
                'status'=>404
            ]);
        }
    }
}
