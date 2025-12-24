<?php

class inputSanitizer
{
    function sanitizeUsername($username)
    {
        $username = filter_var($username, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        return ($username);
    }
}
