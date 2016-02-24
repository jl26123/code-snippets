<?php
/***
 *
 * 友好的时间显示
 *
 * @param $datetime "带显示的时间"
 * @return bool|string
 */
function showHumanTime($datetime)
{
    if (!$datetime)
        return '';
    //sTime=源时间，cTime=当前时间，dTime=时间差
    $sTime = strtotime($datetime);
    $cTime = time();
    $dTime = $cTime - $sTime;
    $dDay  = intval(date("z", $cTime)) - intval(date("z", $sTime));
    $dYear = intval(date("Y", $cTime)) - intval(date("Y", $sTime));
    if ($dTime < 60) {
        if ($dTime < 10) {
            return '刚刚';
        } else {
            return intval(floor($dTime / 10) * 10) . "秒前";
        }
    } elseif ($dTime < 3600) {
        return intval($dTime / 60) . "分钟前";
        //今天的数据.年份相同.日期相同.
    } elseif ($dYear == 0 && $dDay == 0) {
        //return intval($dTime/3600)."小时前";
        return '今天' . date('H:i', $sTime);
    } elseif ($dYear == 0 && $dDay == 1) {
        return '昨天' . date("H:i", $sTime);
    } elseif ($dYear == 0 && $dDay > 1) {
        return date("m月d日", $sTime);
    } else {
        return date("Y-m-d", $sTime);
    }
}