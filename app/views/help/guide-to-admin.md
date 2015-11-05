# 给写题目的人的话

SNGOJ 的题目编写并不是非常成熟。编写题目需要以下几个步骤：

1. 创建试题
2. 完善数据
3. 设置权限

## **试题**

-----------------

### **创建试题**

成为管理员后重新登录，点击 Problems 页面右上角的 Create 按钮即可创建试题。

创建试题页面中需要填写 标题、内存限制、时间限制、分类、描述、输入描述、输出描述、提示 的信息。

### **标题格式**

标题由三部分组成。


比赛/来源 `[SNG Camp 2015 - Junior]`

题目名称 `Book - 帕奇的书架`

标签 `(Modified)`  `(No Data)`

所以题目可以有以下几种形式：

* `A+B Problem`
* `[Summer Camp 2015 - Junior] Book - 帕奇的书架`
* `[NOIP 2014] Equation (Modified)`
* `Prime (No Data)`

后期我们将增加题目的分类、来源系统。

### **题目编辑**

题目全部使用 Markdown 语法编写，同时支持 Latex 公式、Emoji 表情，支持上传图片。

#### **Markdown**

如果您第一次使用 Markdown，请注意以下几点：

1. 换行 在需要换行的行末打 4 个以上的空格，或者添加一个空行。

2. 粗体、斜体、标题、分割线

    **粗体** `**我是粗体**`

    _斜体_ `_我是斜体_`

    标题 `### 23333` (1 ~ 6 个 `#`)

    分割线 `-------`

3. 代码

    单行代码使用 \` \` 括起来
    `#include <iostream>` \`#include <iostream>\`

    多行代码、等宽字符用 Tab 缩进

        import os
        print("Hello, World")

    多行代码会自动被着色，因此纯文本也有可能被着色。

4. 有序列表

        1. 233
        2. 2333
        3. 233333

    1. 233
    2. 2333
    3. 233333

5. 无序列表


        * 233
        * 2333
        * 233333

  或是

        + 233
        + 2333
        + 233333

  或是

        - 233
        - 2333
        - 233333

  效果

    + 233
    + 2333
    + 233333

