<?php
namespace lulubin\ip2location\models;


use yii\base\Model;

/**
 * 位置数据模型
 */
class Location extends Model
{
    /**
     * @var string IP
     */
    public $ip;
    /**
     * @var string 开始 IP
     */
    public $begin_ip;
    /**
     * @var string 结束 IP
     */
    public $end_ip;
    /**
     * @var string 国家
     */
    public $country;
    /**
     * @var string 地区
     */
    public $area;
}