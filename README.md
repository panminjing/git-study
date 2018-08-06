Git教程：
http://www.liaoxuefeng.com/wiki/0013739516305929606dd18361248578c67b8067c8c017b000/00137628548491051ccfaef0ccb470894c858999603fedf000

1.设置用户名，邮箱
git config --global user.name "yourname"
git config --glocal user.name "blackironman@163.com"
2.pwd 查看当前的工作路径
3.mkdir test 创建文件夹test
4.ls 查看当前目录下的文件
5.git status 查看当前状态
6.git diff 查看修改的信息
7.添加远端仓库(用origion 代替 后面的地址)
git remote add origin git@github.com:blackironman/gitstudy.git
推送到远端
git push -u origin master
下载github上的文件
git pull git@github.com:blackironman/study.git(本地git库已和远程库创建关联)
git clone 地址(github上的SSH地址)：git@github.com:blackironman/study.git（本地git库未与远程库创建关联）

从远程仓库拉下来(git fetch)合并(git merge)
（多人共同操作一个文件时，需手动合并）
git pull
	
添加github合作者：
生成ssh-key 
在Windows下打开Git Bash输入：ssh-keygen -t rsa -C "youremail@example.com"  一直回车使用默认值
最后在github右上角的图标 ---Settings---SSH keys -- add SSH Keys title任意，在key文本中粘贴 （查看：C:\用户\a\.ssh）id_rsa.pub文件的内容。

8.使用Windows的童鞋要特别注意：	
千万不要使用Windows自带的记事本编辑任何文本文件。原因是Microsoft开发记事本的团队使用了一个非常弱智的行为来保存UTF-8编码的文件，他们自作聪明地在每个文件开头添加了0xefbbbf（十六进制）的字符，你会遇到很多不可思议的问题，比如，网页第一行可能会显示一个“?”，明明正确的程序一编译就报语法错误，等等，都是由记事本的弱智行为带来的。建议你下载Notepad++代替记事本，不但功能强大，而且免费！记得把Notepad++的默认编码设置为UTF-8 without BOM即可：

创建版本库：
Git init 初始化仓库 --- git clone ssh/http地址 ----  git add  git.txt添加文件 --- git commit -m “提示信息"

版本回退：
1.git log 查看提交日志
2.git reflog 查看所有的版本信息
3.git reset --hard HEAD^ 回退到上一个版本,上上个版本是HEAD^^,上100个版本HEAD~100。
4. git reset --hard 10994a(commit id)回退到指定版本。版本号没必要写全，前几位就可以
了，Git会自动去找。当然也不能只写前一两位，因为Git可能会找到多个版本号，就无法确定是哪一个了。

HEAD指向的版本就是当前版本，因此，Git允许我们在版本的历史之间穿梭，使用命令git reset --hard commit_id。
穿梭前，用git log可以查看提交历史，以便确定要回退到哪个版本。
要重返未来，用git reflog查看命令历史，以便确定要回到未来的哪个版本。

工作区和暂存区：stage为暂存区


管理修改：
Git跟踪并管理的是修改，而非文件。
用git diff HEAD -- git.txt命令可以查看工作区、暂存区和版本库里面最新版本的区别。
撤销修改：
git checkout -- file命令中的--很重要，没有--，就变成了“切换到另一个分支”的命令。
让这个文件回到最近一次git commit或git add时的状态。
1.在工作区中撤销就回到版本库中最新的状态一样。
2.提交了暂存区撤回，就回到add工作区。
   之前学过的git reset HEAD <file> 回退版本，git status 查看状态还是能看到提示说什么文件进行了修改。

小结：
场景1：当你改乱了工作区某个文件的内容，想直接丢弃工作区的修改时，用命令git checkout -- file。
场景2：当你不但改乱了工作区某个文件的内容，还添加到了暂存区时，想丢弃修改，分两步，第一步用命令git reset HEAD <file>，就回到了场景1，第二步按场景1操作。
场景3：已经提交了不合适的修改到版本库时，想要撤销本次提交，进行版本回退，不过前提是没有推送到远程库