6. 链接

    * 带提示的连接（鼠标停留后显示提示信息）

    [SNGOJ](http://kids.org.cn "SNGOJ, an Online Judge")

    `[SNGOJ](http://kids.org.cn "SNGOJ, an Online Judge")`

    * 不带提示的连接

    [SNGOJ](http://kids.org.cn)

    `[SNGOJ](http://kids.org.cn)`

7. 图片

    ![SNGOJ LOGO](/oj/images/60x60black.png "SNGOJ LOGO")

    `![SNGOJ LOGO](/oj/images/60x60black.png "SNGOJ LOGO")`

    `![{alt 信息}]({链接} "{title 信息}")`

    Markdown 不支持图片缩放。因此请您将图片调整至适宜的大小后再上传。


#### **数学公式**

题目中还可以出现数学公式。我们支持 Latex 数学公式。

数学公式使用 `\\( \\)` 或者 `$ $` 括起来。

* $ a \times b $ `$ a \times b $`

* \\( a \le b \\) `\\( a \le b \\)`

由于试题的解析顺序是先转换 Markdown 再解析 Latex，所以如果您的公式中有下划线等字符，请加 `\` 转义。

* $ a\_i $ `a\_i`

#### **Emoji 表情**

同时编辑器也支持 Emoji 表情。直接在编辑器中输入 Emoji 表情后，我们就会自动转换成图片。

#### **图片**

SNGOJ 已经支持图床了。管理员可以点击导航栏的 `Dashboard -> Assets` 上传图片。

图片上传完成后，会显示图片所对应的 Markdown 代码。您只需要更改 `[description]` 并把代码拷贝到 Markdown 区域内即可。

### **一些注意事项**

* 请在中西文间增加空格

    以下是正确示范：

    * 欢迎来到 SNGOJ `欢迎来到 SNGOJ`

    * 数据范围是 $ 1 \le n \le 100$ `数据范围是 $ 1 \le n \le 100$`

    * [2015 Summer Camp - Junior] `[2015 Summer Camp - Junior]`

    * Hello, World `Hello, World`

    然而以下的文本是坚决不允许的：

    * 欢迎来到SNGOJ `欢迎来到SNGOJ`

    * 数据范围是$ 1 \le n \le 100$ `数据范围是$ 1 \le n \le 100$`

    * [2015 Summer Camp-Junior] `[2015 Summer Camp-Junior]`

    * Hello,World `Hello,World`

* 请记得在题目说明每行最后添加一个句号：

    * 今天阳光明媚，万里无云。数据范围是 $ 1 \le n \le 100$。

    然而以下的句子是坚决不允许的：

    * 今天阳光明媚，万里无云。数据范围是 $ 1 \le n \le 100$

## **数据**

--------

### **创建数据**

数据在 Data 选项卡内创建。

数据选择 `TestData` 模式，则不会显示。选择 `Sample` 模式，则会显示在问题查看页面中。但目前所有数据都会参与评测。

数据选择 `Plain Text`，则直接读取文本框的内容；选择 `Path`，则会在 `/htdocs/oj/ojdata/` 目录里查询文件并发送给评测机。

数据中不得出现除英文、数字、符号以外的字符，否则评测机无法正确处理字符并储存导致崩溃。

当你更改数据后（包括更改文件模式下的文件名，文件内容），请务必修改数据的名称。评测机会根据名称和数据编号进行缓存，因此你必须修改名称来强制刷新缓存。

### **扫描数据**

通过 Scan 按钮，服务器会自动扫描 `htdocs/oj/ojdata/{pid}/` 下的文件，并添加到当前问题数据中。

### **数据名称**

为了简单快捷地使用 `StringStrip` 过滤字符，防止储存数据文件时引来不必要的崩溃，所以数据名称只能出现字母和数字。

当然如果扫描的文件名内含有字母数字以外的字符，我们不会过滤。

### **数据格式**

数据内只能含有字母、数字、符号，尽量不要出现可能与 MathJax 冲突的字符，比如 `$` `\(` `\)`。

数据的换行符随意，将数据送到评测机的过程中 PHP 程序会自动去除所有 `\r` 保留 `\n`

请注意：

Input

    1 2

Output

    3

以及

Input

    1
    2

Output

    3

对于 Python 程序来说，以上两种输入并不相同。希望出题者可以注意输入中的换行。

## **权限**

-----

您可以在 Permission 选项卡内修改问题权限。

目前支持以下两种权限：

1. Experience, 用户经验

2. Hidden, 隐藏试题。该模式下 Data 文本框内可以随便填，但不能为空。

## **贡献者**

-----

每当您编辑问题，创建问题，编辑数据，创建数据的时候，您的头像和用户名都会显示在问题下方的 `Contributor` 内。

## **评测机**

----

### **评测方法**

首先使用 Python 的 subprocess 模块编译程序。

接着使用 Lo-runner 运行程序。

Lo-runner 运行程序的过程中，如果出现 CE, MLE, TLE, RE 等程序运行时错误，不会返回占用内存、时间信息。

当评测机程序检测到 Lo-runner 顺利执行完程序后，会调用 Lo-runner 的 check 函数进行比较。

Lo-runner 首先确认输出大小，太大返回 OLE。

接着逐字节比较文件，完全相同返回 Accepted。

如果不完全相同，去除换行符、空格、制表符再比较一次，如果答案和用户输出相同，返回 Presentation Error。

如果以上过程中发现答案的确不同，返回 Wrong Answer。

### **评测机运行流程**

评测机使用约定好的 WatcherAPIKey 与服务器的 /oj/watcherapi 使用 HTTP 协议通信。

评测机使用 Verify 操作验证密钥，开始执行命令。每一秒向服务器查询可用任务。

查询到任务后下载程序，并刷新题目数据。题目数据很大时，评测可能会卡在 Running 状态而 Details 里没有新数据生成。

评测机每执行一步就向 Watcher API 发送数据更新数据库。

## **写在最后**

----

感谢各位出题者的付出。希望 SNGOJ 变得更好。