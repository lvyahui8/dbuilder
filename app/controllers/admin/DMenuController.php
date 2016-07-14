<?php

/**
 * 菜单管理
 * 对左侧菜单进行管理
 * 文件由 DBuilder 创建.
 * 作者: lvyahui
 * 日期: 2016-05-14
 */
namespace admin;

class DMenuController extends AdminController{

    protected function beforeDelete($id)
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

    public function getManager(){
        $this->makeView();
    }
}