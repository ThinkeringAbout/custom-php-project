<?php

namespace wfm;

trait TSingleton
{
    private static ?self $instance = null;

    private function __construct(){}

    public static function getInstance(): static
    {
        return self::$instance ?? self::$instance = new self();
    }
}