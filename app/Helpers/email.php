<?php

if (!function_exists('contact_email')) {
    function contact_email() {
        return 'contact@'.config('app.domains.main');
    }
}