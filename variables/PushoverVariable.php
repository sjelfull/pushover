<?php
/**
 * Pushover plugin for Craft CMS
 *
 * Pushover Variable
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   Pushover
 * @since     1.0.0
 */

namespace Craft;

class PushoverVariable
{
    /**
     */
    public function send($options = [])
    {
        return craft()->pushover->send($options);
    }
}