<?php

namespace app\cloudflare\sdk\Endpoints;

use Cloudflare\API\Adapter\Adapter;
use Cloudflare\API\Traits\BodyAccessorTrait;

class ZonesSettings
{
    use BodyAccessorTrait;

    public const FLAG_SSL       = ['off', 'full', 'flexible', 'strict'];
    public const FLAG_ON_OFF    = ['on' => 1, 'off' => 0];
    public const EXCLUDE_ON_OFF = ['ssl'];

    protected $adapter;

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function getSettingsByZone($zoneID)
    {
        $response = $this->adapter->get('zones/' . $zoneID . '/settings');
        $this->body = $response->getBody();
        $result = [];
        foreach (json_decode($this->body)->result as $item) {

            $value = $item->value;

            if (is_object($item->value)) {
                $value = $item->value;
            }

            if (!isset(self::EXCLUDE_ON_OFF[$item->id])
                && array_key_exists($item->id, self::FLAG_ON_OFF)) {
                $value = self::FLAG_ON_OFF[$item->value];
            }

            $result[$item->id] = $value;
        }

        return $result;
    }

    public function setSecurityLevel($id, $value)
    {
        $response = $this->adapter->patch('zones/' . $id . '/settings/security_level', ['value' => $value]);
        $this->body = $response->getBody();
        return json_decode($this->body)->result;

    }

    public function setDev($id, $value)
    {
        $response = $this->adapter->patch('zones/' . $id . '/settings/development_mode', ['value' => $value]);
        $this->body = $response->getBody();
        return json_decode($this->body)->result;

    }

    public function setRewrite($id, $value)
    {
        $response = $this->adapter->patch('zones/' . $id . '/settings/automatic_https_rewrites', ['value' => $value]);
        $this->body = $response->getBody();
        return json_decode($this->body)->result;
    }

    public function setSsl($id, $value)
    {
        $response = $this->adapter->patch('zones/' . $id . '/settings/ssl', ['value' => $value]);
        $this->body = $response->getBody();
        return json_decode($this->body)->result;
    }

    public function setTls($id, $value)
    {
        $response = $this->adapter->patch('zones/' . $id . '/settings/min_tls_version', ['value' => $value]);
        $this->body = $response->getBody();
        return json_decode($this->body)->result;
    }

    public function purge($id)
    {
        $response = $this->adapter->post('zones/' . $id . '/purge_cache', ['purge_everything' => true]);
        $this->body = $response->getBody();
        return json_decode($this->body)->result;
    }

    public function delete($id)
    {
        $response = $this->adapter->delete('zones/' . $id);
        $this->body = $response->getBody();
        return json_decode($this->body)->result;
    }
}
