<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/firebase/analytics/v1/data.proto

namespace Google\Events\Firebase\Analytics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User's geographic informaiton.
 *
 * Generated from protobuf message <code>google.events.firebase.analytics.v1.GeoInfo</code>
 */
class GeoInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The geographic continent.
     * Eg. Americas
     *
     * Generated from protobuf field <code>string continent = 1;</code>
     */
    protected $continent = '';
    /**
     * The geographic country.
     * Eg. Brazil
     *
     * Generated from protobuf field <code>string country = 2;</code>
     */
    protected $country = '';
    /**
     * The geographic region.
     * Eg. State of Sao Paulo
     *
     * Generated from protobuf field <code>string region = 3;</code>
     */
    protected $region = '';
    /**
     * The geographic city.
     * Eg. Sao Paulo
     *
     * Generated from protobuf field <code>string city = 4;</code>
     */
    protected $city = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $continent
     *           The geographic continent.
     *           Eg. Americas
     *     @type string $country
     *           The geographic country.
     *           Eg. Brazil
     *     @type string $region
     *           The geographic region.
     *           Eg. State of Sao Paulo
     *     @type string $city
     *           The geographic city.
     *           Eg. Sao Paulo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Events\Firebase\Analytics\V1\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The geographic continent.
     * Eg. Americas
     *
     * Generated from protobuf field <code>string continent = 1;</code>
     * @return string
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * The geographic continent.
     * Eg. Americas
     *
     * Generated from protobuf field <code>string continent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContinent($var)
    {
        GPBUtil::checkString($var, True);
        $this->continent = $var;

        return $this;
    }

    /**
     * The geographic country.
     * Eg. Brazil
     *
     * Generated from protobuf field <code>string country = 2;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * The geographic country.
     * Eg. Brazil
     *
     * Generated from protobuf field <code>string country = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * The geographic region.
     * Eg. State of Sao Paulo
     *
     * Generated from protobuf field <code>string region = 3;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * The geographic region.
     * Eg. State of Sao Paulo
     *
     * Generated from protobuf field <code>string region = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * The geographic city.
     * Eg. Sao Paulo
     *
     * Generated from protobuf field <code>string city = 4;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * The geographic city.
     * Eg. Sao Paulo
     *
     * Generated from protobuf field <code>string city = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

}

