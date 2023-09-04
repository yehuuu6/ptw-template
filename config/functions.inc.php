<?php

if (!defined('FILE_ACCESS')) {
    header("HTTP/1.1 403 Forbidden");
    include($_SERVER['DOCUMENT_ROOT'] . '/errors/403.html');
    exit;
}

/**
 * Sends an error response to the client and terminates the script.
 * status = error, log = the error message, cause = the id of the element that caused the error
 */
function sendErrorResponse(string $log, string $cause = 'none')
{
    $result = array('error', $log, $cause);
    echo json_encode($result);
    die();
}

/**
 * Sends a success response to the client and terminates the script.
 * status = success, log = the success message, cause = none
 */
function sendSuccessResponse(string $log)
{
    $result = array('success', $log, 'none');
    echo json_encode($result);
    die();
}
