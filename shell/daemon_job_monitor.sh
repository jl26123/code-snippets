#!/bin/bash
# 保证服务不停止运行,如果进程不存在,则重新拉起
* * * * * if ! ps aux | grep  "/home/website/blog/yii user/create"  | grep -v grep ;then $(nohup /home/website/blog/yii user/create  >> /dev/null 2>&1  &);fi
