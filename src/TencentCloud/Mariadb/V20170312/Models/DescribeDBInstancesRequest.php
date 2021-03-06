<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getInstanceIds() 获取按照一个或者多个实例 ID 查询。实例 ID 形如：tdsql-ow728lmc。每次请求的实例的上限为100。
 * @method void setInstanceIds(array $InstanceIds) 设置按照一个或者多个实例 ID 查询。实例 ID 形如：tdsql-ow728lmc。每次请求的实例的上限为100。
 * @method string getSearchName() 获取搜索的字段名，当前支持的值有：instancename、vip、all。传 instancename 表示按实例名进行搜索；传 vip 表示按内网IP进行搜索；传 all 将会按实例ID、实例名和内网IP进行搜索。
 * @method void setSearchName(string $SearchName) 设置搜索的字段名，当前支持的值有：instancename、vip、all。传 instancename 表示按实例名进行搜索；传 vip 表示按内网IP进行搜索；传 all 将会按实例ID、实例名和内网IP进行搜索。
 * @method string getSearchKey() 获取搜索的关键字，支持模糊搜索。多个关键字使用换行符（'\n'）分割。
 * @method void setSearchKey(string $SearchKey) 设置搜索的关键字，支持模糊搜索。多个关键字使用换行符（'\n'）分割。
 * @method array getProjectIds() 获取按项目 ID 查询
 * @method void setProjectIds(array $ProjectIds) 设置按项目 ID 查询
 * @method integer getIsFilterVpc() 获取是否根据 VPC 网络来搜索，0 为否，1 为是
 * @method void setIsFilterVpc(integer $IsFilterVpc) 设置是否根据 VPC 网络来搜索，0 为否，1 为是
 * @method integer getVpcId() 获取私有网络 ID， IsFilterVpc 为 1 时有效
 * @method void setVpcId(integer $VpcId) 设置私有网络 ID， IsFilterVpc 为 1 时有效
 * @method integer getSubnetId() 获取私有网络的子网 ID， IsFilterVpc 为 1 时有效
 * @method void setSubnetId(integer $SubnetId) 设置私有网络的子网 ID， IsFilterVpc 为 1 时有效
 * @method string getOrderBy() 获取排序字段， projectId， createtime， instancename 三者之一
 * @method void setOrderBy(string $OrderBy) 设置排序字段， projectId， createtime， instancename 三者之一
 * @method string getOrderByType() 获取排序类型， desc 或者 asc
 * @method void setOrderByType(string $OrderByType) 设置排序类型， desc 或者 asc
 * @method integer getOffset() 获取偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。
 * @method array getOriginSerialIds() 获取按 OriginSerialId 查询
 * @method void setOriginSerialIds(array $OriginSerialIds) 设置按 OriginSerialId 查询
 */

/**
 *DescribeDBInstances请求参数结构体
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array 按照一个或者多个实例 ID 查询。实例 ID 形如：tdsql-ow728lmc。每次请求的实例的上限为100。
     */
    public $InstanceIds;

    /**
     * @var string 搜索的字段名，当前支持的值有：instancename、vip、all。传 instancename 表示按实例名进行搜索；传 vip 表示按内网IP进行搜索；传 all 将会按实例ID、实例名和内网IP进行搜索。
     */
    public $SearchName;

    /**
     * @var string 搜索的关键字，支持模糊搜索。多个关键字使用换行符（'\n'）分割。
     */
    public $SearchKey;

    /**
     * @var array 按项目 ID 查询
     */
    public $ProjectIds;

    /**
     * @var integer 是否根据 VPC 网络来搜索，0 为否，1 为是
     */
    public $IsFilterVpc;

    /**
     * @var integer 私有网络 ID， IsFilterVpc 为 1 时有效
     */
    public $VpcId;

    /**
     * @var integer 私有网络的子网 ID， IsFilterVpc 为 1 时有效
     */
    public $SubnetId;

    /**
     * @var string 排序字段， projectId， createtime， instancename 三者之一
     */
    public $OrderBy;

    /**
     * @var string 排序类型， desc 或者 asc
     */
    public $OrderByType;

    /**
     * @var integer 偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100。
     */
    public $Limit;

    /**
     * @var array 按 OriginSerialId 查询
     */
    public $OriginSerialIds;
    /**
     * @param array $InstanceIds 按照一个或者多个实例 ID 查询。实例 ID 形如：tdsql-ow728lmc。每次请求的实例的上限为100。
     * @param string $SearchName 搜索的字段名，当前支持的值有：instancename、vip、all。传 instancename 表示按实例名进行搜索；传 vip 表示按内网IP进行搜索；传 all 将会按实例ID、实例名和内网IP进行搜索。
     * @param string $SearchKey 搜索的关键字，支持模糊搜索。多个关键字使用换行符（'\n'）分割。
     * @param array $ProjectIds 按项目 ID 查询
     * @param integer $IsFilterVpc 是否根据 VPC 网络来搜索，0 为否，1 为是
     * @param integer $VpcId 私有网络 ID， IsFilterVpc 为 1 时有效
     * @param integer $SubnetId 私有网络的子网 ID， IsFilterVpc 为 1 时有效
     * @param string $OrderBy 排序字段， projectId， createtime， instancename 三者之一
     * @param string $OrderByType 排序类型， desc 或者 asc
     * @param integer $Offset 偏移量，默认为 0
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。
     * @param array $OriginSerialIds 按 OriginSerialId 查询
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("SearchName",$param) and $param["SearchName"] !== null) {
            $this->SearchName = $param["SearchName"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = [];
            foreach ($param["ProjectIds"] as $key => $value){
                $obj = new int64();
                $obj->deserialize($value);
                array_push($this->ProjectIds, $obj);
            }
        }

        if (array_key_exists("IsFilterVpc",$param) and $param["IsFilterVpc"] !== null) {
            $this->IsFilterVpc = $param["IsFilterVpc"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OriginSerialIds",$param) and $param["OriginSerialIds"] !== null) {
            $this->OriginSerialIds = $param["OriginSerialIds"];
        }
    }
}
