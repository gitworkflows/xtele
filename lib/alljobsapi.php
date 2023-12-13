<?php
$req_para = array("email" => "jobs@teletalk.com.bd", "password" => "teleJobs321#");
$data_json = json_encode($req_para);
$url_tok = "https://alljobs.teletalk.com.bd/api/auth/token/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url_tok);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($data_json)));
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
curl_close($ch);

$jfo = json_decode($response);
$acc_token = $jfo->access;
$user = $_POST['member_id'];
$req_para2 = array("userid" => "$user");
$data_json = json_encode($req_para2);
$url_inf = "https://alljobs.teletalk.com.bd/api/user/all/information/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url_inf);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer ' . $acc_token));
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
curl_close($ch);
$jobs_info = json_decode($response);



$jobs_info->files = (object) array();
for ($i = 0; $i < 2; $i++) {
    $file_type = $i == 0 ? "image" : "signature";
    $req_para3 = array("userid" => "$user", "file_type" => $file_type);
    $data_json1 = json_encode($req_para3);
    $url_inf = "https://alljobs.teletalk.com.bd/api/user/file/";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url_inf);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 90);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer ' . $acc_token));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response1  = curl_exec($ch);
    curl_close($ch);
    $file_api_response = json_decode($response1);
    if ($file_api_response && $file_api_response->data && $file_api_response->data->file) {
        if ($i == 0) {
            $jobs_info->files->image = $file_api_response->data->file;
        } else {
            $jobs_info->files->signature = $file_api_response->data->file;
        }
    }
}