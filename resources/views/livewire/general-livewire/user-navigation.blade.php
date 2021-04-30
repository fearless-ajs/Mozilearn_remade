<div>
    <div class="nav-menus-wrapper" style="transition-property: none;">
        <ul class="nav-menu">

            <li class="active"><a href="{{route('homepage')}}">Home<span class="submenu-indicator"></span></a>
            </li>

            <li><a href="#">Courses<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu">
                    <li><a href="#">Courses Grid Sidebar<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="grid-with-sidebar.html">Courses grid 1</a></li>
                            <li><a href="grid-with-sidebar-2.html">Courses grid 1</a></li>
                            <li><a href="grid-with-sidebar-3.html">Courses grid 1</a></li>
                        </ul>
                    </li>
                    <li><a href="list-with-sidebar.html">List Layout with Sidebar</a></li>
                    <li><a href="#">Courses Grid Full Width<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="full-width-course.html">Courses grid 1</a></li>
                            <li><a href="full-width-course-2.html">Courses grid 1</a></li>
                            <li><a href="full-width-course-3.html">Courses grid 1</a></li>
                            <li><a href="full-width-course-4.html">Courses grid 1</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Courses Detail<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="detail.html">Course Detail 1</a></li>
                            <li><a href="detail-2.html">Course Detail 2</a></li>
                            <li><a href="detail-3.html">Course Detail 3</a></li>
                            <li><a href="detail-4.html">Course Detail 4</a></li>
                            <li><a href="detail-5.html">Course Detail 5</a></li>
                        </ul>
                    </li>
                    <li><a href="find-instructor.html">Find Instructor</a></li>
                    <li><a href="instructor-detail.html">Instructor Detail</a></li>
                </ul>
            </li>

            <li><a href="#">Pages<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu">
                    <li class=""><a href="#">User Dashboard<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="dashboard.html">User Dashboard</a></li>
                            <li><a href="my-profile.html">My Profile</a></li>
                            <li><a href="all-courses.html">My Courses</a></li>
                            <li><a href="my-order.html">My Order</a></li>
                            <li><a href="saved-courses.html">Saved Courses</a></li>
                            <li><a href="reviews.html">My Reviews</a></li>
                            <li><a href="settings.html">My Settings</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Shop Pages<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="shop-full-width.html">Shop Full Width</a></li>
                            <li><a href="shop-left-sidebar.html">Shop Sidebar Left</a></li>
                            <li><a href="shop-right-sidebar.html">Shop Sidebar Right</a></li>
                            <li><a href="product-detail.html">Shop Detail</a></li>
                            <li><a href="add-to-cart.html">Add To Cart</a></li>
                            <li><a href="product-wishlist.html">Wishlist</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="shop-order.html">Order</a></li>
                        </ul>
                    </li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="blog.html">Blog Style</a></li>
                    <li><a href="blog-detail.html">Blog Detail</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="component.html">Elements</a></li>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                </ul>
            </li>

            <li><a href="{{route('about')}}">About Mozilearn</a></li>

        </ul>

        <ul class="nav-menu nav-menu-social align-to-right">
            @if(Auth::user())
                <li class="login_click bg-red">
                    <a href="#" wire:click.prevent="logout">Sign out</a>
                </li>
                <li class="login_click">
                    <a  href="https://mozisha.com/account">Mozilearn Account</a>
                </li>
            @else
                <li class="login_click bg-red">
                    <a href="#" data-toggle="modal" data-target="#login">Sign in</a>
                </li>
                <li class="login_click">
                    <a target="_blank" href="https://mozisha.com/account">Join Mozisha</a>
                </li>
            @endif

        </ul>
    </div>
</div>
