<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LoginHisTool请求参数结构体
 *
 * @method LoginHeader getHeader() 获取请求头
 * @method void setHeader(LoginHeader $Header) 设置请求头
 * @method LoginData getData() 获取请求体
 * @method void setData(LoginData $Data) 设置请求体
 */
class LoginHisToolRequest extends AbstractModel
{
    /**
     * @var LoginHeader 请求头
     */
    public $Header;

    /**
     * @var LoginData 请求体
     */
    public $Data;

    /**
     * @param LoginHeader $Header 请求头
     * @param LoginData $Data 请求体
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = new LoginHeader();
            $this->Header->deserialize($param["Header"]);
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new LoginData();
            $this->Data->deserialize($param["Data"]);
        }
    }
}
