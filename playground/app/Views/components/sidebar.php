<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href=".">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'basket') ? "" : "collapsed" ?>" href="basket">
                <i class="bi bi-cart-check"></i>
                <span>Basket</span>
            </a>
        </li><!-- End Keranjang Nav -->
        <?php
        if (session()->get('role') == 'admin') {
        ?>
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'product') ? "" : "collapsed" ?>" href="product">
                    <i class="bi bi-receipt"></i>
                    <span>Product</span>
                </a>
            </li><!-- End Produk Nav -->
        <?php
        }
        ?>
    </ul>

</aside><!-- End Sidebar-->