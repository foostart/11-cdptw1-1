<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-631">
            <header>
                <div class="header-top">
                    <div class="navi-logo">
                        <a href="#">Delicious</a>
                    </div>
                    <div class="navi-menus">
                        <ul>
                           
                            <li>
                                <a href="#">Detail</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Service</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>
                             <li>
                                <a href="#"><span style="color:#cb7152;">Home</span></a>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Blog</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Product</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Shop</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Contact</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="navi-cart">
                        <div class="shop-cart">
                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                            <span>0</span>
                            <div class="list-cart">
                                <span>No product.</span>
                            </div>
                        </div>
                        <div class="search">
                            <i class="fa fa-search icon-search"></i>
                            <form class="search-panel" method="post">
                                <input type="search" class="menu-search-text" placeholder="Please input search...">
                            </form>
                        </div>
                        
                    </div>
                </div>
                <div class="header-banner">
                    <div class="banner-text">
                        <h2>Home</h2>
                        <hr>
                        <p >This is menu for free dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssd</p>
                    </div>
                </div>
            </header>
        </div>
