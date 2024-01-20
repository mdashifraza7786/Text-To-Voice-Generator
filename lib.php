<?php
$t = time();
$l = "__f23XasCAS/".$t.".mp3";
$voiceId = $_POST['model'];
$xiApiKey = "Your_API_KEY_HERE";
$got = $_POST['script'];
$url = "https://api.elevenlabs.io/v1/text-to-speech/$voiceId/stream";

$headers = [
    'Accept: audio/mpeg',
    'Content-Type: application/json',
    "xi-api-key: $xiApiKey"
];

$data = [
    "text" => $got,
    "model_id" => "eleven_multilingual_v1",
    
];

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

if ($response === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    $file = fopen($l, 'w');
    fwrite($file, $response);
    fclose($file);
}
echo $l;

curl_close($ch);

?>
