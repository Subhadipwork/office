<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.include.head')

<body>

    <section class="header" id="header">
        <div class="custContain">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo.png" alt="logo" />
                </a>
                <div class="d-flex">
                    <div class="search-container mr-2">
                        <input type="text" class="search-input" placeholder="Search" />

                        <i class="fa-solid fa-magnifying-glass" id="search-btn"></i>
                    </div>

                    <button class="headerToggle" onclick="opensidebar()"><i class="fa-solid fa-bars-staggered"></i></button>

                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button onclick="myheaderFunction()" class="dropbtn dropbtnHead induClrBtn">Furniture <span class="clsSpan"> <i class="fa-solid fa-angle-down"></i></span></button>
                                <div id="myheaderDropdown" class="dropdown-content">
                                  @if (allcategory()->count() > 0)
                                    @foreach (allcategory() as $category)
                                    <a href="{{route('category',$category->id)}}">{{$category->category_name}}</a>
                                    @endforeach
                                  @endif
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="project.php">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactUs.php">Contact</a>
                        </li>

                    </ul>
                </div>
            </nav>
            <div class="subHeaderSection">
                <div class="searchSection">
                    <div class="sharchBar">
                        <input type="text" placeholder="Search Hear....">
                        <button class="HeadwerSubmitBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- sidebar -->
    <section class="sideManu" id="addSection5">
        <div class="sideBarSection">
            <div class="sidebarHeader">
                <div class="sidebarLogo">
                    <a href="index.php">
                        <img src="assets/images/logo.png" alt="logo" />
                    </a>
                </div>
                <div class="sidebarClose" onclick="closesidebar()">
                    <button class="sidecloseBtn"><i class="fa-solid fa-xmark"></i></button>
                </div>
            </div>
            <div class="sidebarManu">
                <ul>
                    <a href="index.php">
                        <li>Home</li>
                    </a>
                    <a href="about.php">
                        <li>About Us</li>
                    </a>
                    <div class="dropdown">
                        <button onclick="mysidebarFunction()" class="dropbtn dropbtnSide">Furniture <span class="clsSideSpan"><i class="fa-solid fa-angle-down"></i></span></button>
                        <div id="mysidebarDropdown" class="dropdown-content">
                            <a href="furniture.php">
                                <li>Outdoor Furniture</li>
                            </a>
                            <a href="furniture.php">
                                <li>Indood Furniture</li>
                            </a>
                            <a href="furniture.php">
                                <li>Garden Furniture</li>
                            </a>
                        </div>
                    </div>
                    <a href="project.php">
                        <li>Project</li>
                    </a>
                    <a href="blog.php">
                        <li>Blog</li>
                    </a>
                    <a href="faq.php">
                        <li>FAQ</li>
                    </a>
                    <a href="contactUs.php">
                        <li>Contact</li>
                    </a>
                </ul>
            </div>
        </div>
    </section>


    <!-- Enquiry Section -->
    <div class="enquiryBtnSection">
        <button class="enquiryBtn" onclick="onenFron()">Enquiry</button>
    </div>

    <section class="EnquirySection" id="addSection1">
        <div class="EnquiryFrom">
            <div class="EnqrHeader">
                <h5>Enquiry From</h5>
                <button class="CloseBtn" onclick="closeBtn()"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <form>
                <div class="fromInput">
                    <label form="name">Name<span>*</span> </label>
                    <input type="text" placeholder="Your Name">
                </div>
                <div class="fromInput">
                    <label form="name">Phone No.<span>*</span> </label>
                    <input type="number" placeholder="Phone No.">
                </div>
                <div class="fromInput">
                    <label form="name">Category<span>*</span> </label>
                    <select>
                        <option>Product Category</option>
                        <option>Outdoor Sofa Set</option>
                        <option>Outdoor Chair Table Set</option>
                        <option>Outdoor Sofa Set</option>
                        <option>Outdoor Chair Table Set</option>
                        <option>Outdoor Sofa Set</option>
                        <option>Outdoor Chair Table Set</option>
                    </select>
                </div>
                <div class="fromInput">
                    <label form="name">Comment<span>*</span> </label>
                    <textarea type="comment" placeholder="Message"></textarea>
                </div>
                <div class="enqfromSubmit">
                    <button class="EnqSubmitbtn" type="button">Submit</button>
                </div>
            </form>
        </div>
    </section>



    <!-- sidebar Dropdown arrow -->
    <script>
        document.querySelector('.dropbtnSide').addEventListener('click', function() {
            if (document.getElementById('mysidebarDropdown').classList.contains('show')) {
                document.querySelector('.clsSideSpan').innerHTML = '<i class="fa-solid fa-angle-up"></i>';
            } else {
                document.querySelector('.clsSideSpan').innerHTML = '<i class="fa-solid fa-angle-down"></i>';
            }
        })

        /**header-sticky****/
        function stickyHeader() {
            if (window.scrollY > 100) {
                document.getElementById('header').classList.add('sticky');
            } else {
                document.getElementById('header').classList.remove('sticky');
            }
        }
        window.addEventListener('scroll', stickyHeader);
    </script>