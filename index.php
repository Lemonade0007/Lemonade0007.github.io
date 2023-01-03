<?php
    $con=mysqli_connect("localhost","root","Tyj;010914","RESERVE",3307);
    if (mysqli_connect_errno($con)) 
    { 
    echo "连接MySQL失败: " . mysqli_connect_error(); 
    } 
    header('Content-type:text/html;charset=utf-8');

    $name=$_POST["name"];
    $date=$_POST["date"];
    $period=$_POST["period"];

    if (mktime($period,0,0,$date("m"),$date("d"),$date("Y"))<time())
        echo "<script>alert('已超过该时间');history.back();</script>";
    else if (mktime($period,0,0,$date("m"),$date("d"),$date("Y"))>time()+3*86400)
        echo "<script>alert('不能提前超过3天预约');history.back();</script>";
    else{
        $rtime=$date("Y")+"-"+$date("m")+"-"+$date("d")+" "+$period+":00:00";
        $sql="insert into reserveinfo(rtime,rname) values('$rtime','$name')";
        $res=mysqli_query($con,$sql);
        mysqli_close($con);
        if ($res)
            echo "<script>alert(\"预约成功\");history.back();</script>";
        else 
            echo "<script>alert(\"该时段已被预约\");history.back();</script>";
    }
?>