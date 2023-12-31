<?php

function addSuccessMessage($message) {
    $_SESSION['message'] = [
        'type' => 'success',
        'message' => $message
    ];
}

function addPrimaryMessage($message) {
    $_SESSION['message'] = [
        'type' => 'primary',
        'message' => $message
    ];
}

function addWarnMessage($message) {
    $_SESSION['message'] = [
        'type' => 'error',
        'message' => $message
    ];
}

function addErrorMessage($message) {
    $_SESSION['message'] = [
        'type' => 'error',
        'message' => $message
    ];
}