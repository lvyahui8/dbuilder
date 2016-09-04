<?php

/**
 * 客户管理
 * 管理公司客户信息
 * 文件由 DBuilder 创建.
 * 作者: lvyahui
 * 日期: 2016-05-21
 */
namespace admin;

class CustomerController extends AdminController{

    protected function beforeDelete($CustomerId)
    {
        // 编写删除记录动作执行前的预处理代码
    }

    protected function beforeEdit(&$data)
    {
        // 编写记录编辑视图渲染之前的预处理代码
    }

    protected function afterSave($model)
    {
        // 编写记录保存之后的后处理代码
    }

}