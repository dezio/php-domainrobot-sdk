<?php
/**
 * JobStatusConstants
 *
 * PHP version 5
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Domainrobot JSON API
 *
 * Domainrobot JSON API for managing: Domains, SSL            Certificates, DNS and            much more.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Domainrobot\Model;
use \Domainrobot\ObjectSerializer;

/**
 * JobStatusConstants Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobStatusConstants
{
    /**
     * Possible values of this enum
     */
    const RUNNING = 'RUNNING';
    const SUCCESS = 'SUCCESS';
    const FAILED = 'FAILED';
    const CANCELED = 'CANCELED';
    const SUPPORT = 'SUPPORT';
    const DEFERRED = 'DEFERRED';
    const NOT_SET = 'NOT_SET';
    const WAIT = 'WAIT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RUNNING,
            self::SUCCESS,
            self::FAILED,
            self::CANCELED,
            self::SUPPORT,
            self::DEFERRED,
            self::NOT_SET,
            self::WAIT,
        ];
    }
}


