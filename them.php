
<?php
$sqli = new mysqli("localhost", "root", "","web");
mysqli_query($sqli,"SET NAMES 'UTF8'");
?>

<form action="module/baiviet/xuly.php" method="post" enctype="multipart/form-data" >
<div class="left">
<table width="524" height="212" border="0">
  <tr>
    <td colspan="3"><div align="center">CHỨC NĂNG THÊM MỚI BÀI VIẾT</div></td>
  </tr>
  <tr>
    <td width="132">Tên bài viết:</td>
    <td colspan="2"><input type="text" name="tenbaiviet" id="tenbaiviet"></td>
  </tr>
  <tr>
    <td>Ảnh minh họa:</td>
    <td colspan="2"><label for="thutu"></label>
      <input type="file" name="anhminhhoa" id="anhminhhoa" /></td>
  </tr>
  <tr>
    <td>Tóm tắt :</td>
    <td colspan="2"><textarea class="ckeditor" name="tomtat" id="tomtat" cols="45" rows="10" ></textarea></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td colspan="2"><textarea class="ckeditor" name="noidung" id="noidung" cols="45" rows="20"></textarea></td>
  </tr>
  <tr>
    <td>Loại tin</td>
    <td colspan="2"> 
    <?php
	$sql= "select * from loaitin";
	$loaitin=mysqli_query($sqli,$sql);
	?>
    <select name="loaitin" id="loaitin">
    <option > </option>
    <?php
	
	while($dong_loaitin = mysqli_fetch_array($loaitin))
	{
	?>
    <option value="<?php echo $dong_loaitin["idloaitin"]?>"> <?php echo $dong_loaitin["tenloaitin"]?> </option>
    
    <?php
	}
	?>
    
    </select></td>
  </tr>
  <tr>
    <td>Chuyên mục</td>
    <td colspan="2"> 
    <?php
	$sqlcm= "select * from chuyenmuc";
	$chuyenmuc=mysqli_query($sqli,$sqlcm);
	?>
    <select name="chuyenmuc" id="chuyenmuc">
    <?php
	while($dong_chuyenmuc = mysqli_fetch_array($chuyenmuc))
	{
	?>
    <option value="<?php echo $dong_chuyenmuc["idchuyenmuc"]?>" > <?php echo $dong_chuyenmuc["tenchuyenmuc"]?> </option>
    
    <?php
	}
	?>
    
    </select></td>
    
    </select></td>
  </tr>
  <tr>
    <td>Tin hot</td>
    <td colspan="2"><label for="tinhot"></label>
      <select name="tinhot" id="tinhot">
      <option value="Tin hot">Tin hot</option>
      <option value="Không hot">Không hot</option>
      </select></td>
    <td>  
    <td>  
  </tr>
  <tr>
    <td>Trạng thái</td>
    <td colspan="2"><select name="trangthai" id="trangthai">
      <option value="Hiển thị">Hiển thị</option>
      <option value="Không hiển thị">Không hiển thị</option>
    </select></td>
  </tr>
  <tr>
    <td>Ngày thêm</td>
    <td colspan="2"><input type="text" name="ngaythem" id="ngaythem" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="70"><input type="submit" name="them" id="them" value="Thêm"></td>
    <td width="308"><input type="submit" name="reset" id="reset" value="Reset"></td>
  </tr>
</table>
</div>
</form>


//VERSION 1.1 - CUONGDAO
<?php
    $sqli = new mysqli("localhost", "root", "","web");
    mysqli_query($sqli,"SET NAMES 'UTF8'");
    ?>

<form action="module/baiviet/xuly.php" method="post" enctype="multipart/form-data" >
<div class="left">
<table width="524" height="212" border="0">
<tr>
<td colspan="3"><div align="center">CHỨC NĂNG SỬA BÀI VIẾT</div></td>
</tr>
<tr>
<td width="132">Tên bài viết:</td>
<td colspan="2"><input type="text" name="tenbaiviet" id="tenbaiviet"></td>
</tr>
<tr>
<td>Ảnh minh họa:</td>
<td colspan="2"><label for="thutu"></label>
<input type="file" name="anhminhhoa" id="anhminhhoa" /></td>
</tr>
<tr>
<td>Tóm tắt :</td>
<td colspan="2"><textarea class="ckeditor" name="tomtat" id="tomtat" cols="45" rows="10" ></textarea></td>
</tr>
<tr>
<td>Nội dung</td>
<td colspan="2"><textarea class="ckeditor" name="noidung" id="noidung" cols="45" rows="20"></textarea></td>
</tr>
<tr>
<td>Loại tin</td>
<td colspan="2">
<?php
    $sql= "select * from loaitin";
    $loaitin=mysqli_query($sqli,$sql);
    ?>
<select name="loaitin" id="loaitin">
<option > </option>
<?php
    
    while($dong_loaitin = mysqli_fetch_array($loaitin))
    {
        ?>
<option value="<?php echo $dong_loaitin["idloaitin"]?>"> <?php echo $dong_loaitin["tenloaitin"]?> </option>

<?php
    }
    ?>

</select></td>
</tr>
<tr>
<td>Chuyên mục</td>
<td colspan="2">
<?php
    $sqlcm= "select * from chuyenmuc";
    $chuyenmuc=mysqli_query($sqli,$sqlcm);
    ?>
<select name="chuyenmuc" id="chuyenmuc">
<?php
    while($dong_chuyenmuc = mysqli_fetch_array($chuyenmuc))
    {
        ?>
<option value="<?php echo $dong_chuyenmuc["idchuyenmuc"]?>" > <?php echo $dong_chuyenmuc["tenchuyenmuc"]?> </option>

<?php
    }
    ?>

</select></td>

</select></td>
</tr>
<tr>
<td>Tin hot</td>
<td colspan="2"><label for="tinhot"></label>
<select name="tinhot" id="tinhot">
<option value="Tin hot">Tin hot</option>
<option value="Không hot">Không hot</option>
</select></td>
<td>
<td>
</tr>
<tr>
<td>Trạng thái</td>
<td colspan="2"><select name="trangthai" id="trangthai">
<option value="Hiển thị">Hiển thị</option>
<option value="Không hiển thị">Không hiển thị</option>
</select></td>
</tr>
<tr>
<td>Ngày thêm</td>
<td colspan="2"><input type="text" name="ngaythem" id="ngaythem" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td width="70"><input type="submit" name="them" id="them" value="Thêm"></td>
<td width="308"><input type="submit" name="reset" id="reset" value="Reset"></td>
</tr>
</table>
</div>
</form>

