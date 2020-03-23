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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getSameImages() 获取tag列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSameImages(array $SameImages) 设置tag列表
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *指定tag镜像内容相同的tag列表
 */
class SameImagesResp extends AbstractModel
{
    /**
     * @var array tag列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SameImages;
    /**
     * @param array $SameImages tag列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SameImages",$param) and $param["SameImages"] !== null) {
            $this->SameImages = $param["SameImages"];
        }
    }
}