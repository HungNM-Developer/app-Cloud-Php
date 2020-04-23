<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Nhận Dạng Tam Giác</title>
    <style type="text/css">
    .stylel{
        color: #990066;
        font-style: italic;
        font-weight: bold;
    }
    #1{
        color: #ff0000;
        font-weight: bold;
    }
    </style>
</head>
<body>
    <?php
    // Kiểm tra điều kiện để có 1 TG
    if(isset($_POST["a"]) && isset($_POST["b"]) &&($_POST["c"]))
    {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    if($a+$b>$c && $a+$c>$b && $b+$c>$a)
    {
    if($a == $b && $b == $c)
    $loai ="Tam giác đều";
    elseif(($a==$b || $b==$c || $a==$c) && (pow($a,2)==pow($b,2)+pow($c,2) ||
    pow($b,2)==pow($c,2)+pow($a,2) || pow($c,2)==pow($a,2)+pow($b,2)))
    $loai = "Tam giác vuông cân";
    elseif($a==$b || $b==$c || $a==$c)
    $loai = "Tam giác cân";
    elseif(pow($a,2)==pow($b,2)+pow($c,2) || pow($b,2)==pow($c,2)+pow($a,2) 
    || pow($c,2)==pow($a,2)+pow($b,2))
    $loai = "Tam giác vuông";
    else
    $loai = "Tam giác thường";
    }
    else
    $loai = "Khong là tam giác";
    }
    ?>
    <form id="forml" name=" forml" method="post" action="nhan-dang-tam-giac.php">
        <table width="400" border="0" align="center">
            <tr>
                <td colspan="2" align="center"><span class="stylel">Nhận Dạng Tam Giác</span></td>
            </tr>
            <tr>
                <td width="101">Cạnh A: </td>
                <td width="289">
                    <label>
                        <input name="a" type="text" id="a" size="20" value="<?php echo $_POST["a"];?>" />
                    </label>
                </td>
            </tr>
            <tr>
                <td >Cạnh B: </td>
                <td >
                    <label>
                        <input name="b" type="text" id="b" size="20" value="<?php echo $_POST["b"];?>" />
                    </label>
                </td>
            </tr>
            <tr>
                <td>Cạnh C: </td>
                <td>
                    <label>
                        <input name="c" type="text" id="c" size="20" value="<?php echo $_POST["c"];?>" />
                    </label>
                </td>
            </tr>
            <tr>
                <td>Loại tam giác: </td>
                <td><label>
                    <input name="1" type="text" id="1" size="35" readonly ="true" style="background-color:#CCCCCC" value="<?php echo $a;?>" />
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2"><label>
                      <input type="submit" name="Submit" value="OK" />
                      </label>
                </td>
            </tr>
        </table>
    </form>
</body>
