<?php
/**
 * Pushover plugin for Craft CMS
 *
 * Pushover Service
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   Pushover
 * @since     1.0.0
 */

namespace Craft;

use LeonardoTeixeira\Pushover\Client;
use LeonardoTeixeira\Pushover\Message;
use LeonardoTeixeira\Pushover\Priority;
use LeonardoTeixeira\Pushover\Sound;
use LeonardoTeixeira\Pushover\Exceptions\PushoverException;

class PushoverService extends BaseApplicationComponent
{
    public function init() {
        parent::init();

        require_once __DIR__ . '/../vendor/autoload.php';
    }
    /**
     */
    public function send($options = [])
    {
        $supportedSounds = [
            'pushover' => Sound::PUSHOVER,
            'bike' => Sound::BIKE,
            'bugle' => Sound::BUGLE,
            'cashregister' => Sound::CASHREGISTER,
            'classical' => Sound::CLASSICAL,
            'cosmic' => Sound::COSMIC,
            'falling' => Sound::FALLING,
            'gamelan' => Sound::GAMELAN,
            'incoming' => Sound::INCOMING,
            'intermission' => Sound::INTERMISSION,
            'magic' => Sound::MAGIC,
            'mechanical' => Sound::MECHANICAL,
            'pianobar' => Sound::PIANOBAR,
            'siren' => Sound::SIREN,
            'spacealarm' => Sound::SPACEALARM,
            'tugboat' => Sound::TUGBOAT,
            'alien' => Sound::ALIEN,
            'climb' => Sound::CLIMB,
            'persistent' => Sound::PERSISTENT,
            'echo' => Sound::ECHOO,
            'updown' => Sound::UPDOWN,
            'none' => Sound::NONE,
        ];

        $supportedPriorities = [
            'lowest' => Priority::LOWEST,
            'low' => Priority::LOW,
            'normal' => Priority::NORMAL,
            'high' => Priority::HIGH,
            'emergency' => Priority::EMERGENCY,
        ];

        date_default_timezone_set('UTC');
        $userKey = craft()->config->get('userKey');
        $apiToken = craft()->config->get('apiToken');

        if (!$userKey || !$apiToken) {
            throw new Exception('Both the Pushover apiToken and the userKey needs to be setup');
        }

        $client = new Client($userKey, $apiToken);
        $message = new Message();

        foreach ($options as $key => $value) {
            switch ($key) {
                case 'title':
                    $message->setTitle($value);
                break;

                case 'message':
                    $message->setMessage($value);
                break;

                case 'sound':
                    if (array_key_exists($value, $supportedSounds)) {
                        $message->setSound($supportedSounds[$value]);
                    }
                break;

                case 'priority':
                    if (array_key_exists($value, $supportedPriorities)) {
                        $message->setPriority($supportedPriorities[$value]);
                    }
                break;

                case 'html':
                    $message->setHtml($value);
                break;

                case 'date':
                    if ($value instanceof \DateTime) {
                        $message->setDate($value);
                    }
                break;

                case 'url':
                    $message->setUrl($value);
                break;

                case 'urlTitle':
                    $message->setUrlTitle($value);
                break;

                case 'callback':
                    $message->setCallback($value);
                break;

                case 'retry':
                    $message->setRetry($value);
                break;
            }
        }

        try {
            $client->push($message);
            return true;
        } catch (PushoverException $e) {
            PushoverPlugin::log(LogLevel::Error, 'ERROR: ', $e->getMessage());
            return false;
        }
    }

}