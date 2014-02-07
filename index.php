<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
<!-- 最新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.1.0/css/bootstrap.min.css">
</head>
<body>
<textarea id="aa" name="aa" cols="30" rows="10">TEST</textarea>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="/bundles/tinymce/tinymce.min.js"></script> 
<script>
tinymce.init({
	language : 'zh_TW',
content_css : "http://cdn.bootcss.com/twitter-bootstrap/3.1.0/css/bootstrap.min.css",
selector:"textarea#aa",
plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code filemanager "
   ],
   toolbar1: "code | undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview ",
   image_advtab: true ,
   
   external_filemanager_path:"/bundles/tinymce/plugins/filemanager/",
   filemanager_title:"檔案管理工具" ,
   //external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
});
</script>
</body>
</html>
