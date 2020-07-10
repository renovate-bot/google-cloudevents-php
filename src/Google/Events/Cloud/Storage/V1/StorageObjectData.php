<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/cloud/storage/v1/data.proto

namespace Google\Events\Cloud\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An object within Google Cloud Storage.
 *
 * Generated from protobuf message <code>google.events.cloud.storage.v1.StorageObjectData</code>
 */
class StorageObjectData extends \Google\Protobuf\Internal\Message
{
    /**
     * Content-Encoding of the object data, matching
     * [https://tools.ietf.org/html/rfc7231#section-3.1.2.2][RFC 7231 §3.1.2.2]
     *
     * Generated from protobuf field <code>string content_encoding = 1;</code>
     */
    protected $content_encoding = '';
    /**
     * Content-Disposition of the object data, matching
     * [https://tools.ietf.org/html/rfc6266][RFC 6266].
     *
     * Generated from protobuf field <code>string content_disposition = 2;</code>
     */
    protected $content_disposition = '';
    /**
     * Cache-Control directive for the object data, matching
     * [https://tools.ietf.org/html/rfc7234#section-5.2"][RFC 7234 §5.2].
     *
     * Generated from protobuf field <code>string cache_control = 3;</code>
     */
    protected $cache_control = '';
    /**
     * Content-Language of the object data, matching
     * [https://tools.ietf.org/html/rfc7231#section-3.1.3.2][RFC 7231 §3.1.3.2].
     *
     * Generated from protobuf field <code>string content_language = 5;</code>
     */
    protected $content_language = '';
    /**
     * The version of the metadata for this object at this generation. Used for
     * preconditions and for detecting changes in metadata. A metageneration
     * number is only meaningful in the context of a particular generation of a
     * particular object.
     *
     * Generated from protobuf field <code>int64 metageneration = 6;</code>
     */
    protected $metageneration = 0;
    /**
     * The deletion time of the object. Will be returned if and only if this
     * version of the object has been deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time_deleted = 7;</code>
     */
    protected $time_deleted = null;
    /**
     * Content-Type of the object data, matching
     * [https://tools.ietf.org/html/rfc7231#section-3.1.1.5][RFC 7231 §3.1.1.5].
     * If an object is stored without a Content-Type, it is served as
     * `application/octet-stream`.
     *
     * Generated from protobuf field <code>string content_type = 8;</code>
     */
    protected $content_type = '';
    /**
     * Content-Length of the object data in bytes, matching
     * [https://tools.ietf.org/html/rfc7230#section-3.3.2][RFC 7230 §3.3.2].
     *
     * Generated from protobuf field <code>int64 size = 9;</code>
     */
    protected $size = 0;
    /**
     * The creation time of the object.
     * Attempting to set this field will result in an error.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time_created = 10;</code>
     */
    protected $time_created = null;
    /**
     * CRC32c checksum. For more information about using the CRC32c
     * checksum, see
     * [https://cloud.google.com/storage/docs/hashes-etags#_JSONAPI][Hashes and
     * ETags: Best Practices].
     *
     * Generated from protobuf field <code>string crc32c = 11;</code>
     */
    protected $crc32c = '';
    /**
     * Number of underlying components that make up this object. Components are
     * accumulated by compose operations.
     * Attempting to set this field will result in an error.
     *
     * Generated from protobuf field <code>int32 component_count = 12;</code>
     */
    protected $component_count = 0;
    /**
     * MD5 hash of the data; encoded using base64 as per
     * [https://tools.ietf.org/html/rfc4648#section-4][RFC 4648 §4]. For more
     * information about using the MD5 hash, see
     * [https://cloud.google.com/storage/docs/hashes-etags#_JSONAPI][Hashes and
     * ETags: Best Practices].
     *
     * Generated from protobuf field <code>string md5_hash = 13;</code>
     */
    protected $md5_hash = '';
    /**
     * HTTP 1.1 Entity tag for the object. See
     * [https://tools.ietf.org/html/rfc7232#section-2.3][RFC 7232 §2.3].
     *
     * Generated from protobuf field <code>string etag = 14;</code>
     */
    protected $etag = '';
    /**
     * The modification time of the object metadata.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 15;</code>
     */
    protected $updated = null;
    /**
     * Storage class of the object.
     *
     * Generated from protobuf field <code>string storage_class = 16;</code>
     */
    protected $storage_class = '';
    /**
     * Cloud KMS Key used to encrypt this object, if the object is encrypted by
     * such a key.
     *
     * Generated from protobuf field <code>string kms_key_name = 17;</code>
     */
    protected $kms_key_name = '';
    /**
     * The time at which the object's storage class was last changed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time_storage_class_updated = 18;</code>
     */
    protected $time_storage_class_updated = null;
    /**
     * Whether an object is under temporary hold.
     *
     * Generated from protobuf field <code>bool temporary_hold = 19;</code>
     */
    protected $temporary_hold = false;
    /**
     * A server-determined value that specifies the earliest time that the
     * object's retention period expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp retention_expiration_time = 20;</code>
     */
    protected $retention_expiration_time = null;
    /**
     * User-provided metadata, in key/value pairs.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 21;</code>
     */
    private $metadata;
    /**
     * Whether an object is under event-based hold.
     *
     * Generated from protobuf field <code>bool event_based_hold = 29;</code>
     */
    protected $event_based_hold = false;
    /**
     * The name of the object.
     *
     * Generated from protobuf field <code>string name = 23;</code>
     */
    protected $name = '';
    /**
     * The ID of the object, including the bucket name, object name, and
     * generation number.
     *
     * Generated from protobuf field <code>string id = 24;</code>
     */
    protected $id = '';
    /**
     * The name of the bucket containing this object.
     *
     * Generated from protobuf field <code>string bucket = 25;</code>
     */
    protected $bucket = '';
    /**
     * The content generation of this object. Used for object versioning.
     * Attempting to set this field will result in an error.
     *
     * Generated from protobuf field <code>int64 generation = 26;</code>
     */
    protected $generation = 0;
    /**
     * Metadata of customer-supplied encryption key, if the object is encrypted by
     * such a key.
     *
     * Generated from protobuf field <code>.google.events.cloud.storage.v1.StorageObjectData.CustomerEncryption customer_encryption = 28;</code>
     */
    protected $customer_encryption = null;
    /**
     * The link to this object.
     *
     * Generated from protobuf field <code>string media_link = 100;</code>
     */
    protected $media_link = '';
    /**
     * Media download link.
     *
     * Generated from protobuf field <code>string self_link = 101;</code>
     */
    protected $self_link = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $content_encoding
     *           Content-Encoding of the object data, matching
     *           [https://tools.ietf.org/html/rfc7231#section-3.1.2.2][RFC 7231 §3.1.2.2]
     *     @type string $content_disposition
     *           Content-Disposition of the object data, matching
     *           [https://tools.ietf.org/html/rfc6266][RFC 6266].
     *     @type string $cache_control
     *           Cache-Control directive for the object data, matching
     *           [https://tools.ietf.org/html/rfc7234#section-5.2"][RFC 7234 §5.2].
     *     @type string $content_language
     *           Content-Language of the object data, matching
     *           [https://tools.ietf.org/html/rfc7231#section-3.1.3.2][RFC 7231 §3.1.3.2].
     *     @type int|string $metageneration
     *           The version of the metadata for this object at this generation. Used for
     *           preconditions and for detecting changes in metadata. A metageneration
     *           number is only meaningful in the context of a particular generation of a
     *           particular object.
     *     @type \Google\Protobuf\Timestamp $time_deleted
     *           The deletion time of the object. Will be returned if and only if this
     *           version of the object has been deleted.
     *     @type string $content_type
     *           Content-Type of the object data, matching
     *           [https://tools.ietf.org/html/rfc7231#section-3.1.1.5][RFC 7231 §3.1.1.5].
     *           If an object is stored without a Content-Type, it is served as
     *           `application/octet-stream`.
     *     @type int|string $size
     *           Content-Length of the object data in bytes, matching
     *           [https://tools.ietf.org/html/rfc7230#section-3.3.2][RFC 7230 §3.3.2].
     *     @type \Google\Protobuf\Timestamp $time_created
     *           The creation time of the object.
     *           Attempting to set this field will result in an error.
     *     @type string $crc32c
     *           CRC32c checksum. For more information about using the CRC32c
     *           checksum, see
     *           [https://cloud.google.com/storage/docs/hashes-etags#_JSONAPI][Hashes and
     *           ETags: Best Practices].
     *     @type int $component_count
     *           Number of underlying components that make up this object. Components are
     *           accumulated by compose operations.
     *           Attempting to set this field will result in an error.
     *     @type string $md5_hash
     *           MD5 hash of the data; encoded using base64 as per
     *           [https://tools.ietf.org/html/rfc4648#section-4][RFC 4648 §4]. For more
     *           information about using the MD5 hash, see
     *           [https://cloud.google.com/storage/docs/hashes-etags#_JSONAPI][Hashes and
     *           ETags: Best Practices].
     *     @type string $etag
     *           HTTP 1.1 Entity tag for the object. See
     *           [https://tools.ietf.org/html/rfc7232#section-2.3][RFC 7232 §2.3].
     *     @type \Google\Protobuf\Timestamp $updated
     *           The modification time of the object metadata.
     *     @type string $storage_class
     *           Storage class of the object.
     *     @type string $kms_key_name
     *           Cloud KMS Key used to encrypt this object, if the object is encrypted by
     *           such a key.
     *     @type \Google\Protobuf\Timestamp $time_storage_class_updated
     *           The time at which the object's storage class was last changed.
     *     @type bool $temporary_hold
     *           Whether an object is under temporary hold.
     *     @type \Google\Protobuf\Timestamp $retention_expiration_time
     *           A server-determined value that specifies the earliest time that the
     *           object's retention period expires.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           User-provided metadata, in key/value pairs.
     *     @type bool $event_based_hold
     *           Whether an object is under event-based hold.
     *     @type string $name
     *           The name of the object.
     *     @type string $id
     *           The ID of the object, including the bucket name, object name, and
     *           generation number.
     *     @type string $bucket
     *           The name of the bucket containing this object.
     *     @type int|string $generation
     *           The content generation of this object. Used for object versioning.
     *           Attempting to set this field will result in an error.
     *     @type \Google\Events\Cloud\Storage\V1\StorageObjectData\CustomerEncryption $customer_encryption
     *           Metadata of customer-supplied encryption key, if the object is encrypted by
     *           such a key.
     *     @type string $media_link
     *           The link to this object.
     *     @type string $self_link
     *           Media download link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Events\Cloud\Storage\V1\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Content-Encoding of the object data, matching
     * [https://tools.ietf.org/html/rfc7231#section-3.1.2.2][RFC 7231 §3.1.2.2]
     *
     * Generated from protobuf field <code>string content_encoding = 1;</code>
     * @return string
     */
    public function getContentEncoding()
    {
        return $this->content_encoding;
    }

    /**
     * Content-Encoding of the object data, matching
     * [https://tools.ietf.org/html/rfc7231#section-3.1.2.2][RFC 7231 §3.1.2.2]
     *
     * Generated from protobuf field <code>string content_encoding = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContentEncoding($var)
    {
        GPBUtil::checkString($var, True);
        $this->content_encoding = $var;

        return $this;
    }

    /**
     * Content-Disposition of the object data, matching
     * [https://tools.ietf.org/html/rfc6266][RFC 6266].
     *
     * Generated from protobuf field <code>string content_disposition = 2;</code>
     * @return string
     */
    public function getContentDisposition()
    {
        return $this->content_disposition;
    }

    /**
     * Content-Disposition of the object data, matching
     * [https://tools.ietf.org/html/rfc6266][RFC 6266].
     *
     * Generated from protobuf field <code>string content_disposition = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContentDisposition($var)
    {
        GPBUtil::checkString($var, True);
        $this->content_disposition = $var;

        return $this;
    }

    /**
     * Cache-Control directive for the object data, matching
     * [https://tools.ietf.org/html/rfc7234#section-5.2"][RFC 7234 §5.2].
     *
     * Generated from protobuf field <code>string cache_control = 3;</code>
     * @return string
     */
    public function getCacheControl()
    {
        return $this->cache_control;
    }

    /**
     * Cache-Control directive for the object data, matching
     * [https://tools.ietf.org/html/rfc7234#section-5.2"][RFC 7234 §5.2].
     *
     * Generated from protobuf field <code>string cache_control = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCacheControl($var)
    {
        GPBUtil::checkString($var, True);
        $this->cache_control = $var;

        return $this;
    }

    /**
     * Content-Language of the object data, matching
     * [https://tools.ietf.org/html/rfc7231#section-3.1.3.2][RFC 7231 §3.1.3.2].
     *
     * Generated from protobuf field <code>string content_language = 5;</code>
     * @return string
     */
    public function getContentLanguage()
    {
        return $this->content_language;
    }

    /**
     * Content-Language of the object data, matching
     * [https://tools.ietf.org/html/rfc7231#section-3.1.3.2][RFC 7231 §3.1.3.2].
     *
     * Generated from protobuf field <code>string content_language = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setContentLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->content_language = $var;

        return $this;
    }

    /**
     * The version of the metadata for this object at this generation. Used for
     * preconditions and for detecting changes in metadata. A metageneration
     * number is only meaningful in the context of a particular generation of a
     * particular object.
     *
     * Generated from protobuf field <code>int64 metageneration = 6;</code>
     * @return int|string
     */
    public function getMetageneration()
    {
        return $this->metageneration;
    }

    /**
     * The version of the metadata for this object at this generation. Used for
     * preconditions and for detecting changes in metadata. A metageneration
     * number is only meaningful in the context of a particular generation of a
     * particular object.
     *
     * Generated from protobuf field <code>int64 metageneration = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMetageneration($var)
    {
        GPBUtil::checkInt64($var);
        $this->metageneration = $var;

        return $this;
    }

    /**
     * The deletion time of the object. Will be returned if and only if this
     * version of the object has been deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time_deleted = 7;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getTimeDeleted()
    {
        return $this->time_deleted;
    }

    /**
     * The deletion time of the object. Will be returned if and only if this
     * version of the object has been deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time_deleted = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimeDeleted($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time_deleted = $var;

        return $this;
    }

    /**
     * Content-Type of the object data, matching
     * [https://tools.ietf.org/html/rfc7231#section-3.1.1.5][RFC 7231 §3.1.1.5].
     * If an object is stored without a Content-Type, it is served as
     * `application/octet-stream`.
     *
     * Generated from protobuf field <code>string content_type = 8;</code>
     * @return string
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * Content-Type of the object data, matching
     * [https://tools.ietf.org/html/rfc7231#section-3.1.1.5][RFC 7231 §3.1.1.5].
     * If an object is stored without a Content-Type, it is served as
     * `application/octet-stream`.
     *
     * Generated from protobuf field <code>string content_type = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setContentType($var)
    {
        GPBUtil::checkString($var, True);
        $this->content_type = $var;

        return $this;
    }

    /**
     * Content-Length of the object data in bytes, matching
     * [https://tools.ietf.org/html/rfc7230#section-3.3.2][RFC 7230 §3.3.2].
     *
     * Generated from protobuf field <code>int64 size = 9;</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Content-Length of the object data in bytes, matching
     * [https://tools.ietf.org/html/rfc7230#section-3.3.2][RFC 7230 §3.3.2].
     *
     * Generated from protobuf field <code>int64 size = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->size = $var;

        return $this;
    }

    /**
     * The creation time of the object.
     * Attempting to set this field will result in an error.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time_created = 10;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getTimeCreated()
    {
        return $this->time_created;
    }

    /**
     * The creation time of the object.
     * Attempting to set this field will result in an error.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time_created = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimeCreated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time_created = $var;

        return $this;
    }

    /**
     * CRC32c checksum. For more information about using the CRC32c
     * checksum, see
     * [https://cloud.google.com/storage/docs/hashes-etags#_JSONAPI][Hashes and
     * ETags: Best Practices].
     *
     * Generated from protobuf field <code>string crc32c = 11;</code>
     * @return string
     */
    public function getCrc32C()
    {
        return $this->crc32c;
    }

    /**
     * CRC32c checksum. For more information about using the CRC32c
     * checksum, see
     * [https://cloud.google.com/storage/docs/hashes-etags#_JSONAPI][Hashes and
     * ETags: Best Practices].
     *
     * Generated from protobuf field <code>string crc32c = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setCrc32C($var)
    {
        GPBUtil::checkString($var, True);
        $this->crc32c = $var;

        return $this;
    }

    /**
     * Number of underlying components that make up this object. Components are
     * accumulated by compose operations.
     * Attempting to set this field will result in an error.
     *
     * Generated from protobuf field <code>int32 component_count = 12;</code>
     * @return int
     */
    public function getComponentCount()
    {
        return $this->component_count;
    }

    /**
     * Number of underlying components that make up this object. Components are
     * accumulated by compose operations.
     * Attempting to set this field will result in an error.
     *
     * Generated from protobuf field <code>int32 component_count = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setComponentCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->component_count = $var;

        return $this;
    }

    /**
     * MD5 hash of the data; encoded using base64 as per
     * [https://tools.ietf.org/html/rfc4648#section-4][RFC 4648 §4]. For more
     * information about using the MD5 hash, see
     * [https://cloud.google.com/storage/docs/hashes-etags#_JSONAPI][Hashes and
     * ETags: Best Practices].
     *
     * Generated from protobuf field <code>string md5_hash = 13;</code>
     * @return string
     */
    public function getMd5Hash()
    {
        return $this->md5_hash;
    }

    /**
     * MD5 hash of the data; encoded using base64 as per
     * [https://tools.ietf.org/html/rfc4648#section-4][RFC 4648 §4]. For more
     * information about using the MD5 hash, see
     * [https://cloud.google.com/storage/docs/hashes-etags#_JSONAPI][Hashes and
     * ETags: Best Practices].
     *
     * Generated from protobuf field <code>string md5_hash = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setMd5Hash($var)
    {
        GPBUtil::checkString($var, True);
        $this->md5_hash = $var;

        return $this;
    }

    /**
     * HTTP 1.1 Entity tag for the object. See
     * [https://tools.ietf.org/html/rfc7232#section-2.3][RFC 7232 §2.3].
     *
     * Generated from protobuf field <code>string etag = 14;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * HTTP 1.1 Entity tag for the object. See
     * [https://tools.ietf.org/html/rfc7232#section-2.3][RFC 7232 §2.3].
     *
     * Generated from protobuf field <code>string etag = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * The modification time of the object metadata.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 15;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * The modification time of the object metadata.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 15;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated = $var;

        return $this;
    }

    /**
     * Storage class of the object.
     *
     * Generated from protobuf field <code>string storage_class = 16;</code>
     * @return string
     */
    public function getStorageClass()
    {
        return $this->storage_class;
    }

    /**
     * Storage class of the object.
     *
     * Generated from protobuf field <code>string storage_class = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setStorageClass($var)
    {
        GPBUtil::checkString($var, True);
        $this->storage_class = $var;

        return $this;
    }

    /**
     * Cloud KMS Key used to encrypt this object, if the object is encrypted by
     * such a key.
     *
     * Generated from protobuf field <code>string kms_key_name = 17;</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * Cloud KMS Key used to encrypt this object, if the object is encrypted by
     * such a key.
     *
     * Generated from protobuf field <code>string kms_key_name = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * The time at which the object's storage class was last changed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time_storage_class_updated = 18;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getTimeStorageClassUpdated()
    {
        return $this->time_storage_class_updated;
    }

    /**
     * The time at which the object's storage class was last changed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time_storage_class_updated = 18;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimeStorageClassUpdated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time_storage_class_updated = $var;

        return $this;
    }

    /**
     * Whether an object is under temporary hold.
     *
     * Generated from protobuf field <code>bool temporary_hold = 19;</code>
     * @return bool
     */
    public function getTemporaryHold()
    {
        return $this->temporary_hold;
    }

    /**
     * Whether an object is under temporary hold.
     *
     * Generated from protobuf field <code>bool temporary_hold = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setTemporaryHold($var)
    {
        GPBUtil::checkBool($var);
        $this->temporary_hold = $var;

        return $this;
    }

    /**
     * A server-determined value that specifies the earliest time that the
     * object's retention period expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp retention_expiration_time = 20;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getRetentionExpirationTime()
    {
        return $this->retention_expiration_time;
    }

    /**
     * A server-determined value that specifies the earliest time that the
     * object's retention period expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp retention_expiration_time = 20;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRetentionExpirationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->retention_expiration_time = $var;

        return $this;
    }

    /**
     * User-provided metadata, in key/value pairs.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 21;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * User-provided metadata, in key/value pairs.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 21;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * Whether an object is under event-based hold.
     *
     * Generated from protobuf field <code>bool event_based_hold = 29;</code>
     * @return bool
     */
    public function getEventBasedHold()
    {
        return $this->event_based_hold;
    }

    /**
     * Whether an object is under event-based hold.
     *
     * Generated from protobuf field <code>bool event_based_hold = 29;</code>
     * @param bool $var
     * @return $this
     */
    public function setEventBasedHold($var)
    {
        GPBUtil::checkBool($var);
        $this->event_based_hold = $var;

        return $this;
    }

    /**
     * The name of the object.
     *
     * Generated from protobuf field <code>string name = 23;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the object.
     *
     * Generated from protobuf field <code>string name = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The ID of the object, including the bucket name, object name, and
     * generation number.
     *
     * Generated from protobuf field <code>string id = 24;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of the object, including the bucket name, object name, and
     * generation number.
     *
     * Generated from protobuf field <code>string id = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The name of the bucket containing this object.
     *
     * Generated from protobuf field <code>string bucket = 25;</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * The name of the bucket containing this object.
     *
     * Generated from protobuf field <code>string bucket = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket = $var;

        return $this;
    }

    /**
     * The content generation of this object. Used for object versioning.
     * Attempting to set this field will result in an error.
     *
     * Generated from protobuf field <code>int64 generation = 26;</code>
     * @return int|string
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * The content generation of this object. Used for object versioning.
     * Attempting to set this field will result in an error.
     *
     * Generated from protobuf field <code>int64 generation = 26;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGeneration($var)
    {
        GPBUtil::checkInt64($var);
        $this->generation = $var;

        return $this;
    }

    /**
     * Metadata of customer-supplied encryption key, if the object is encrypted by
     * such a key.
     *
     * Generated from protobuf field <code>.google.events.cloud.storage.v1.StorageObjectData.CustomerEncryption customer_encryption = 28;</code>
     * @return \Google\Events\Cloud\Storage\V1\StorageObjectData\CustomerEncryption
     */
    public function getCustomerEncryption()
    {
        return $this->customer_encryption;
    }

    /**
     * Metadata of customer-supplied encryption key, if the object is encrypted by
     * such a key.
     *
     * Generated from protobuf field <code>.google.events.cloud.storage.v1.StorageObjectData.CustomerEncryption customer_encryption = 28;</code>
     * @param \Google\Events\Cloud\Storage\V1\StorageObjectData\CustomerEncryption $var
     * @return $this
     */
    public function setCustomerEncryption($var)
    {
        GPBUtil::checkMessage($var, \Google\Events\Cloud\Storage\V1\StorageObjectData_CustomerEncryption::class);
        $this->customer_encryption = $var;

        return $this;
    }

    /**
     * The link to this object.
     *
     * Generated from protobuf field <code>string media_link = 100;</code>
     * @return string
     */
    public function getMediaLink()
    {
        return $this->media_link;
    }

    /**
     * The link to this object.
     *
     * Generated from protobuf field <code>string media_link = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setMediaLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->media_link = $var;

        return $this;
    }

    /**
     * Media download link.
     *
     * Generated from protobuf field <code>string self_link = 101;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * Media download link.
     *
     * Generated from protobuf field <code>string self_link = 101;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

}

