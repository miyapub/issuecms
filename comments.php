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
            评论
          </div>
        </div>
        <div class="box">



          <?
$sql ="select * from msgs order by id desc";
$result = mysql_query($sql,$conn);
while($msg_row = mysql_fetch_array($result)){
    $user_id=$msg_row['user_id'];//用户id
    $event=$msg_row['event'];//事件
    $event_word='';//事件名称
    $event_id=$msg_row['event_id'];//事件id
    $target=$msg_row['target'];//目标
    $target_word='';//目标名称
    $target_id=$msg_row['target_id'];//目标id
    if($event==='comment'){
        //评论
        $event_word='评论了';//事件名称
        
        $comment_sql="select * from comments where id='$event_id'";
        $comment_result = mysql_query($comment_sql,$conn);
        if($comment_row = mysql_fetch_array($comment_result)){
        }
    }
    if($event==='testing'){
        //评论
        $event_word='检测了';//事件名称
    }
    
    
    if($target==='device'){
        $target_word='设备';
        $target_tabel='projects';
        $link='project';
    }
    if($target==='company'){
        $target_word='公司';
        $target_tabel='projects';
        $link='project';
    }    if($target==='event'){
        $target_word='事件';
        $target_tabel='projects';
        $link='project';
    }
    if($target==='article'){
        $target_word='文章';
        $target_tabel='articles';
        $link='article';
    }
    
    $target_sql="select * from $target_tabel where id='$target_id'";
    $target_result = mysql_query($target_sql,$conn);
    if($target_row = mysql_fetch_array($target_result)){
    }
    
    
    $user_sql="select * from users where id='$user_id'";
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
                        <a href="profile.php?id=<?=$user_row['id']?>"><img src="<?=$user_row['avatar']?>" alt="<?=$user_row['name']?>"></a>
                      </div>
                      <div class="text">
                        <a href="profile.php?id=<?=$user_row['id']?>" class="lnk-people">
                          <?=$user_row['name']?>
                        </a>
                        <?=$event_word?>
                          <?=$target_word?>：
                            <p class="lnk-people">

                              <div>
                                <?=$comment_row['text']?>
                              </div>
                              <div>

                                <?
    $tmp_arr = explode('.',$comment_row['pic']);
    $ext_name=$tmp_arr[count($tmp_arr)-1];
    
    if($ext_name==="jpg" || $ext_name==="gif" || $ext_name==="jpeg" || $ext_name==="png"){
        ?>
                                  <img src="<?=$comment_row['pic']?>" alt="">
                                  <?
    }else{
        ?>
                                    <?=$comment_row['pic']?>
                                      <?
    }
    ?>
                              </div>
                            </p>
                      </div>
                    </div>
                    <div class="bd editor">
                      <div class="block note-block">

                        <div class="pic">
                          <div class="pic-wrap">
                            <a href="<?=$link?>?id=<?=$target_row['id']?>"><img src="<?=$target_row['pic']?>"></a>
                            <span class="valign"></span>
                          </div>
                        </div>

                        <div class="content">
                          <div class="title">
                            <a href="<?=$link?>.php?id=<?=$target_row['id']?>">
                              <?=$target_row['title']?>
                            </a>
                          </div>
                        </div>


                      </div>
                      <div class="attachment">
                      </div>
                      <div class="actions">
                        <span class="created_at" title="<?=$row['time']?>">
    <?=$msg_row['time']?><span class="ghost"><!--来自 <a href="https://www.douban.com/interest/1/1/">热门精选</a>--></span>
                        </span>
                        <span class="cp">
    <?
    if($_SESSION['is_admin']==="1"){
        ?>
        <a class="delete" href="delete_comment.php?id=<?=$row['comment_id']?>">delete</a>
        <?
    }
    ?>
    </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?
}
?>
        </div>
        </div>
        <?
require "f.php";
mysql_close();
?>