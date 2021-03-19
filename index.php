<!DOCTYPE html>
<html class="no-js" lang="en" >
<head> <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SUPERMART</title>
    <link rel="stylesheet" href="/MyProject/frontend/css/bootstrap.css">
    <link rel="stylesheet" href="/MyProject/frontend/css/default.css">
    <link rel="stylesheet" href="/MyProject/frontend/css/style.css">
    <script src="/MyProject/frontend/css/jquery-3.5.1.js"></script>
    <script src="/MyProject/frontend/css/style.js"></script>
    <script src="/MyProject/frontend/css/bootstrap.js"></script>
</head>
<body class="body">
    <header>
        <div id="head">
            <div class="top-bacground" style="background-color:  #3b83d4;height: 42px; width: 100%; position: absolute;"></div>
            <div class="container">
                <div class="row">
                    <div class="top">
                        <div class="top-a">
                            <ul>
                                <li><a href="#">LogIn/SingUp</a></li>
                                <img src="images/Line.png">
                                <li><a href="#">USD<img src="images/currency.png"></a></li>                            
                            </ul>
                        </div>
                        <div class="top-b">
                            <ul>
                                <li><a href="#">Help</a></li>
                                <img src="images/Line.png">
                                <li><a href="#"><img src="images/heart.png">WishList</a></li> 
                                <img src="images/Line.png">
                                <li><a href="#">Engish <img src="images/currency.png"></a></li>
                                <button>DOWNLOAD APP</button>
                             </ul>
                        </div>
                        <div class="mobile-top-menu" id="mobtopmenu">
                            <a href="#home" class="active">LogIn/SingUp</a>
                            <a href="#Shop"><img src="images/heart.png" style="padding: 0;">WishList</a>
                            <a href="#Fashion">Help</a>
                            <a href="#Electronics">Contact us</a>
                            <a href="#Electronics">Download App</a>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction1()"><i><img src="images/currency.png" alt=""></i></a>
                        </div>
                    </div>
                    <div id="header-with-topbar" class="">
                        <div id="logo">
                            <a href="index.html"><img src="images/Vector.png"></a>
                        </div>
                        <div id = "search-in">
                            <form action="#">
                                <input placeholder="Search..." type="text" name="">
                                <div><a href="#">All categories<img src="images/currency2.png"></a></div>
                                <button><img src="images/glass.png" ></a></button>
                            </form>
                        </div>
                        <div id ="basket-container">
                            <div class="bc-b"><a href="#"><img src="images/bg.png"></a><span>0 items: $0.00</span></div>
                        </div>
                        <div class="mobile-basketc">
                            <div class="m-b"><a href="#"><img src="images/bg.png"></a></div>
                        </div>
                    </div>
                    <div class="navigator ">
                        <div class="dep"><div>Departmeents <img src="images/departments.png"></div></div>
                        <ul class="navigator-a">
                            <li><a href="#" class="active">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                            </ul>
                            </li>
                            <li><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Phones</a></li>
                            </ul>
                            </li>
                            <li><a href="#">Fashion
                            <span class="hot">Hot</span>
                            </a>
                                <ul class="sub-menu">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Phones</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Electronics
                            <span class="new">New</span>
                                </a>
                                <ul class="sub-menu">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Phones</a></li>
                                </ul>
                             </li>
                            <li><a href="#">pages</a>
                            <ul class="sub-menu">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Phones</a></li>
                            </ul>
                            </li>
                            <li><a href="#">Features</a>
                            <ul class="sub-menu">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Phones</a></li>
                            </ul>
                            </li>
                            <li><a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Phones</a></li>
                            </ul>
                            </li>
                            <li class="call-us-free">Call us free: <span>1-800-777-7889</span></li>
                         </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-topnav" id="mobtopnav">
                <a href="#home" class="active">Home</a>
                <a href="#Shop">Shop</a>
                <a href="#Fashion">Fashion</a>
                <a href="#Electronics">Electronics</a>
                <a href="#pages">pages</a>
                <a href="#Features">Features</a>
                <a href="#Blog">Blog</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i><img src="images/currency.png" alt=""></i></a>
             </div>
        </div>
    </header>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="categories-menu">
                        <div class="category-menu-list">
                            <ul>
                                <li><a href="#"><img alt="" src="images/fash.png"> Fashion & Clothing <img src="images/chevron-right.png"><i class="zmdi zmdi-chevron-right"></i></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-part-1 category-common mb--30">
                                            <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer &amp; Office</a></li>
                                                <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                <li><a href="#"> Bags &amp; Shoes</a></li>
                                                <li><a href="#"> Phones &amp; Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="category-part-2 category-common mb--30">
                                            <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer &amp; Office</a></li>
                                                <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                <li><a href="#"> Bags &amp; Shoes</a></li>
                                                <li><a href="#"> Phones &amp; Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="category-part-3 category-common">
                                            <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer &amp; Office</a></li>
                                                <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                <li><a href="#"> Bags &amp; Shoes</a></li>
                                                <li><a href="#"> Phones &amp; Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="category-part-4 category-common">
                                            <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer &amp; Office</a></li>
                                                <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                <li><a href="#"> Bags &amp; Shoes</a></li>
                                                <li><a href="#"> Phones &amp; Accessories</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/mobile.png">Mobile Phones <img src="images/chevron-right.png"><i class="zmdi zmdi-chevron-right"></i></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-part-1 category-common2 mb--30">
                                            <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer &amp; Office</a></li>
                                                <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                <li><a href="#"> Bags &amp; Shoes</a></li>
                                                <li><a href="#"> Phones &amp; Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="category-part-2 category-common2 mb--30">
                                            <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer &amp; Office</a></li>
                                                <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                <li><a href="#"> Bags &amp; Shoes</a></li>
                                                <li><a href="#"> Phones &amp; Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="category-part-3 category-common2 mb--30">
                                            <h4 class="categories-subtitle">dress</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer &amp; Office</a></li>
                                                <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                <li><a href="#"> Bags &amp; Shoes</a></li>
                                                <li><a href="#"> Phones &amp; Accessories</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/sport.png"> Sports & Outerwear <img src="images/chevron-right.png"><i class="zmdi zmdi-chevron-right"></i></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-menu-dropdown-top">
                                            <div class="category-part-1 category-common2 mb--30">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common2 mb--30">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-3 category-common2 mb--30">
                                                <h4 class="categories-subtitle">Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/foods.png"> Foods & Fruits <img src="images/chevron-right.png"><i class="zmdi zmdi-chevron-right"></i></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-menu-dropdown-left">
                                            <div class="category-part-1 category-common mb--30">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common mb--30">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-3 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-4 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/beauty.png"> Beauty & Health <img src="images/chevron-right.png"><i class="zmdi zmdi-chevron-right"></i></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-menu-dropdown-left">
                                            <div class="category-part-1 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/shoes.png"> Shoes & Bags <img src="images/chevron-right.png"></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-menu-dropdown-left">
                                            <div class="category-part-1 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/decor.png"> Decors & Home <img src="images/chevron-right.png"></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-menu-dropdown-left">
                                            <div class="category-part-1 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/electronics.png"> Electronics & HiTech <img src="images/chevron-right.png"></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-menu-dropdown-left">
                                            <div class="category-part-1 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/accessories.png"> Accessories <img src="images/chevron-right.png"></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-menu-dropdown-left">
                                            <div class="category-part-1 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/softwar.png"> Digital Software <img src="images/chevron-right.png"></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-menu-dropdown-left">
                                            <div class="category-part-1 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common">
                                                <h4 class="categories-subtitle"> Jewelry &amp; Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Jewelry &amp; Watches</a></li>
                                                    <li><a href="#"> Bags &amp; Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer &amp; Office</a></li>
                                                    <li><a href="#"> Phones &amp; Accessories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                    </div>
                </div>
                <div id="banner-container">
                    <div id="slider">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img style="width: 850px; height: 450px;" src="/MyProject/frontend/images/banner02.png" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Upto 50% offer </h5>
                                        <p> For all men's Collections</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img style="width: 850px; height: 450px;" src="/MyProject/frontend/images/banner01.png" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Upto 50% offer </h5>
                                    <p> For all men's Collections</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img style="width: 850px; height: 450px;" src="/MyProject/frontend/images/banner02.png" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Upto 50% offer </h5>
                                    <p> For all men's Collections</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="rnd-container">
                <div class="rand-product-banner">
                    <div class="rand-product"><a href="#"><img src="images/1.png"></a></div>
                    <div class="txt"><a href=""><h2>Big offer day</h2><span>Extra 25% off</span><div>At $199.00</div></a></div>
                </div>
                <div class="rand-product-banner">
                    <div class="rand-product"><a href="#"><img src="images/1.png"></a></div>
                   <div class="txt"><a href=""><h2>Canon Eos</h2><span>upto 30% flat offer!</span><div>Special offer!</div></a></div>
                </div>
                <div class="rand-product-banner">
                    <div class="rand-product"><a href="#"><img src="images/1.png"></a></div>
                    <div class="txt"><a href="#"><h2>Let Tv 920</h2><span> Oneday sale</span><div>Only $799</div></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="hot-deals">
                <h3>Hot Deals <button class="one">></button><button><</button></h3>
                <div class="imghd"><img src="images/map-marker.png" alt=""></div>
                <div class="deals-txt">
                    <a href="simple_product_list.html">Zexon brand men's watch<br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                </div>
                <div>
                    <ul>
                        <li><h4> 02 </h4><span>Days</span></li>
                        <li><h4> 12 </h4><span>Hrs</span></li>
                        <li><h4> 24 </h4><span>Mins</span></li>
                        <li><h4> 56 </h4><span>Sec</span></li>
                    </ul>
                </div>
            </div>
            <div class="row-block">
                <div class="new-arrivals-menu">
                    <h2>New arrivals</h2>
                    <ul>        
                        <li><a href="#">All</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">Foods</a></li>
                        <li><a href="#">Sports</a></li>
                    </ul>
                    <select class="new-arrivals-menu-two">
                        <option value="">All</option>
                        <option value="">Fashion</option>
                        <option value="">Mobile</option>
                        <option value="">Electronics</option>
                        <option value="">Foods</option>
                        <option value="">Sports</option>
                    </select>
                    <button><</button><button>></button>
                </div>
                <div class="new-arrivals">
                    <div class="new-products">
                        <div class="imghd"><img src="images/map-marker.png" alt=""></div>
                        <div class="product-hover">
                            <ul>
                                <li><img src="images/basket.png" alt=""></li>
                                <li><img src="images/wishlist.png" alt=""></li>
                                <li><img src="images/see-more.png" alt=""></li>
                            </ul>
                        </div>
                        <div class="deals-txt"><a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt=""></div>
                    </div>
                    <div class="new-products">
                        <div class="imghd"><img  src="images/map-marker.png" alt=""></div>
                    <div class="deals-txt"><a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt=""></div>
                    </div>
                    <div class="new-products">
                        <div class="imghd"><img src="images/map-marker.png" alt=""></div>
                    <div class="deals-txt"><a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt=""></div>
                    </div>
                    <div class="new-products">
                        <div class="imghd"><img src="images/map-marker.png" alt=""></div>
                    <div class="deals-txt"><a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="product-list">
                <div class="tab">
                    <div class="product-cat"><h1>Product categories</h1><button><</button><button>></button></div>
                    <ul>
                        <li class="active"><a href="#"><img src="images/electronics-top.png" alt="">Electronics</a></li>
                        <li><a href=""><img src="images/mobile-tab.png" alt="">Mobile</a></li>
                        <li><a href=""><img src="images/fashion-tab.png" alt="">Fashion</a></li>
                        <li><a href=""><img src="images/burses-top.png" alt="">Burses</a></li>
                        <li><a href=""><img src="images/bags-top.png" alt="">Bags</a></li>
                        <li><a href=""><img src="images/watches-top.png" alt="">Watches</a></li>
                        <li><a href=""><img src="images/gifts-top.png" alt="">Gifts</a></li>
                        <li><a href=""><img src="images/kitchen-top.png" alt="">Kitchen</a></li>
                        <li><a href=""><img src="images/foods-top.png" alt="">foods</a></li>
                        <li><a href=""><img src="images/clothings-top.png" alt="">Clothing</a></li>
                    </ul>
                    <div class="mobile-tab">
                        <ul>
                            <li class="active"><a href="#"><img src="images/electronics-top.png" alt="">Electronics</a></li>
                            <li><a href=""><img src="images/mobile-tab.png" alt="">Mobile</a></li>
                            <li><a href=""><img src="images/fashion-tab.png" alt="">Fashion</a></li>
                            <li><a href=""><img src="images/burses-top.png" alt="">Burses</a></li>
                            <li><a href=""><img src="images/bags-top.png" alt="">Bags</a></li>
                        </ul>
                        <ul>
                            <li><a href=""><img src="images/watches-top.png" alt="">Watches</a></li>
                            <li><a href=""><img src="images/gifts-top.png" alt="">Gifts</a></li>
                            <li><a href=""><img src="images/kitchen-top.png" alt="">Kitchen</a></li>
                            <li><a href=""><img src="images/foods-top.png" alt="">foods</a></li>
                            <li><a href=""><img src="images/clothings-top.png" alt="">Clothing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="products">
                    <ul>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Zexon brand men's watch <br><span>$124.00 </span></a><br><img src="images/rating.png" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="features "> 
                    <ul>
                        <li><a href="#"><img src="images/free-shopping.png" alt=""><br>Free shipping</a><span><br>Free Shipping on World wide Order </br>Over $99.</span></li>
                        <li><a href="#"><img src="images/trusted-pay.png" alt=""><br>Trusted pay</a><span><br>100% Payment Protection & </br>Easy Return</span></li>
                        <li><a href="#"><img src="images/secured-pay.png" alt=""><br>Secured payment</a><span><br>All Major Credit & Debit Cards</br> Accepted</span></li>
                        <li><a href="#"><img src="images/shop-on-app.png" alt=""><br>Shop on app</a><span><br>Just Dowload our App & Shop </br>With Best Offers!</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div style="background-color: #408de4; height: 100px;">
            <div class="container">
                <div class="row">
                    <div class="singingup-tn">
                        <div class="su-tn ">
                            <div class="su"><img  src="images/news-letter.png" alt=""></div><div class="news-letter">SIGNUP to NEWSLETTER</div>
                            <div id = "e-mail-address">
                                <form action="#">
                                    <input placeholder="Enter You E-mail Address" type="text" name="e-mail-address">
                                    <button>SUBMIT</button>
                                </form>
                            </div>
                            <div class="follow-us">
                                <h2>Keep in touch</h2>
                                <ul>
                                    <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/insta.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/pinterest.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/vimeo.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="follow-us-mb">
                            <h2>Keep in touch</h2>
                            <ul>
                                <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                                <li><a href="#"><img src="images/insta.png" alt=""></a></li>
                                <li><a href="#"><img src="images/pinterest.png" alt=""></a></li>
                                <li><a href="#"><img src="images/vimeo.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <nav class="">
                    <div class="footer-data">
                        <div class="footer-logo">
                            <img src="images/logo2.png" alt="">
                        <h2>SUPERMART</h2> 
                        </div>
                        <ul>
                            <p>Many say exploration is part of our dest but it’s actually our duty to future and their.</p>
                            <li>E-mail</li>
                            <li>Phone</li>
                            <li>Address</li>
                        </ul>
                    </div>
                    <div class="footer-data">
                        <h4>Company</h4>
                        <ul>      
                        <li><a href="#">Discount Vouches</a></li>
                        <li><a href="#">Spring Collection</a></li>
                        <li><a href="#">Trending</a></li>
                        <li><a href="#">Best Sellers</a></li>
                        <li><a href="#">Special Deals</a></li>
                        </ul>
                    </div>
                    <div class="footer-data">
                        <h4>Policy-info</h4>
                        <ul>        
                        <li><a href="#">Orders & Returns</a></li>
                        <li><a href="#">Advanced Search</a></li>
                        <li><a href="#">Help & FAQs</a></li>
                        <li><a href="#">Consultant</a></li>
                        <li><a href="#">Store Locations</a></li>
                        </ul>
                    </div>
                    <div class="footer-data">
                        <h4>My-account</h4>
                        <ul>        
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Delivery information</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Term & Conditions</a></li>
                        <li><a href="#">Custom Link</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <h4 class=" ">© Copyright - Supermart Template by DesignFalls</h4>
            </div>
    </div>
    </footer>
</body>
</html>