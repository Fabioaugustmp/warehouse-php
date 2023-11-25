<?php

function addSuccessMessage($message) {
    $_SESSION['message'] = [
        'type' => 'success',
        'message' => $message
    ];
}

function addErrorMessage($message) {
    $_SESSION['message'] = [
        'type' => 'error',
        'message' => $message
    ];
}