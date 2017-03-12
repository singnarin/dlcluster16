<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
    .mylabel{
        display: inline-block;
        width: 150px;
        margin-bottom: 10px;
    }
    </style>
</head>
<body>

<br><br>

<div style="margin:auto;width:800px;">

<form name="myform1" id="myform1" action="" method="post">

<span class="mylabel">Radio 1:</span>
<input type="radio" name="myradio" id="myradio1" value="1" checked="checked">
<br>
<span class="mylabel">Radio 2:</span>
<input type="radio" name="myradio" id="myradio2" value="2">
<br>
<div id="place_select">
<span class="mylabel">Select:</span>
<select name="myselect">
    <option value="">Select</option>
    <option value="1">data 1</option>
    <option value="2">data 2</option>
</select>
<br>
<span class="mylabel">Select 2:</span>
<select name="myselect2">
    <option value="">Select</option>
    <option value="1">data 1</option>
    <option value="2">data 2</option>
</select>
<br>
</div>
</form>

 </div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!--<script type="text/javascript" src="js.js"></script>  -->
<script type="text/javascript">
$(function(){

    // เมื่อ radio ชื่อว่า myradio ถูก คลิก
    $(":radio[name='myradio']").on("click",function(){
        var valData=$(this).val(); // เก็บค่า ไว้ในตัวแปร
        if(valData==2){ // เปรียบเทียบค่า
            $("#place_select").hide(); // ซ่อนส่วนที่ต้องการ
        }else{
            $("#place_select").show();   //แสดงส่วนที่ต้องการ
        }
    });

});
</script>
</body>
</html>
