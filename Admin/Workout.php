<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table align="center" width="320" border="1">
  <tr>
    <td width="107">Category</td>
    <td width="197"><form id="form1" name="form1" method="post" action="">
      <label for="listno_1"></label>
      <select name="listno_1" id="listno_1">
      <option value=" ">--Select--</option>
      </select>
    </form></td>
  </tr>
  <tr>
    <td>Sub Category</td>
    <td><form id="form2" name="form2" method="post" action="">
      <label for="listno_2"></label>
      <select name="listno_2" id="listno_2">
      <option value=" ">--Select--</option>
      </select>
    </form></td>
  </tr>
  <tr>
    <td>File</td>
    <td><form id="form3" name="form3" enctype="multipart/form-data" method="post" action="">
      <label for="file_choose"></label>
      <input type="file" name="file_choose" id="file_choose" />
    </form></td>
  </tr>
  <tr>
    <td colspan="2"><form id="form4" name="form4" method="post" action="">
      <div align="center">
        <input type="submit" name="upload" id="upload" value="Upload" />
      </div>
    </form></td>
  </tr>
</table>
</body>
</html>