<?php
/**
 * HkDocumentTypeConstants
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
 * HkDocumentTypeConstants Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HkDocumentTypeConstants
{
    /**
     * Possible values of this enum
     */
    const HKID = 'HKID';
    const OTHID = 'OTHID';
    const PASSNO = 'PASSNO';
    const BIRTHCERT = 'BIRTHCERT';
    const OTHIDV = 'OTHIDV';
    const BR = 'BR';
    const CI = 'CI';
    const CRS = 'CRS';
    const HKSARG = 'HKSARG';
    const HKORDINANCE = 'HKORDINANCE';
    const OTHORG = 'OTHORG';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HKID,
            self::OTHID,
            self::PASSNO,
            self::BIRTHCERT,
            self::OTHIDV,
            self::BR,
            self::CI,
            self::CRS,
            self::HKSARG,
            self::HKORDINANCE,
            self::OTHORG,
        ];
    }
}


