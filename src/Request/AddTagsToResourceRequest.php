<?php namespace Aliyun\RDS\Request;

/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

use Aliyun\Core\RpcAcsRequest;

class AddTagsToResourceRequest extends RpcAcsRequest
{

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $clientToken;

    private $proxyId;

    private $dBInstanceId;

    private $tag1key;

    private $tag2key;

    private $tag3key;

    private $tag4key;

    private $tag5key;

    private $tag1value;

    private $tag2value;

    private $tag3value;

    private $tag4value;

    private $tag5value;

    private $ownerAccount;


    public function  __construct()
    {
        parent::__construct("Rds", "2014-08-15", "AddTagsToResource");
    }


    public function getOwnerId()
    {
        return $this->ownerId;
    }


    public function setOwnerId($ownerId)
    {
        $this->ownerId                    = $ownerId;
        $this->queryParameters["OwnerId"] = $ownerId;
    }


    public function getResourceOwnerAccount()
    {
        return $this->resourceOwnerAccount;
    }


    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->resourceOwnerAccount                    = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"] = $resourceOwnerAccount;
    }


    public function getResourceOwnerId()
    {
        return $this->resourceOwnerId;
    }


    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->resourceOwnerId                    = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"] = $resourceOwnerId;
    }


    public function getClientToken()
    {
        return $this->clientToken;
    }


    public function setClientToken($clientToken)
    {
        $this->clientToken                    = $clientToken;
        $this->queryParameters["ClientToken"] = $clientToken;
    }


    public function getproxyId()
    {
        return $this->proxyId;
    }


    public function setproxyId($proxyId)
    {
        $this->proxyId                    = $proxyId;
        $this->queryParameters["proxyId"] = $proxyId;
    }


    public function getDBInstanceId()
    {
        return $this->dBInstanceId;
    }


    public function setDBInstanceId($dBInstanceId)
    {
        $this->dBInstanceId                    = $dBInstanceId;
        $this->queryParameters["DBInstanceId"] = $dBInstanceId;
    }


    public function getTag1key()
    {
        return $this->tag1key;
    }


    public function setTag1key($tag1key)
    {
        $this->tag1key                    = $tag1key;
        $this->queryParameters["Tag1key"] = $tag1key;
    }


    public function getTag2key()
    {
        return $this->tag2key;
    }


    public function setTag2key($tag2key)
    {
        $this->tag2key                    = $tag2key;
        $this->queryParameters["Tag2key"] = $tag2key;
    }


    public function getTag3key()
    {
        return $this->tag3key;
    }


    public function setTag3key($tag3key)
    {
        $this->tag3key                    = $tag3key;
        $this->queryParameters["Tag3key"] = $tag3key;
    }


    public function getTag4key()
    {
        return $this->tag4key;
    }


    public function setTag4key($tag4key)
    {
        $this->tag4key                    = $tag4key;
        $this->queryParameters["Tag4key"] = $tag4key;
    }


    public function getTag5key()
    {
        return $this->tag5key;
    }


    public function setTag5key($tag5key)
    {
        $this->tag5key                    = $tag5key;
        $this->queryParameters["Tag5key"] = $tag5key;
    }


    public function getTag1value()
    {
        return $this->tag1value;
    }


    public function setTag1value($tag1value)
    {
        $this->tag1value                    = $tag1value;
        $this->queryParameters["Tag1value"] = $tag1value;
    }


    public function getTag2value()
    {
        return $this->tag2value;
    }


    public function setTag2value($tag2value)
    {
        $this->tag2value                    = $tag2value;
        $this->queryParameters["Tag2value"] = $tag2value;
    }


    public function getTag3value()
    {
        return $this->tag3value;
    }


    public function setTag3value($tag3value)
    {
        $this->tag3value                    = $tag3value;
        $this->queryParameters["Tag3value"] = $tag3value;
    }


    public function getTag4value()
    {
        return $this->tag4value;
    }


    public function setTag4value($tag4value)
    {
        $this->tag4value                    = $tag4value;
        $this->queryParameters["Tag4value"] = $tag4value;
    }


    public function getTag5value()
    {
        return $this->tag5value;
    }


    public function setTag5value($tag5value)
    {
        $this->tag5value                    = $tag5value;
        $this->queryParameters["Tag5value"] = $tag5value;
    }


    public function getOwnerAccount()
    {
        return $this->ownerAccount;
    }


    public function setOwnerAccount($ownerAccount)
    {
        $this->ownerAccount                    = $ownerAccount;
        $this->queryParameters["OwnerAccount"] = $ownerAccount;
    }

}