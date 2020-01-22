<?php
namespace carlonicora\test;

use carlonicora\minimalism\abstracts\abstractConfigurations;

class configurations extends abstractConfigurations {
    /**
     * @return string
     */
    public function serialiseCookies(): string {
        return '';
    }

    /**
     * @param string $cookies
     */
    public function unserialiseCookies(string $cookies): void {
    }
}