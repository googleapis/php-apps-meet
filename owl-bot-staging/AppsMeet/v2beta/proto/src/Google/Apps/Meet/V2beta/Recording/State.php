<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2beta/resource.proto

namespace Google\Apps\Meet\V2beta\Recording;

use UnexpectedValueException;

/**
 * Current state of the recording session.
 *
 * Protobuf type <code>google.apps.meet.v2beta.Recording.State</code>
 */
class State
{
    /**
     * Default, never used.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * An active recording session has started.
     *
     * Generated from protobuf enum <code>STARTED = 1;</code>
     */
    const STARTED = 1;
    /**
     * This recording session has ended, but the recording file hasn't been
     * generated yet.
     *
     * Generated from protobuf enum <code>ENDED = 2;</code>
     */
    const ENDED = 2;
    /**
     * Recording file is generated and ready to download.
     *
     * Generated from protobuf enum <code>FILE_GENERATED = 3;</code>
     */
    const FILE_GENERATED = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::STARTED => 'STARTED',
        self::ENDED => 'ENDED',
        self::FILE_GENERATED => 'FILE_GENERATED',
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
class_alias(State::class, \Google\Apps\Meet\V2beta\Recording_State::class);

