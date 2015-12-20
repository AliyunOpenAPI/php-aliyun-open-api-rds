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

class DescribeSQLLogRecordsRequest extends RpcAcsRequest
{

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $clientToken;

    private $dBInstanceId;

    private $sQLId;

    private $queryKeywords;

    private $startTime;

    private $endTime;

    private $pageSize;

    private $pageNumber;

    private $ownerAccount;


    public function  __construct()
    {
        parent::__construct("Rds", "2014-08-15", "DescribeSQLLogRecords");
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


    public function getDBInstanceId()
    {
        return $this->dBInstanceId;
    }


    public function setDBInstanceId($dBInstanceId)
    {
        $this->dBInstanceId                    = $dBInstanceId;
        $this->queryParameters["DBInstanceId"] = $dBInstanceId;
    }


    public function getSQLId()
    {
        return $this->sQLId;
    }


    public function setSQLId($sQLId)
    {
        $this->sQLId                    = $sQLId;
        $this->queryParameters["SQLId"] = $sQLId;
    }


    public function getQueryKeywords()
    {
        return $this->queryKeywords;
    }


    public function setQueryKeywords($queryKeywords)
    {
        $this->queryKeywords                    = $queryKeywords;
        $this->queryParameters["QueryKeywords"] = $queryKeywords;
    }


    public function getStartTime()
    {
        return $this->startTime;
    }


    public function setStartTime($startTime)
    {
        $this->startTime                    = $startTime;
        $this->queryParameters["StartTime"] = $startTime;
    }


    public function getEndTime()
    {
        return $this->endTime;
    }


    public function setEndTime($endTime)
    {
        $this->endTime                    = $endTime;
        $this->queryParameters["EndTime"] = $endTime;
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