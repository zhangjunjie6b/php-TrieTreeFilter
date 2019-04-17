<?php
/**
 * Created by PhpStorm.
 * User: zhangjunjie
 * Date: 2019/4/17
 * Time: 4:05 PM
 */
require_once './vendor/autoload.php';
use MadDog\TrieTree;

$array = [
    "国徽",
    "党徽",
    "共青团",
    "政协徽",
    "党旗",
    "华表",
    "旗帜",
    "团徽",
    "胡锦涛",
    "锦涛",
    "温家宝",
    "家宝",
    "习近平",
    "近平",
    "李克强",
    "克强",
    "江泽民",
    "泽民",
    "中国国旗",
    "共产党",
    "国歌",
    "警察",
    "警察警徽",
    "五星红旗",
    "天安门",
    "军徽",
    "军旗",
    "党建",
    "五星",
    "机关",
    "升旗",
    "八路",
    "红军",
    "战士",
    "政治",
    "革命",
    "国家",
    "党政",
    "消防员",
    "阅兵",
    "兵人",
    "敬礼",
    "人民大会堂",
    "公祭日",
    "抗日",
    "抗日英雄",
    "大屠杀",
    "抗日人物",
    "迷彩",
    "入团",
    "少先队",
    "宣誓",
    "毛主席",
    "毛泽东",
    "邓小平",
    "华表柱",
    "英雄纪念碑",
    "人民法院",
    "党",
    "军事",
    "公务员",
    "国微",
    "党微",
    "团微",
    "红旗",
    "党标",
    "锤子",
    "镰刀",
    "中国红",
    "警微",
    "改革开放",
    "少先队队徽",
    "法徽",
    "检徽",
    "劳动保障监察徽章",
    "臂章",
    "建管处徽章",
    "公安局徽章",
    "海军陆战队徽",
    "军队臂章",
    "队徽",
    "公安消防标志",
    "清华大学校徽",
    "城管标志",
    "校徽",
    "税徽",
    "工商标志",
    "检察院",
    "工商局",
    "人民英雄纪念碑",
    "公安局",
    "民政局",
    "税务所",
    "紫禁城",
    "彭丽媛",
    "3D国徽",
    "会徽",
    "爱国",
    "爱国主义",
    "爱国者",
    "伊斯兰",
    "穆斯林",
    "独立",
    "独立的",
    "激情",
    "共和国",
    "标志",
    "联盟",
    "国旗桅杆",
    "国旗",
    "警徽",
];

$trie = TrieTree\TrieTreeServer::create();

//生成一棵树
foreach ($array as $v)
{
    $trie->inset($v);
}

//过滤
$re = $trie->filter("11我们的团徽是骄傲");

var_dump($re);