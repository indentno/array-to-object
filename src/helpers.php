<?php

if (!function_exists('arrayToObject')) {
    /**
     * Converts an array to an object
     *
     * @param array $data
     * @return object
     */
    function arrayToObject(array $data)
    {
        return new \Sempro\ArrayToObject\Json($data);
    }
}
