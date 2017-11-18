<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\tp5\public/../application/index\view\index\table.html";i:1509697018;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="__STATIC__/lib/layui/css/layui.css"> 
    <script src="__STATIC__/lib/layui/layui.js"></script>
    <script src="__STATIC__/js/my.js"></script>   
</head>
<body>
        <table class="layui-table" lay-data="{height:315, url:'http://127.0.0.1/tp5/public/index.php/index/index/showTableData', page:true, id:'test',limits:[10,20,30,40,50], limit:10,height:'500'}" lay-filter="test">
            <thead>
              <tr>
                <th lay-data="{field:'id', width:80, sort: true}">ID</th>
                <th lay-data="{field:'username', width:80}">用户名</th>
                <th lay-data="{field:'sex', width:80, sort: true}">性别</th>
                <th lay-data="{field:'city', width:80}">城市</th>
                <th lay-data="{field:'sign', width:177}">签名</th>
                <th lay-data="{field:'experience', width:80, sort: true}">积分</th>
                <th lay-data="{field:'score', width:80, sort: true}">评分</th>
                <th lay-data="{field:'classify', width:80}">职业</th>
                <th lay-data="{field:'wealth', width:135, sort: true}">财富</th>
              </tr>
            </thead>
        </table>
        <!-- <button type="button" class="layui-btn" id="test1">
          <i class="layui-icon">&#xe67c;</i>上传图片
        </button> -->
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
          <legend>常规使用：普通图片上传</legend>
        </fieldset>
        <div class="layui-upload">
          <button type="button" class="layui-btn" id="test1">上传图片</button>
          <div class="layui-progress layui-progress-big" lay-showpercent="true" lay-filter="demo">
            <div class="layui-progress-bar layui-bg-red" lay-percent="0%"></div>
          </div>
          <div class="layui-upload-list" style="width: 200px;">
            <img class="layui-upload-img" id="demo1" width="80%">
            <p id="demoText"></p>
          </div>
        </div> 
         <table class="layui-table" lay-data="{height:315, url:'http://127.0.0.1/tp5/public/index.php/index/index/showTableData', page:true, id:'test',limits:[10,20,30,40,50], limit:10,height:'500'}" lay-filter="test">
            <thead>
              <tr>
                <th lay-data="{field:'id', width:80, sort: true}">ID</th>
                <th lay-data="{field:'username', width:80}">用户名</th>
                <th lay-data="{field:'sex', width:80, sort: true}">性别</th>
                <th lay-data="{field:'city', width:80}">城市</th>
                <th lay-data="{field:'sign', width:177}">签名</th>
                <th lay-data="{field:'experience', width:80, sort: true}">积分</th>
                <th lay-data="{field:'score', width:80, sort: true}">评分</th>
                <th lay-data="{field:'classify', width:80}">职业</th>
                <th lay-data="{field:'wealth', width:135, sort: true}">财富</th>
              </tr>
            </thead>
        </table>
        <div class="layui-progress">
          <div class="layui-progress-bar layui-bg-orange" lay-percent="30%"></div>
        </div>
        <script>
            layui.use(['table','upload','element'], function(){
                var upload = layui.upload,
                layer = layui.layer, 
                $     = layui.jquery,
                element = layui.element,
                table = layui.table;

                  //执行实例
                  var uploadInst = upload.render({
                    elem: '#test1' //绑定元素
                    ,url: 'Upload/upload111' //上传接口
                    ,before: function(obj){
                          //预读本地文件示例，不支持ie8
                       
                        loading = layer.load(2, {
                        shade: [0.2,'#000']
                        });

                      //图片预览
                      obj.preview(function(index, file, result){
                        $('#demo1').attr('src', result); //图片链接（base64）
                      });
                    }
                    ,done: function(res){
                      if(res.status == 1) {
                        layer.close(loading);
                        layer.msg(res.message);
                      }
                    }
                    ,error: function(){
                      //请求异常回调
                    }
                  });
            });
        </script>
</body>
</html>