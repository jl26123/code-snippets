## 实战LinuxShell编程与服务器管理.md

![封面图片](https://img1.doubanio.com/lpic/s6144553.jpg)

作者:卧龙小三

出版社:电子工业出版社

----- 

Linux/BSD系统分为三个重要组成部分:

- 核心(Kernel)
- Shell
- 工具程序

> 查询操作系统的shell环境与版本

```bash

#查看bash默认类型
echo $SHELL

#查看版本号
echo $BASH_VERSION
```

> 当服务器日志文件很大时,利用特殊文件/dev/null(只写文件)来清理:

```bash
#!/bin/bash

cp /dev/null/ /var/log/nginx/access.log
```


#### Unix-like的操作系统中,一切皆为文件,文件可分成几种

- 一般文件(文本文件,二进制文件)
- 目录(文件夹,代码)
- 设备文件(字符文件,磁盘文件)
- 内部进程通信文件(Socket文件,Pipe/FIFO文件)
- 特殊文件(符号链接文件,可看成是快捷方式)
- 隐藏文件

不同的文件,各有其代码:



| 符号  | 文件类型  |
|:-------------:|:-------------:|
|-|一般文件|
|d|目录|
|l|符号链接文件|
|b|磁盘设备文件|
|c|字符设备文件|
|s|Socket文件|
|p|连接文件|

> 关于转义字符:单引号中,不可以出现单引号,就算用转移字符\'也不行

```bash
#!/bin/bash

#以下bash会提示命令尚未输入完
echo 'This is Jack\'s book.'
```

