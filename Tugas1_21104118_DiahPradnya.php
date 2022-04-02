<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
<title>Menghitung Luas Segitiga</title>
</head>
<body>
    <font color='purple'> Menghitung Luas Segitiga </font>
    <table>
        <tr>
            <td>Alas</td>
            <td>:</td>
            <td><input type='text' id='txtAlas' name='txtAlas'></td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td>:</td>
            <td><input type='text' id='txtTinggi' name='txtTinggi'></td>
        </tr>
        <tr>
            <td><input type='button' id='btnHitung' value='Hitung Luas'
                onclick='hitungLuas();'></td>
        </tr>
        <tr>
            <td>Luas</td>
            <td>:</td>
            <td><input type='text' id='txtLuas' name='txtLuas'></td>
        </tr>
    </table>
    <script type=text/javascript>
        function hitungLuas() {
            var alas = document.getElementById('txtAlas').value;
            var tinggi = document.getElementById('txtTinggi').value;
            var luas = (alas * tinggi) / 2;
            document.getElementById('txtLuas').value = luas;
        }
    </script>
 
</body>
</html>