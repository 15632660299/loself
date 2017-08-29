# 框架基础

## 框架简介
本框架使用`Laravel` + `dingo api` + `l5-repository` + `laravel-passport`搭建
基本使用方法可参照各个文档
  * [laravel](https://www.laravel.com/docs/5.4)
  * [dingo-api](https://github.com/dingo/api/wiki)
  * [l5-repository](https://github.com/andersao/l5-repository)
  * [laravel-passport](https://laravel.com/docs/5.4/passport)

`注：为了方便使用，已将l5-repository的make:entity本地化为server:entity,请勿使用make:entity来创建模块`

## 框架规范
框架API遵循`RESTful API`规范，相关路由`必须`遵循此规范

## 框架目录
* app/Api/Controllers API控制器目录
* app/Repositories l5-repositories生成文件目录
* app/Transformers Transformers文件目录，用以定义返回的Model数据格式
* app/Presenters Presenters文件目录，用以处理返回的数据
* app/Validators 验证文件目录，用以验证用户数据
* app/Models 模型文件目录

# 工具
## 工具目录
tools
## 工具安装方法
运行tools/init.sh
## 已有工具
框架目前集成了node spider爬虫工具，如需使用请查看[文档](https://github.com/qiutuleng/spider)

