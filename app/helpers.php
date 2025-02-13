<?php

function public_url(string|null $path): string
{
    if (!$path) {
        return "";
    }

    return url("storage/" . $path);
}
