<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <title>Web Pertanian</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="atas">
        <input type="checkbox" id="check">
        <label for="check">
            <div class="batal" id="btn">></div>
            <div class="a3" id="cancel"></div>
        </label>
        <div class="sidebar">
            <div class="sidebar-bg">
                <div class="sidebar-bgs"></div>
            </div>
            <div class="user">
                <?php
                include "database.php";

                $ambil = mysqli_query($koneksi, "SELECT * FROM user ORDER BY nama ASC limit 1");
                if ($tampil = mysqli_fetch_array($ambil)) {
                    echo "
                <div class='name'>$tampil[nama]</div>
                <i class='fa-solid fa-circle-user'></i>
                <div class='nim'>$tampil[nim]</div>
                <br>
                ";
                }
                ?>
            </div>
            <ul>
                <li id="b1"><a style="background: rgb(238, 234, 226);" href="">Home</a></li>
                <li id="b2"><a href="hasilpanen">Hasil Panen</a></li>
                <li id="b3"><a href="contact">Contact</a></li>
                <li id="b4"><a href="admin">Admin</a></li>

            </ul>
        </div>


        <div class="header">
            <h2>SISTEM INFORMASI ANALISA PERTANIAN</h2>
            <ul>
                <li><a href="login">Log Out</a></li>
            </ul>
        </div>

        <script>
            window.addEventListener("scroll", function() {
                var header = document.querySelector(".header");
                header.classList.toggle("bar", window.scrollY > 0);
            })
        </script>

        <div class="badan">
            <img src="assets/img/bg.jpg">
            <div class="blur">
                <center>
                    <h1>INFORMASI EKONOMI PERTANIAN</h1>
                    <h2>Desa Kerohok 2</h2>
                </center>
            </div>
        </div>

        <div class="btn-info">
            <center>
                <table>
                    <td>
                        <a href="pertanian">
                            <div class="btn1" id="box">
                                <img src="assets/img/wheat.jpg">
                                <p>Pertanian</p>
                            </div>
                        </a>
                    </td>

                    <td>
                        <a href="">
                            <div class="btn2" id="box">
                                <img src="assets/img/foto3.jpg">
                                <p>Ekonomi</p>
                            </div>
                        </a>
                    </td>
                </table>
            </center>
        </div>

        <section id="see">
            <div class="s1">
                <div class="slide1">
                    <img src="assets/img/foto6.jpg">
                    <div class="dp1">
                        <center>
                            <header>
                                Sistem Informasi Pertanian
                            </header>
                        </center>
                        <p>
                            Sistem Informasi pertanian adalah suatu cara yang dilakukan untuk
                            memberi informasi pertanian yang penting dan akurat datang ada pada
                            suatu daerah tertentu.
                        </p>
                        <a href="Pertanian">
                            <p></p>
                            <div class="more">See More</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <div class="slide2">
            <img src="assets/img/foto4.jpg">
        </div>

        <div class="footer">
            <div class="info" style="float: left;">
                <img src="assets/img/bsi.png" height="120" width="120" style=" margin-top: 100px;">
                <h3>Universitas Bina Sarana Informatika</h3><br>
                <div class="footer-address">
                    Jl. Abdul Rahman Saleh No.18, <br> Bangka Belitung Laut,
                    <br> Kec. Pontianak Tenggara, <br> Kota Pontianak,
                    <br> Kalimantan Barat 78124
                    <br>
                    <br>
                    <span>Telp/Whatsapp:</span>
                    <a href="tel:+6282157308640">0821-5730-8640</a><br>
                </div>
            </div>
        </div>

        <div class="logo-icon">
            <center>
                <table>
                    <td>
                        <div class="logo-ig">
                            <a href="https://www.instagram.com/reel/CkPvT_qjhU-/?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </td>
                    <td>
                        <div class="logo-yt">
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </td>
                </table>
            </center>
        </div>
    </div>
    <div class="wall">
        <div class="walls"></div>
    </div>
</body>

</html>