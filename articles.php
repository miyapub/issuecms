<?
session_start();
require "conn.php";
require "ip.php";
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>煮豆，一个健康设备的评论列表</title>
    <link rel="stylesheet" href="css/style.css?v=<?=$css_version?>">

    <body>


      <?
require "n.php";
?>

        <div class="box">
          <div class="tags-name">
            专栏文章
          </div>
        </div>
        <div class="box">



          <?
$sql ="SELECT * FROM `articles` ORDER BY id desc"; //SQL语句
$result = mysql_query($sql,$conn); //查询
while($row = mysql_fetch_array($result)){
    $user_sql="select * from users where id='".$row['user_id']."'";
    $user_result = mysql_query($user_sql,$conn);
    if($user_row = mysql_fetch_array($user_result)){
        
    }
    ?>
            <div class="stream-items">
              <div class="new-status status-wrapper">
                <div class="status-item">
                  <div class="mod">
                    <div class="hd">
                      <div class="usr-pic">
                        <a href="user.php?id=<?=$user_row['id']?>"><img src="<?=$user_row['avatar']?>" alt="<?=$row['name']?>"></a>
                      </div>
                      <div class="text">
                        <a href="article.php?id=<?=$row['id']?>" class="lnk-people">
    发布了文章
    </a>
                      </div>
                    </div>
                    <div class="bd editor">
                      <div class="block note-block">

                        <div class="pic">
                          <div class="pic-wrap">
                            <a href="article.php?id=<?=$row['id']?>"><img src="<?=$row['headpic']?>"></a>
                            <span class="valign"></span>
                          </div>
                        </div>

                        <div class="content">
                          <div class="title">
                            <a href="article.php?id=<?=$row['id']?>">
                              <?=$row['title']?>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="actions">
                      <span class="created_at" title="<?=$row['time']?>">
    <?=$row['time']?><span class="ghost"><!--来自 <a href="https://www.douban.com/interest/1/1/">热门精选</a>--></span>
                      </span>
                      <span class="cp">
    <?
    if($_SESSION['is_admin']==="1"){
        ?>
        <a href="edit_article.php?id=<?=$row['id']?>">delete</a>
        <?
    }
    ?>
    </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?
}
?>


        </div>


        <?
require "f.php";
mysql_close();
?>