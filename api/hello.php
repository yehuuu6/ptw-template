<?php
define('FILE_ACCESS', TRUE);

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
    require_once("{$_SERVER['DOCUMENT_ROOT']}/config/functions.inc.php");
    $req = $_POST['request'];

    if ($req == 'hello') {
        sendSuccessResponse('Hello Developer!');
    } else {
        sendErrorResponse('Invalid request.', 'invalid'); // the element that has 'invalid' as the id will be highlighted in red
    }
} else {
    header("HTTP/1.1 403 Forbidden");
    include($_SERVER['DOCUMENT_ROOT'] . '/errors/403.html');
    exit;
}
