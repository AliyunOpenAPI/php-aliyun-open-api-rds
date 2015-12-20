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

class DescribeDBInstancesRequest extends RpcAcsRequest
{

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $clientToken;

    private $proxyId;

    private $engine;

    private $dBInstanceStatus;

    private $searchKey;

    private $dBInstanceId;

    private $dBInstanceType;

    private $pageSize;

    private $pageNumber;

    private $instanceNetworkType;

    private $connectionMode;

    private $ownerAccount;


    public function  __construct()
    {
        parent::__construct("Rds", "2014-08-15", "DescribeDBInstances");
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


    public function getEngine()
    {
        return $this->engine;
    }


    public function setEngine($engine)
    {
        $this->engine                    = $engine;
        $this->queryParameters["Engine"] = $engine;
    }


    public function getDBInstanceStatus()
    {
        return $this->dBInstanceStatus;
    }


    public function setDBInstanceStatus($dBInstanceStatus)
    {
        $this->dBInstanceStatus                    = $dBInstanceStatus;
        $this->queryParameters["DBInstanceStatus"] = $dBInstanceStatus;
    }


    public function getSearchKey()
    {
        return $this->searchKey;
    }


    public function setSearchKey($searchKey)
    {
        $this->searchKey                    = $searchKey;
        $this->queryParameters["SearchKey"] = $searchKey;
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


    public function getDBInstanceType()
    {
        return $this->dBInstanceType;
    }


    public function setDBInstanceType($dBInstanceType)
    {
        $this->dBInstanceType                    = $dBInstanceType;
        $this->queryParameters["DBInstanceType"] = $dBInstanceType;
    }


    public function getPageSize()
    {
        return $this->pageSize;
    }


    public function setPageSize($pageSize)
    {
        $this->pageSize                    = $pageSize;
        $this->queryParameters["PageSize"] = $pageSize;
    }


    public function getPageNumber()
    {
        return $this->pageNumber;
    }


    public function setPageNumber($pageNumber)
    {
        $this->pageNumber                    = $pageNumber;
        $this->queryParameters["PageNumber"] = $pageNumber;
    }


    public function getInstanceNetworkType()
    {
        return $this->instanceNetworkType;
    }


    public function setInstanceNetworkType($instanceNetworkType)
    {
        $this->instanceNetworkType                    = $instanceNetworkType;
        $this->queryParameters["InstanceNetworkType"] = $instanceNetworkType;
    }


    public function getConnectionMode()
    {
        return $this->connectionMode;
    }


    public function setConnectionMode($connectionMode)
    {
        $this->connectionMode                    = $connectionMode;
        $this->queryParameters["ConnectionMode"] = $connectionMode;
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