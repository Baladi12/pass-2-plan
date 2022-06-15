<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/feed_attribute_type.proto

namespace Google\Ads\GoogleAds\V8\Enums\FeedAttributeTypeEnum;

use UnexpectedValueException;

/**
 * Possible data types for a feed attribute.
 *
 * Protobuf type <code>google.ads.googleads.v8.enums.FeedAttributeTypeEnum.FeedAttributeType</code>
 */
class FeedAttributeType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Int64.
     *
     * Generated from protobuf enum <code>INT64 = 2;</code>
     */
    const INT64 = 2;
    /**
     * Double.
     *
     * Generated from protobuf enum <code>DOUBLE = 3;</code>
     */
    const DOUBLE = 3;
    /**
     * String.
     *
     * Generated from protobuf enum <code>STRING = 4;</code>
     */
    const STRING = 4;
    /**
     * Boolean.
     *
     * Generated from protobuf enum <code>BOOLEAN = 5;</code>
     */
    const BOOLEAN = 5;
    /**
     * Url.
     *
     * Generated from protobuf enum <code>URL = 6;</code>
     */
    const URL = 6;
    /**
     * Datetime.
     *
     * Generated from protobuf enum <code>DATE_TIME = 7;</code>
     */
    const DATE_TIME = 7;
    /**
     * Int64 list.
     *
     * Generated from protobuf enum <code>INT64_LIST = 8;</code>
     */
    const INT64_LIST = 8;
    /**
     * Double (8 bytes) list.
     *
     * Generated from protobuf enum <code>DOUBLE_LIST = 9;</code>
     */
    const DOUBLE_LIST = 9;
    /**
     * String list.
     *
     * Generated from protobuf enum <code>STRING_LIST = 10;</code>
     */
    const STRING_LIST = 10;
    /**
     * Boolean list.
     *
     * Generated from protobuf enum <code>BOOLEAN_LIST = 11;</code>
     */
    const BOOLEAN_LIST = 11;
    /**
     * Url list.
     *
     * Generated from protobuf enum <code>URL_LIST = 12;</code>
     */
    const URL_LIST = 12;
    /**
     * Datetime list.
     *
     * Generated from protobuf enum <code>DATE_TIME_LIST = 13;</code>
     */
    const DATE_TIME_LIST = 13;
    /**
     * Price.
     *
     * Generated from protobuf enum <code>PRICE = 14;</code>
     */
    const PRICE = 14;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INT64 => 'INT64',
        self::DOUBLE => 'DOUBLE',
        self::STRING => 'STRING',
        self::BOOLEAN => 'BOOLEAN',
        self::URL => 'URL',
        self::DATE_TIME => 'DATE_TIME',
        self::INT64_LIST => 'INT64_LIST',
        self::DOUBLE_LIST => 'DOUBLE_LIST',
        self::STRING_LIST => 'STRING_LIST',
        self::BOOLEAN_LIST => 'BOOLEAN_LIST',
        self::URL_LIST => 'URL_LIST',
        self::DATE_TIME_LIST => 'DATE_TIME_LIST',
        self::PRICE => 'PRICE',
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
class_alias(FeedAttributeType::class, \Google\Ads\GoogleAds\V8\Enums\FeedAttributeTypeEnum_FeedAttributeType::class);

