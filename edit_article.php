<?
session_start();
require "conn.php";
require "ip.php";
require "authorize.php";
require "is_admin.php";
$method = $_SERVER['REQUEST_METHOD'];

if($method==='GET'){
    $id=mysql_real_escape_string($_GET['id']);
    $sql ="SELECT * FROM `articles` WHERE id=$id";
    $result = mysql_query($sql,$conn);
    $article = mysql_fetch_array($result);
    $user_id=$article['user_id'];
    $user_sql="select * from users where id=$user_id";
    $user_result = mysql_query($user_sql,$conn);
    $user_row = mysql_fetch_array($user_result);
}

if($method==='POST'){
    $id=mysql_real_escape_string($_POST['id']);
    $title=mysql_real_escape_string($_POST['title']);
    $quote=mysql_real_escape_string($_POST['quote']);
    $text=mysql_real_escape_string($_POST['text']);
    $issue=mysql_real_escape_string($_POST['issue']);
    //$tag=mysql_real_escape_string($_POST['tag']);

    //$user_id=0;//默认匿名用户
    //$display=0;
    /*
    if(isset($_SESSION['user_id'])){
      $user_id=$_SESSION['user_id'];  //如果有登录
    }*/
    if(isset($_SESSION['is_admin'])){
      if ($_SESSION['is_admin']===1 || $_SESSION['is_admin']==="1") {
        $display=1;//admin 默认发布
      }
    }



    require 'uppicfile.php';
    $file=get_up_load_file('file');

    if($file!=NULL){
        //uppic
        $sql="UPDATE `articles` SET `headpic` = '$file' WHERE `id` = $id;";
        mysql_query($sql,$conn);
    }
    $sql="UPDATE `articles` SET `title` = '$title',`quote`='$quote',`text`='$text',`issue_id`='$issue' WHERE `id` = $id;";
    mysql_query($sql,$conn);
    ?>
    <script>
      window.parent.location.href="article.php?id=<?=$id?>";
    </script>
  
  <?
    //echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0;url='project.php?id=$id'\">";
    exit;
}
?>
<html lang="zh-CN" class="">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>煮豆 更改文章</title>
    <link rel="stylesheet" id="animate.styles-css" href="issue_css/animate.min.css?ver=1.8.0" type="text/css" media="all">
    <link rel="stylesheet" id="cptch_stylesheet-css" href="issue_css/front_end_style.css?ver=4.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="dashicons-css" href="issue_css/dashicons.min.css?ver=4.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="cptch_desktop_style-css" href="issue_css/desktop_style.css?ver=4.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="smartideo_css-css" href="issue_css/smartideo.css?ver=2.0.9" type="text/css" media="screen">
    <link rel="stylesheet" id="wp-content-permission-plugin-styles-css" href="issue_css/public.css?ver=1.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="issuem_style-css" href="issue_css/issuem.css?ver=2.4.0" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-issuem-flexslider-css" href="issue_css/flexslider.css?ver=2.4.0" type="text/css" media="all">
    <link rel="stylesheet" id="chld_thm_cfg_parent-css" href="issue_css/style.css?ver=4.4.3" type="text/css" media="all">
    <link rel="stylesheet" id="um_minified-css" href="issue_css/um.min.css?ver=1.3.52" type="text/css" media="all">
    <script type="text/javascript" src="issue_js/jquery.js?ver=1.11.3"></script>
    <script src="tinymce/tinymce.min.js"></script>
    <link rel="icon" href="icons/cropped-bird_favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="icons/cropped-bird_favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="icons/cropped-bird_favicon-180x180.png">
    <meta name="msapplication-TileImage" content="icons/cropped-bird_favicon-270x270.png">
</head>
<body class="page page-template-default browser-chrome os-windows aesop-core aesop-on-cover-child-for-offline">
  <?
  require 'header.php';
  ?>
  <div id="page" class="hfeed site">
    <div id="content" class="site-content">
      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
          <div class="cover">
            <div class="cover-background" role="img"></div>
            <header class="cover-header">
              <h1 class="cover-title">更改文章</h1>
            </header>
          </div>
          <article id="post" class="post-438 page type-page status-publish hentry">
            <div class="entry-content aesop-entry-content">
              
            <iframe class="msg" name="msg" style="width: 100%;height: 40px;"></iframe>
            <form method="post" target="msg" enctype="multipart/form-data">
              
              <input name="id" value="<?=$id?>" type="hidden" />
              <div>
                <input placeholder="标题" type="text" name="title" value="<?=$article['title']?>" />
              </div>

            
              <div>
                <select class="select" name="issue" id="issue">
                  <?
                  $sql ="SELECT * FROM `issues` ORDER BY id DESC";
                  $result = mysql_query($sql,$conn); 
                  while($row = mysql_fetch_array($result)){
                    ?>
                    <option value="<?=$row['id']?>" <?
                    if($article['issue_id']===$row['id']){
                        echo "selected=true";
                    }
                    ?>><?=$row['title']?></option>
                    <?
                  }
                  ?>
                  
                </select>
              </div>

              <div>
                <textarea placeholder="引用" name="quote" value="<?=$article['quote']?>"></textarea>
                <textarea placeholder="正文" name="text"><?=$article['text']?></textarea>
                <script>
                tinymce.init({
                  selector: 'textarea[name=text]',
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
            <!-- .entry-content -->
          </article>
          <!-- #post-## -->
        </main>
        <!-- #main -->
      </div>
      <!-- #primary -->
    </div>
    <!-- #content -->
    <?
    require 'footer.php';
    ?>
    <!-- #colophon -->
  </div>
  <!-- #page -->
  <div id="um_upload_single" style="display:none">
  </div>
  <div id="um_view_photo" style="display:none">
    <a href="#" data-action="um_remove_modal" class="um-modal-close"><i class="um-faicon-times"></i></a>
    <div class="um-modal-body photo">
      <div class="um-modal-photo">
      </div>
    </div>
  </div>
  <script type="text/javascript" src="issue_js/headroom.min.js"></script>
  <script type="text/javascript" src="issue_js/cover.js"></script>
</body>
</html>
<?
mysql_close();
?>