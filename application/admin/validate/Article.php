<?php
namespace app\admin\validate;
use think\Validate;
class Article extends Validate
{
    protected $rule = [
        'title'  =>  'require|max:100',
        'cateid' =>  'require',
    ];

    protected $message  =   [
        'title.require' => '文章标题必须填写',
        'title.max' => '文章标题长度不得大于100位',
        'cateid.require' => '请选择文章所属栏目',

    ];

    protected $scene = [
        'add'  =>  ['title','cateid'],
        'edit'  =>  ['title','cateid'],
    ];




}
