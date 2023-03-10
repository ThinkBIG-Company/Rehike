<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: innertube/navigation/navigation_endpoints.proto

namespace Com\Youtube\Innertube\Navigation\NavigationEndpoint;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.youtube.innertube.navigation.NavigationEndpoint.SearchEndpoint</code>
 */
class SearchEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string query = 1;</code>
     */
    protected $query = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Innertube\Navigation\NavigationEndpoints::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string query = 1;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>string query = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SearchEndpoint::class, \Com\Youtube\Innertube\Navigation\NavigationEndpoint_SearchEndpoint::class);

