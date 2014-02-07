<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<textarea id="aa" name="aa" cols="30" rows="10">TEST</textarea>
<script src="tinymce/tinymce.min.js"></script> 
<script>
tinymce.init({
	language : 'zh_TW',
content_css : "a.css",
selector:"textarea#aa",
plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code filemanager "
   ],
   toolbar1: "code | undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview ",
   image_advtab: true ,
   
   external_filemanager_path:"/tinymce/plugins/filemanager/",
   filemanager_title:"檔案管理工具" ,
   //external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
});
</script>
</body>
</html>
