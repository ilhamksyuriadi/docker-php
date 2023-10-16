<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Handling Form</title>
</head>

<body>
  <form method="POST" action="process-data.php">
    <div>
      <b>Nama :</b>
      <br />
      <input name="nama" type="text" />
    </div>
    <br />
    <div>
      <b>Email :</b>
      <br />
      <input name="email" type="text" />
    </div>
    <br />
    <div>
      <b>Jenis Kelamin : </b>
      <br />
      <input name="gender" type="radio" value="L" />
      Laki-laki
      <input name="gender" type="radio" value="P" />
      Perampuan
    </div>
    <br />
    <div>
      <b>Umur : </b>
      <br />
      <select name="umur">
        <option value="0-29">Di bawah 30</option>
        <option value="30-60">Antara 30 sd 60</option>
        <option value="60+">Di atas 60</option>
      </select>
    </div>
    <br />
    <div>
      <b>Alamat :</b>
      <br />
      <textarea name="alamat" cols="30" rows="4"></textarea>
    </div>
    <br />
    <div>
      <input type="submit" name="Submit" value="Submit" />
    </div>
  </form>
</body>

</html>