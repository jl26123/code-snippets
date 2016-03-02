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
