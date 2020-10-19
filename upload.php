<html>
<title>Form Upload</title>
<head>
    <style>
a, button,input[type=submit],input[type=reset] {
    font-family: sans-serif;
    font-size: 15px;
    background: #555555;
    color: white;
    border: white 3px solid;
    border-radius: 5px;
    padding: 12px 20px;
    margin-top: 10px;
}
a {
    text-decoration: none;
}
a:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover{
    opacity:0.9;
}
</style>
</head>
<body>
<form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
File yang di upload : <input type="file" name="fupload"><br>
Deskripsi File : <br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=upload><a href="index.php">Kembali</a>
</form>