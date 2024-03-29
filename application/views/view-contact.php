<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

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
                <li id="b1"><a href="finalproject">Home</a></li>
                <li id="b2"><a href="hasilpanen">Hasil Panen</a></li>
                <li id="b3"><a style="background: rgb(238, 234, 226);" href="contact">Contact</a></li>
                <li id="b4"><a href="admin"> Admin</a></li>

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

      

       
        <section id="see">
            <div class="s1">
                <div class="slide1">
                    <img src="assets/img/aurel.png">
                    <div class="dp1">
                            <header >Aurel Stefani Alda</header>         
                        <p class="font-weight-bold">
                         <strong>NIM : 12210861</strong> 
                        </p>
                        <!-- <div class="h5">Hubungi Kami</div> -->
                        <a href="https://wa.me/6289693226048" class="feature bg-success bg-gradient text-white rounded-1 mb-1"><i class="bi bi-whatsapp" <p> 082251552021</p>
                        </i></a>                       
                    </div>
                </div>
            </div>
        </section>

        <section id="see">
            <div class="s1">
                <div class="slide1">
                    <img src="assets/img/awang.png">
                    <div class="dp1">
                            <header >Awang Dafa Faturiansyah</header>         
                        <p class="font-weight-bold">
                         <strong>NIM : 12210991</strong> 
                        </p>
                        <a href="https://wa.me/6282157308640" class="feature bg-success bg-gradient text-white rounded-1 mb-1"><i class="bi bi-whatsapp" <p> 082157308640</p>
                        </i></a>                       
                    </div>
                </div>
            </div>
        </section>

        <section id="see">
            <div class="s1">
                <div class="slide1">
                    <img src="assets/img/eni.png">
                    <div class="dp1">
                            <header >  Eni Restari</header>         
                        <p class="font-weight-bold">
                         <strong>NIM : 12210880</strong> 
                        </p>
                        <a href="https://wa.me/6282159613903" class="feature bg-success bg-gradient text-white rounded-1 mb-1"><i class="bi bi-whatsapp" <p> 082159613903</p>
                        </i></a>                       
                    </div>
                </div>
            </div>
        </section>

        <section id="see">
            <div class="s1">
                <div class="slide1">
                    <img src="assets/img/iqbal.png">
                    <div class="dp1">
                            <header > Muhammad Iqbal</header>         
                        <p class="font-weight-bold">
                         <strong>NIM : 12210967</strong> 
                        </p>
                        <a href="https://wa.me/628152113027" class="feature bg-success bg-gradient text-white rounded-1 mb-1"><i class="bi bi-whatsapp" <p> 08152113027</p>
                        </i></a>                       
                    </div>
                </div>
            </div>
        </section>

        <section id="see">
            <div class="s1">
                <div class="slide1">
                    <img src="assets/img/ira.png">
                    <div class="dp1">
                            <header > Stani Amyroh</header>         
                        <p class="font-weight-bold">
                         <strong>NIM : 12210896</strong> 
                        </p>
                        <a href="https://wa.me/6289694363748" class="feature bg-success bg-gradient text-white rounded-1 mb-1"><i class="bi bi-whatsapp" <p> 089694363748</p>
                        </i></a>                       
                    </div>
                </div>
            </div>
        </section>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>