<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="UTF-8">
<title>suggest</title>
<meta name="keywords" content="">
<meta name="description" content="">
<!--<link href="style.css" rel="stylesheet" media="all">-->
<link href="https://fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
</head>
<?php
$suggester = $_POST["suggester"];
$identity = $_POST["identity"];
$email = $_POST["email"];
$topic = $_POST["topic"];
$class = $_POST["class"];
$file = $_FILES['file']['name'] ; //$_POST["photo"];
$comment = $_POST["comment"];
echo "suggester:".$suggester."<BR>";
echo "identity:".$identity."<BR>";
echo "email:".$email."<BR>";
echo "topic:".$topic."<BR>";
foreach($class as $fav) {
echo "class:".$fav."<BR>";
}
echo "file:".$file."<BR>";
echo "comment:".$comment."<BR>";
$uploadfile = 'upload/'.$_FILES['file']['name'];
echo "uploadfile: $uploadfile <BR>";
$upd_result = "$file"."--> 上傳成功. <BR>";
//if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
// $upd_result = "$photo"."--> 上傳成功. <BR>";
// }
//else {
// $upd_result = "$photo"."--> 上傳失敗. <BR>";
// }
echo "upd_result : $upd_result";
?>
<body>
<header>
<h1>suggest</h1>
</header>
<main id="contents">
<form id="entryForm" action="#" method="post" enctype="multipart/form-data">
<p><strong><span class="require">*</span>為必填項目。</strong></p>
<table border="1">
<main id="contents">
    <p><strong><span class="require">*</span>為必填項目。</strong></p>
    <form id="entryForm" action="E1.php" method="post" enctype="multipart/form-data">
        <table border="1">
        <tr>
            <th>建言者姓名 *</th>
            <td><input type="text" name="suggester" value=<?php echo "$suggester"?> required></td>
        </tr>
        <tr>
            <th>建言者身分 *</th>
            <td><input type="radio" name="identity" id="a" value="高中生" <?php if ($identity=="高中生") echo "checked"?>><label for="a">高中生</label>
            <input type="radio" name="identity" id="b" value="大學部" <?php if ($identity=="大學部") echo "checked"?> checked required><label for="b">大學部</label>
            <input type="radio" name="identity" id="c" value="研究所" <?php if ($identity=="研究所") echo "checked"?>><label for="c">研究所</label>
            <input type="radio" name="identity" id="d" value="家長" <?php if ($identity=="家長") echo "checked"?>><label for="d">家長</label>
            </td>
        </tr>
        <tr>
            <th>建言者信箱 *</th>
            <td><input type="email" name="email" value=<?php echo "$email"; ?> required ></td>
        </tr>
        <tr>
            <th>建言主題 *</th>
            <td><input type="text" name="topic" value=<?php echo "$topic"; ?> required></td>
        </tr>
        <tr>
            <th>建言類別 *</th>
            <td><input type="checkbox" name="class[]" id="favo1" value="招生" <?php if(in_array("招生",$class)){ echo "checked"; }?>><label for="favo1">招生</label>
            <input type="checkbox" name="class[]" id="favo2" value="課程" <?php if(in_array("課程",$class)){ echo "checked"; }?>><label for="favo2">課程</label>
            <input type="checkbox" name="class[]" id="favo3" value="空間" <?php if(in_array("空間",$class)){ echo "checked"; }?>><label for="favo3">空間</label>
            <input type="checkbox" name="class[]" id="favo4"value="活動" <?php if(in_array("活動",$class)){ echo "checked"; }?>><label for="favo4">活動</label>
            <input type="checkbox" name="class[]" id="favo5" value="其他" <?php if(in_array("其他",$class)){ echo "checked"; }?>><label for="favo5">其他</label>
            </td>
        </tr>
        <tr>
            <th>建言內容 *</th>
            <td><textarea name="comment" row="4" col="40" 40"><?php echo "$comment"; ?>></textarea></td>
        </tr>
        <tr>
            <th>附加檔案 *</th>
            <td><input type="file" name="file" <?php echo "$file"; ?>></td>
        </tr>
        </table>
        <div>
            <input type="reset" value="清除重填">
            <input type="submit" value="送出">
        </div>  
    </form>
</main>
</body>
</html>
