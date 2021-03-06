<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/cloud/cloudbuild/v1/data.proto

namespace Google\Events\Cloud\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.events.cloud.cloudbuild.v1.Source</code>
 */
class Source extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Events\Cloud\Cloudbuild\V1\StorageSource $storage_source
     *           If provided, get the source from this location in Google Cloud Storage.
     *     @type \Google\Events\Cloud\Cloudbuild\V1\RepoSource $repo_source
     *           If provided, get the source from this location in a Cloud Source
     *           Repository.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Events\Cloud\Cloudbuild\V1\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * If provided, get the source from this location in Google Cloud Storage.
     *
     * Generated from protobuf field <code>.google.events.cloud.cloudbuild.v1.StorageSource storage_source = 2;</code>
     * @return \Google\Events\Cloud\Cloudbuild\V1\StorageSource
     */
    public function getStorageSource()
    {
        return $this->readOneof(2);
    }

    /**
     * If provided, get the source from this location in Google Cloud Storage.
     *
     * Generated from protobuf field <code>.google.events.cloud.cloudbuild.v1.StorageSource storage_source = 2;</code>
     * @param \Google\Events\Cloud\Cloudbuild\V1\StorageSource $var
     * @return $this
     */
    public function setStorageSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Events\Cloud\Cloudbuild\V1\StorageSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * If provided, get the source from this location in a Cloud Source
     * Repository.
     *
     * Generated from protobuf field <code>.google.events.cloud.cloudbuild.v1.RepoSource repo_source = 3;</code>
     * @return \Google\Events\Cloud\Cloudbuild\V1\RepoSource
     */
    public function getRepoSource()
    {
        return $this->readOneof(3);
    }

    /**
     * If provided, get the source from this location in a Cloud Source
     * Repository.
     *
     * Generated from protobuf field <code>.google.events.cloud.cloudbuild.v1.RepoSource repo_source = 3;</code>
     * @param \Google\Events\Cloud\Cloudbuild\V1\RepoSource $var
     * @return $this
     */
    public function setRepoSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Events\Cloud\Cloudbuild\V1\RepoSource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

