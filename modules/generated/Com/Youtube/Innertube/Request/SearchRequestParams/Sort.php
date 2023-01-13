<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: innertube/request/search_request_params.proto

namespace Com\Youtube\Innertube\Request\SearchRequestParams;

use UnexpectedValueException;

/**
 * Protobuf type <code>com.youtube.innertube.request.SearchRequestParams.Sort</code>
 */
class Sort
{
    /**
     * Generated from protobuf enum <code>RELEVANCE = 0;</code>
     */
    const RELEVANCE = 0;
    /**
     * Generated from protobuf enum <code>RATING = 1;</code>
     */
    const RATING = 1;
    /**
     * Generated from protobuf enum <code>UPLOAD_DATE = 2;</code>
     */
    const UPLOAD_DATE = 2;
    /**
     * Generated from protobuf enum <code>VIEW_COUNT = 3;</code>
     */
    const VIEW_COUNT = 3;

    private static $valueToName = [
        self::RELEVANCE => 'RELEVANCE',
        self::RATING => 'RATING',
        self::UPLOAD_DATE => 'UPLOAD_DATE',
        self::VIEW_COUNT => 'VIEW_COUNT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Sort::class, \Com\Youtube\Innertube\Request\SearchRequestParams_Sort::class);

