## 实战LinuxShell编程与服务器管理.md

![封面图片](https://img1.doubanio.com/lpic/s6144553.jpg)

作者:卧龙小三

出版社:电子工业出版社

----- 

> 当服务器日志文件很大时,利用特殊文件/dev/null(只写文件)来清理:

```bash
#!/bin/bash

cp /dev/null/ /var/log/nginx/access.log
```