<section class="footer">
    <div class="custContain">
        <duv class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="footerTitle">
                    <h5>GET TO KNOW US BETTER :</h5>
                </div>
                <div class="footerManu">
                    <a href="#"><i class="fa-solid fa-location-dot"></i> <span> Manufacturing unit/Corporate office:</span> (Modi Woodspace Private Limited) A10, Phase-II, Gautam Buddha Nagar, Noida, Uttar Pradesh-201305</a>
                    <a href="#"><i class="fa-solid fa-phone"></i>Phone: +91-120-4269324, +91-120-4269502 Extn 102</a>
                    <a href="#"><i class="fa-solid fa-mobile-screen"></i>Mobile: +91-9810265873</a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i> +91-9599881173</a>
                    <a href="#"><i class="fa-solid fa-envelope"></i> Email: info@vetrafurniture.com</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="footerTitle">
                    <h5>Quick Links :</h5>
                </div>
                <div class="footerManu">
                    <a href="about.php">ABOUT US</a>
                    <a href="#">RANGE</a>
                    <a href="#">MEDIA</a>
                    <a href="#">CATALOG/MATERIAL</a>
                    <a href="#">IPE DECKING</a>
                    <a href="#">OUR STORES</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="footerTitle">
                    <h5>Contact Us :</h5>
                </div>
                <div class="footerManu">
                    <a href="#">Career</a>
                    <a href="blog.php">Blog</a>
                    <a href="contactUs.php">Contact us</a>
                    <a href="#">Complaint Form</a>
                    <a href="furniture.php">Farniture</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="footerTitle">
                    <h5>Working Hours :</h5>
                </div>
                <div class="footerManu">
                    <div class="workingTime">
                        <p>Monday - Friday</p>
                        <p>08:00 - 20:00</p>
                    </div>
                    <div class="workingTime">
                        <p>Saturday</p>
                        <p>09:00 - 21:00</p>
                    </div>
                    <div class="workingTime">
                        <p>Sunday</p>
                        <p>13:00 - 22:00</p>
                    </div>
                </div>
                <div class="footerTitle">
                    <h5>Newsletter subcriber :</h5>
                </div>
                <div class="footerSubcribeSection">
                    <input type="text" placeholder="Put your email address">
                    <button class="FootersubmitBtn"><i class="fa-solid fa-paper-plane"></i></button>
                </div>

                <div class="socalLink">
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </duv>
    </div>
</section>
<section class="footermain">
    <div class="custContain">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="footermainManu">
                    <p>Modi Woodspace Private Limited</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="footerLogo">
                    <a href="index.php">
                        <img src="assets/images/footerlogo.png" alt="img" />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="footerrightManu">
                    <p>©Copyright © 2022 Vetra. All rights reserve</p>
                </div>
            </div>
        </div>
    </div>
</section>









<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- aos animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('front_assets/js/script.js') }}"></script>


<script>
    /* Header Dropdown */
    function myheaderFunction() {
        if (!document.getElementById('myheaderDropdown').classList.contains('show')) {
            document.querySelector('.clsSpan').innerHTML = '<i class="fa-solid fa-angle-up"></i>';
            document.getElementById("myheaderDropdown").classList.add("show");
        } else {
            document.querySelector('.clsSpan').innerHTML = '<i class="fa-solid fa-angle-down"></i>';
            document.getElementById("myheaderDropdown").classList.remove("show");
        }
    }


    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }


    /* sidebar Dropdown */
    function mysidebarFunction() {
        document.getElementById("mysidebarDropdown").classList.toggle("show");
    }
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }



    
</script>
</body>

</html>