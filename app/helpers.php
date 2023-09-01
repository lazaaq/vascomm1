<?php

function responseAPI($success, $message, $data, $code) {
    $response = [
        'success' => $success,
        'message' => $message,
        'data' => $data
    ];
    return response()->json($response, $code);
}