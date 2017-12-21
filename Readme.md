# DomainGO
软件已经编译完成，提供Linux和macos下的程序，其他平台请自行编译。</br>
程序采用了多线程技术，为了保证能够得到准确的反馈结果，请务必加上延时（具体操作见下文）。</br>
部分域名查询时，会限制查询速度和查询量，在短时间内的大量查询会导致IP被禁，故在遇到这类情况的时候，将字典拆开或者增大延时。</br>
### 使用方法
直接在终端内按照下列显示运行
./program_name domain dictionary delay
program_name为编译后的程序名称；
domain为域名后缀；
dictionary为域名前缀字典；
delay为程序的延时，即两次查询之间的时间。

Linux用户：
```
./anyLinux com 3py.txt 100
```
`以上即为遍历3py.txt内的所有域名前缀来查询.com域名，每两次查询之间的间隔时间为100ms.`
macos用户：
```
./mac_speed com 3py.txt 100
```
`以上即为遍历3py.txt内的所有域名前缀来查询.com域名，每两次查询之间的间隔时间为100ms.`
