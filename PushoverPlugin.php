<?php
/**
 * Pushover plugin for Craft CMS
 *
 * Send messages from Craft to Pushover
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   Pushover
 * @since     1.0.0
 */

namespace Craft;

class PushoverPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Pushover');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Send messages from Craft to Pushover');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://superbig.co/plugins/pushover';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://superbig.co/plugins/pushover/feed';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.1';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Superbig';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://superbig.co';
    }

}
