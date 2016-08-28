# DBuilder

[![GitHub release](http://movesun.com/images/svg/dbuilder_version.svg?324234)](https://github.com/lvyahui8/jutils/dbuilder)

WEB应用CRUD代码生成器，主要用来生成后台管理数据库的代码


## GModule

GModule 是DBuilder的代码生成单元，包含了以一张数据库表为主表的CRUD操作的MVC代码。一个GModule可以由DBuilder的GModule管理界面生成，也可以手工建立。

### GModule配置文件

描述对一个一张主表的CRUD操作，对每个字段精确配置

```php
/**
 * 说明：
 * 1. 以下配置项，不设置便是默认
 */

return array(

    /**
     * 所有字段配置
     */
    'fields'    =>  array(
        'field_name' =>  array(
            /* 显示在列表表格的表头的内容，和form控件旁边的内容*/
            'label' =>  '字段中文名',
            /* 字段缺省值 */
            'value' =>  false,
            /* 针对表单的设置 */
            'form'  =>  array(
                'show'  =>  true,
                'hidden'    =>  false,
                /*
                 * 字段对应表单的控件类型，默认text，
                 * 还支持常用的控件类型
                 * textarea
                 * radio
                 * checkbox
                 * number
                 * ipaddr
                 * wyswyg
                 * select
                 * date
                 * file
                 * 以及自定义类型
                 * */
                'type'  =>  'text',
                /*
                'type'  =>  array(
                    'select'    =>  array(
                        'options'   =>  function(){
                            return array();
                        }
                    ),
                ),
                'type'  =>  array(
                    'radio'     =>  array(),
                ),
                */
                /* 提交表单后的验证规则 */
                'rule'  =>  'required',
                'ajax_validate' =>  false,
                'placeholder'   =>  'xx',

            ),
            // 针对列表的设置
            'list'  =>  array(
                /* 字段在列表是否显示，默认为显示 */
                'show'  =>  true,
                /* 字段是否可以排序，默认不能排序 */
                'sort'  =>  true,
                /* 是否能够按这个字段搜索 */
                'search'    =>  true,
                /* 字段进行翻译，比如栏目Id字段，一般要转成栏目名称显示 */
                'lookup'    =>  false,
            ),
            'relation'  =>  array(
                /* 关系类型 */
                'type' => 'belongsTo',
                /* 关系表 */
                'table' => 'category',
                /* 关联外键 */
                'foreign_key' => 'id',
                /* 显示字段  */
                'show' => 'title',
                /* 显示字段在sql中的别名 */
                'as' => 'category_title',
            ),

        ),
        // more fields
    ),

    /**
     * 全局form配置，优先级小于字段配置
     */
    'form_options'  =>  array(
        'layout'    =>  array(
            'cols'  =>  12,
            'label_cols' =>  1,
            'input_cols' =>  11,
        ),
    ),

    /**
     * 全局list配置，优先级小于字段配置
     */
    'list_options'  =>  array(
        'page'      =>  10,
        'create'    =>  true,
        'update'    =>  true,
        'delete'    =>  true,
    ),

);
```

上面的配置文件对应到GModule管理模块的页面如下


![curd配置界面1](http://images2015.cnblogs.com/blog/635249/201606/635249-20160629151814827-1387799654.png)

![curd配置界面2](http://images2015.cnblogs.com/blog/635249/201606/635249-20160629152054265-116461217.png)

## CRUD实现方式

### 模块关系

GModule与Core模块之间有继承依赖的关系

![模块关系图](http://images2015.cnblogs.com/blog/635249/201606/635249-20160629150744546-1324209834.jpg)

### 处理流程

CRUD操作实际有Core模块执行，而Core模块会回调GModule的预处理/后处理接口执行CRUD操作

![CRUD处理过程](http://images2015.cnblogs.com/blog/635249/201606/635249-20160629150946218-1384765501.jpg)

## 联系或参与

* **作者:**  吕亚辉([@lvyahui8](https://github.com/lvyahui8))<br/>
* **邮箱:**  lvyahui8@gmail.com lvyahui8@126.com
* **QQ:** [1257069082](tencent://message/?uin=1257069082) 
* **QQ群:** [146103720](http://shang.qq.com/wpa/qunwpa?idkey=50fce48ad9655e4a6046c6018930f2fc719278d3bc613498336882d3567a4000)

-------

[博客文档](http://www.cnblogs.com/lvyahui/p/5626466.html)
