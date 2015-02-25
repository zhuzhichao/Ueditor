#Ueditor for laravel 4

`Ueditor for laravel 4` 对于国内最好用的富文本web编辑器[ueditor](http://ueditor.baidu.com/website/onlinedemo.html)的封装，方便使用 `laravel` 的朋友能够快速配置和使用，以及在线更新编辑器。


##特点
1. 方便配置
2. 随时更新
3. 使用[composer](https://getcomposer.org/)进行安装管理，国际标准，方便快捷


##Install
这里不详细介绍如何安装composer了，大家根据[链接](https://getcomposer.org/)自行安装吧！

命令行下直接 `composer require "zhuzhichao/ueditor"` ，版本的话无特殊需求则选择 `dev-master`，当前使用的Ueditor版本为1.4.3


##Config
1.在 `app/config/app.php` 的 `providers` 数组中添加
```php
'Zhuzhichao\Ueditor\UeditorServiceProvider',
```
`aliases` 数组中添加
```php
'Ueditor'        => 'Zhuzhichao\Ueditor\Ueditor',
```
**同时请确保 app.php 中`url` 的值为web的地址, 同时别忘了`composer dumpautoload`**

2.命令行下执行如下命令
```shell
php artisan config:publish zhuzhichao/ueditor
php artisan asset:publish zhuzhichao/ueditor
```

3.配置文件的修改:
需要个性配置请到这里修改 app/config/packages/zhuzhichao/ueditor/config.php

4.终于配置完成了

##Use
1.这里封装了以下方法可以方便大家添加编辑器的css和js，以及编辑器，直接在 `blade` 的模版中使用
```php
// 添加css样式
{{ Ueditor::css() }}
```

```php
// 添加编辑器样式
// 该方法有两个参数，
// 第一个为显示的编辑器内容【可选】
// 第二个为编辑器的attribute数组，可以控制编辑器的id,style,class等内容【可选】，默认id为myEditor
// example: Ueditor::content('', ['id'=>'textid', 'class'=>'text-ueditor'])
{{ Ueditor::content() }}
// 得到 <script type='text/plain'  id='textid' class='text-ueditor'></script>
```

```php
// 添加js
{{ Ueditor::js() }}
```

```javascript
// 添加自己的JS代码，初始化编辑器
var ue = UE.getEditor('editor');
```

2.文件的上传位置为 `public/upload` 文件夹下，请确保有写入权限

3.好嘞，终于大功告成，你可以参考[这里](http://ueditor.baidu.com/website/onlinedemo.html)来使用编辑器的一些方法了。

##Bug
如果你遇到了问题，可以先尝试 `composer update` 来更新一下。如果问题依旧，请提交[issue](https://github.com/zhuzhichao/Ueditor/issues)，我会及时回复。当然如果你能提交[Pull Requests](https://github.com/zhuzhichao/Ueditor/pulls)更好，^^

##Contributing
有什么新的想法和建议，欢迎提交[issue](https://github.com/zhuzhichao/Ueditor/issues)或者[Pull Requests](https://github.com/zhuzhichao/Ueditor/pulls)。

##License
MIT
