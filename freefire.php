<html>
    <title>WEBSITE FREE FIRE</title>
    <head>
        <h1><marquee>LOGIN FREE FIRE</marquee></h1>
    <link rel="stylesheet" type="text/css" href="style.css">
    <form method ="post">
        <label for="email">EMAIL:</label><br>
        <input type ="email"; name = "inputtext" value ="" required><br>
        <label for="password">PASSWORD:</label><br>
        <input type ="password"  id="password" name ="password" placeholder="masuk password" required><br>
        <label for="sudah lengkap">sudah lengkap</label><br>
        <input type ="checkbox"; name = "inputtext2" value ="" required><br>
        <div>
        
        </div>
        <input type ="submit" value ="login"><BR>
        <br>
            <a> <a href="https://www.instagram.com/">
                <label for="instagram">INSTAGRAM</label><br>
            </a>
            <br>
            <a> <a href="https://www.facebook.com/">
                <label for="fecebook">FECEBOOK</label><br> 
                         
        </br>
    </head>    
    </form>

    <?php
//mencetak apakah form input sudah di inputkan
if ($_SERVER["REQUEST_METHOD"] == "POST"){

//mengambil dan menampilkan data dari hasil inputan
$inputtext = $_POST ["inputtext"];
$inputtext2 = $_POST ["inputtext2"];
echo "$inputtext<br> $inputtext2";
}
?>
</html>

            

             