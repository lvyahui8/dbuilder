<?php

/**
 * {moduleTitle}
 * {moduleNote}
 * 文件由 DBuilder 创建.
 * 作者: lvyahui
 * 日期: {date}
 */

class {moduleName} extends BaseModel
{
    protected $connection = '{dbSource}';
    protected $table = '{dbTable}';
    protected $primaryKey = '{tablePrimaryKey}';

    /*
    public function formatXXXAttribute(){
        $xxxs = array(
            'qtlogin'   =>  'tencent',
            'notify'    =>  'alibaba',
            'echart'    =>  'baidu',
        );
        return $xxxs[$this->xxx];
    }
    */
}