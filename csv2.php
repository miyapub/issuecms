<?
$GLOBALS['i']=1;
function make($name,$len){
    

    $pass='PWNot!';
    $str='';
    for ($x=1; $x<=$len; $x++) {
        $GLOBALS['i']++;
        $s=$name."_".$x."@jikedaka.com,".$pass.$GLOBALS['i']."\n";
        $str .= $s;
    }
    return $str;
    
}
function export_csv($filename,$data){
    header("Content-type:text/csv");
    header("Content-Disposition:attachment;filename=".$filename.".csv");
    header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
    header('Expires:0');
    header('Pragma:public');
    echo $data;
}
$str_head = "邮箱帐号(必填), 邮箱密码(必填)\n";
$str_head=iconv('utf-8','gb2312',$str_head); //中文转码
$data=$str_head;
$data.= make('bjetyy',10);
$data.= make('zryhyyek',2);
$data.= make('bjlhyy',2);
$data.= make('jfj307yy',3);
$data.= make('jfj301yy',4);
$data.= make('mhzyy',2);
$data.= make('jfj304yy',5);
$data.= make('bjyy',1);
$data.= make('fwyy',2);
$data.= make('bjzyyy',1);
$data.= make('zxyjhyy',1);
$data.= make('mtzyy',1);
$data.= make('bjazyy',3);
$data.= make('htzyy',1);
$data.= make('bjtryy',1);
$data.= make('sdeys',8);
$data.= make('sdykdx',1);
$data.= make('zgrmjfj',2);
$data.= make('hmyy',1);
$data.= make('xzmz',1);
export_csv('csv',$data);
//echo $data;
?>