<?php
    include_once '../repository/laptopRepository.php';

    $pc = new LaptopRepository;
    $arr = $pc->getArticleByID(1);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laptopi</title>
    <link rel="stylesheet" href="Laptopi.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <h3 id="up" class="ontech">ON-TECH</h3>
        <div class="searchheader">
            <input type="text" placeholder="Search" style="height: 20px; color: darkslategray;">
            <button style=" width: 50px; height: 25px; background-color: darkslategray; border: inset 0px; border-radius: 0;"><img src="foto/search.png" alt=""></button>
        </div>
        <ul>
            <a href="index.html" style="text-decoration: none; color: whitesmoke"><li>Home</li></a>
            <a href="phone.html" style="text-decoration: none; color: whitesmoke"><li>Mobile Phone</li></a>
            <a href="AboutUs.html" style="text-decoration: none; color: whitesmoke"><li>About Us</li></a>
            <a href="LogIn.html" style="text-decoration: none; color: whitesmoke"><li>Sign Up</li></a>
        </ul>
    </header>
    <main>
        <div class="shigjeta">
            <pre style="color: darkgray;">Home >>> </pre>
            <pre style="color: rgb(73, 73, 73);">Kompjuterë, laptopë</pre>
        </div>
        <hr>
        <pre style="color: rgb(73, 73, 73);; font-size: 25px;">Kompjuterë, laptopë</pre>
        <fieldset style="border: inset 3px rgb(73, 73, 73); border-radius: 12px; background-color: whitesmoke;">
            <legend style="font-size: 20px;">Produktet e rekomanduara</legend>
            <div class="recomended">
                <div class="slideshow-container">
                    <div class="mySlides">
                        <table>
                            <tr>
                                <?php
                                    $arr = $pc->getArticleByID(1);
                                ?>
                                <td><img src="foto/download.jfif"  width="100px"></td>
                                <td><?php echo"$arr[1]"; ?></td>
                                <td><?php echo"$arr[2]"; ?></td>
                            </tr>
                            <tr>
                                <?php
                                    $arr = $pc->getArticleByID(2);
                                ?>
                                <td><img src="foto/USB C Hub.jpg"  width="100px"></td>
                                <td><?php echo"$arr[1]"; ?></td>
                                <td><?php echo"$arr[2]"; ?></td>
                            </tr>
                            <tr>
                                <?php
                                    $arr = $pc->getArticleByID(3);
                                ?>
                                <td><img src="foto/External.jpeg"  width="100px"></td>
                                <td><?php echo"$arr[1]"; ?></td>
                                <td><?php echo"$arr[2]"; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="mySlides">
                        <table>
                        <tr>
                                <?php
                                    $arr = $pc->getArticleByID(4);
                                ?>
                                <td><img src="foto/AcerNitro.jfif"  width="100px"></td>
                                <td><?php echo"$arr[1]"; ?></td>
                                <td><?php echo"$arr[2]"; ?></td>
                            </tr>
                            <tr>
                                <?php
                                    $arr = $pc->getArticleByID(5);
                                ?>
                                <td><img src="foto/Synology2Bay.jpg"  width="100px"></td>
                                <td><?php echo"$arr[1]"; ?></td>
                                <td><?php echo"$arr[2]"; ?></td>
                            </tr>
                            <tr>
                                <?php
                                    $arr = $pc->getArticleByID(6);
                                ?>
                                <td><img src="foto/AcerAspire5.jpg"  width="100px"></td>
                                <td><?php echo"$arr[1]"; ?></td>
                                <td><?php echo"$arr[2]"; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="mySlides">
                        <table>
                        <tr>
                                <?php
                                    $arr = $pc->getArticleByID(7);
                                ?>
                                <td><img src="foto/MSI.jpeg"  width="100px"></td>
                                <td><?php echo"$arr[1]"; ?></td>
                                <td><?php echo"$arr[2]"; ?></td>
                            </tr>
                            <tr>
                                <?php
                                    $arr = $pc->getArticleByID(8);
                                ?>
                                <td><img src="foto/Apple MacBook.jpg"  width="100px"></td>
                                <td><?php echo"$arr[1]"; ?></td>
                                <td><?php echo"$arr[2]"; ?></td>
                            </tr>
                            <tr>
                                <?php
                                    $arr = $pc->getArticleByID(9);
                                ?>
                                <td><img src="foto/Lenovo Legion.jpg"  width="100px"></td>
                                <td><?php echo"$arr[1]"; ?></td>
                                <td><?php echo"$arr[2]"; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>
                <div class="butonattabela">
                        <button onclick="currentSlide(1)" class="button">Më të Shiturat</button>
                        <button onclick="currentSlide(2)" class="button">Më të Shikuarat</button>
                        <button onclick="currentSlide(3)" class="button">Më të Vlerësuarat</button>
                </div>
            </div>
        </fieldset>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace("active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
            }
        </script>
        <div class="fotografit">
            <div class="rubrika">
                <div class="img1">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(10);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img2">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(11);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img3">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(12);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img4">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(13);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img5">
                </div>
                <div class="Cmimi">
                <?php
                        $arr = $pc->getArticleByID(14);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img6">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(15);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img7">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(16);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img8">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(17);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img9">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(18);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img10">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(19);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img11">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(20);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img12">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(21);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img13">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(22);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img14">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(23);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img15">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(24);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
            <div class="rubrika">
                <div class="img16">
                </div>
                <div class="Cmimi">
                    <?php
                        $arr = $pc->getArticleByID(25);
                    ?>
                    <p><?php echo"$arr[1]"; ?></p>
                    <h3><?php echo"$arr[2]"; ?></h3>
                </div>
                <div class="butonirubrika">
                    <a href="buyonline.php"><button style="border-radius: 20px; width: 150px; height: 50px;" class="button">Buy Online</button></a>
                </div>
            </div>
        </div>
    </main>
    <footer style="background-color:rgba(187, 187, 187, 0.842);">
        
        <div style="margin-left: 30px;">
          <a href="index.html"><img src="logo.png" width="100" height="100" style="border-radius: 48%;"></a> <br> <br>
          <p>Since 2006</p>
        </div>

        <div class="Llogaria">
          <b>Llogaria</b> <br> <br>
          <a href="LogIn.html" class="kycu">Kycu</a> <br>
          <a href="LogIn.html">Regjistrohu</a>
        </div>

        <div class="Kontakt">
          <b>Kontakti</b> <br> <br>
          <p>Kosove: +383 49 311 321</p>
          <p>+383 45 639 179</p>
          <p>Email: contact@ubt-uni.net</p>
          <p>Magjistralja Prishtinë-Ferizaj Kilometri i 3</p>
          <p>Per ceshtje te riparimeve dhe kthimeve: <br>044 589 145 </p>
          
        </div>
      
    </footer> 
   
   
    <div class="footer2">
      <a href="#">BUY ONLINE</a> 
      <a href="#">ABOUT US</a> <br> <br> 
      <a href="#"><img src="foto/insta.png" width="30px" height="30px"></a>
      <a href="#"><img src="foto/fb.png" width="30px" height="30px"></a>
      <a href="#"><img src="foto/twitter.png" width="30px" height="30px"></a>

    </div>
    <div style="text-align: center; background-color:rgba(187, 187, 187, 0.842);" >
      <a href="#up" style="text-decoration: none; color: #0b152cf1;">Back to top</a>
          <a href="#up"><img src="foto/arrow.png" width="30px" height="30px" ></a>
      </div>
</body>
</html>