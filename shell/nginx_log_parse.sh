#!/bin/bash
#切割nginx日志,并调用php脚本将解析nginx日志

#定义相关目录及文件路径
LOG_DIR="/alidata1/weblog/"
LOG_DATE="www/"$(date +'%Y%m%d')"/"
LOG_FILE="www_"$(date +'%H%M').log
NGINX_PID="/var/run/nginx.pid"

#创建日志目录
[ -d {LOG_DIR}${LOG_DATE} ] || mkdir -p -m 0777 ${LOG_DIR}${LOG_DATE}

#切割日志
mv ${LOG_DIR}access.log ${LOG_DIR}${LOG_DATE}${LOG_FILE}

#重启nginx服务
kill -USR1 `cat ${NGINX_PID}`

#使用php脚本解析已经切割好的日志文件
/alidata1/website/yiic.php  logPhpParse ${LOG_DIR}${LOG_DATE}${LOG_FILE} > /dev/null 2>&1
