<?
session_start();
require "conn.php";
require "ip.php";
require "authorize.php";
require "is_admin.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method==='POST'){
    $code=strtoupper(mysql_real_escape_string($_POST['code']));
    $title=mysql_real_escape_string($_POST['title']);
    $text=mysql_real_escape_string($_POST['text']);
    //$tag=mysql_real_escape_string($_POST['tag']);
    if($_SESSION['code']!=$code){
        echo "code error";
        exit;
    }
    $user_id=$_SESSION['user_id'];
    $md5=md5_file($_FILES["file"]["tmp_name"]);
    $tmp_arr = explode('.',$_FILES["file"]["name"]);
    $ext_name=$tmp_arr[count($tmp_arr)-1];
    $file="upload/".$md5.".".$ext_name;
    $file=str_replace(".php",".zip",$file);
    if (file_exists($file)){
    }else{
        move_uploaded_file($_FILES["file"]["tmp_name"],$file);
    }
    if($file==="upload/."){
        $file=NULL;
    }
    $sql="INSERT INTO `articles` (`id`, `title`, `headpic`, `text`, `time`, `user_id`, `viewed`) VALUES (NULL, '$title', '$file', '$text', CURRENT_TIMESTAMP, '$user_id', '0');";
    $result = mysql_query($sql,$conn);
    $id=mysql_insert_id($conn);
    ?>
  添加成功，<a href="article.php?id=<?=$id?>" target="_blank">查看</a>
  <?
    //echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0;url='project.php?id=$id'\">";
    exit;
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>添加</title>
      <link rel="stylesheet" href="css/style.css?v=<?=$css_version?>">
      <script src="tinymce/tinymce.min.js"></script>
      <body>


        <?
require "n.php";
?>

          <div class="box">
            <div class="tags-name">
              添加文章
            </div>
          </div>

          <div class="box">
            <iframe class="msg" name="msg"></iframe>
            <form method="post" target="msg" enctype="multipart/form-data">
              <div class="check-code-pan">
                <input type="text" class="check-code" placeholder="验证码" name="code" /><img class="code" src="code.php?id=<?=rand()?>" alt="">
              </div>

              <div>
                <input placeholder="标题" type="text" name="title" />
              </div>

              <div>
                <textarea placeholder="介绍" name="text"></textarea>
                <script>
                tinymce.init({
                  selector: 'textarea',
                  height: 500,
                  menubar: false,
                  plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code'
                  ],
                  images_upload_url: 'postAcceptor.php',
                  toolbar: 'undo redo |  styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlis | link image',
                  //toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                  //content_css: '//www.tinymce.com/css/codepen.min.css'
                  images_upload_handler: function(blobInfo, success, failure) {
                    var xhr, formData;

                    xhr = new XMLHttpRequest();
                    xhr.withCredentials = false;
                    xhr.open('POST', 'postAcceptor.php');

                    xhr.onload = function() {
                      var json;

                      if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                      }

                      json = JSON.parse(xhr.responseText);

                      if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                      }

                      success(json.location);
                    };

                    formData = new FormData();
                    formData.append('file', blobInfo.blob(), blobInfo.filename());

                    xhr.send(formData);
                  }
                });
              </script>
              </div>
              <input type="file" name="file" id="file" />
              <input class="btn-post" type="submit" value="发布">
            </form>
          </div>

          <?
require "f.php";
mysql_close();
?>