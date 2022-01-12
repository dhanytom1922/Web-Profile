<!DOCTYPE html>
<html>
    <!-- HEADER -->
    <head>
        <meta charset="UTF-8">
        <title>Data Pengunjung</title>
        <link rel="stylesheet" href="../../assets/css/hasil.css">
    </head>
    <!-- BODY -->
    <body>
        <div class="beranda">
            <nav>
                <ul>
                    <li><a href="../../index.html">Home</a></li> 
                    <li><a href="../../profil.html">About</a></li>
                    <li><a href="../../connect.html">Connect</a></li>
                </ul>
                <div class="logo">
                    <h2><a href="../../index.html">DHANY</a></h2>
                </div>
                <!-- JAVASCRIPT -->
                <div class="waktu">
                    <p id="waktubos"></p>
                    <script>
                        var d = new Date();
                        document.getElementById("waktubos").innerHTML = d;
                    </script>                
                </div>
            </nav>
        </div>
        <center>
        <div class="berhasil">
            <h2>Your data has been <strong>successfully</strong> submitted.</h2>
        </div>
        <!-- PHP  -->
        <div class='php'>
            <?php
                if(isset($_POST['kirim'])) {
                    $fnama = $_POST ['in_fnama'];
                    echo "Your full name is <i>$fnama</i>";
                    $lnama = $_POST ['in_lnama'];
                    echo " <i>$lnama</i>";
                    $instagram = $_POST ['in_ig'];
                    echo " and your Instagram account is <i>$instagram</i>.";
                }
            ?>
        </div>
        <div class='thanks'>
            <h2>I'll follow you soon. <strong>Thank you!</strong></h2>
        </div>
        </center>  
    </body>
</html>