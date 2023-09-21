<?php
define('FILE_ACCESS', TRUE);

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
    require_once("{$_SERVER['DOCUMENT_ROOT']}/config/functions.inc.php");
    $req = $_POST['request'];

    // Get todo from jsonplaceholder
    $url = "https://jsonplaceholder.typicode.com/todos/1";
    $json_data = file_get_contents($url);

    if ($req === "get-todo") {
        sendSuccessResponse($json_data);
    } else {
        sendErrorResponse("Invalid request", "invalid");
    }
} else {
    header("HTTP/1.1 403 Forbidden");
    include($_SERVER['DOCUMENT_ROOT'] . '/errors/403.html');
    exit;
}
