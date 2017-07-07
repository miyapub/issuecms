<?
require "conn.php";
require "ip.php";
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>关于煮豆</title>
    <link rel="stylesheet" href="css/style.css?v=<?=$css_version?>">

    <body>


      <?
require "n.php";
?>

        <div class="box">
          <div class="tags-name">
            免责声明
          </div>
        </div>

        <div class="box">
          <div class="stream-items">
            <div class="new-status status-wrapper">
              <div class="status-item">
                <div class="mod">
                  <div class="hd">
                    一切评论和我们无关
                    <div class="text">
                      <p></p>
                      <p>我们只是一个健康设备的评论平台。</p>
                      <p>一切评论和我们无关</p>
                      <p>所有数据均为网民提供，提交者不是我们平台的工作人员。</p>
                    </div>
                  </div>
                  <div class="actions">
                    <span class="cp"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



        <?
require "f.php";
mysql_close();
?>