<div class="phoneTopBar">
    <span class="iPhoneHeader">
        <img src="/img/iPhoneX.png" style="filter: invert(1);" alt="">
    </span>
    <span class="backButton withLogo">
        <a class="logo" href="">
            <img src="/img/Logo1.png" width="98" height="54">
        </a>
        <a class="link" link="/pages/method.php">
            <img src="/img/BackBlue.png" alt="" alt="">
        </a>
    </span>
</div>

<div class="categoryWhiteBg">
    <!-- start of category section -->
    <section class="splide categoryContainer">
        <div class="splide__track categoryInner">
            <ul class="splide__list">
                <li class="splide__slide">
                    <a class="categoryBox">Category</a>
                </li>

                <li class="splide__slide">
                    <a class="categoryBox blueBg">Category</a>
                </li>

                <li class="splide__slide">
                    <a class="categoryBox">Category</a>
                </li>

                <li class="splide__slide">
                    <a class="categoryBox">Category</a>
                </li>

                <li class="splide__slide">
                    <a class="categoryBox">Category</a>
                </li>

                <li class="splide__slide">
                    <a class="categoryBox">Category</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- end of category section -->
    <div class="itemContainer">
        <h3>Items With Images</h3>
        <div class="item">
            <div class="withImageCont">
                <div class="image"></div>
                <div class="content">
                    <span>
                        <h3>Product name</h3>
                        <p>Lorem ipsum dolor sit amet, etetur adipiscing elit, sed</p>
                    </span>
                    <span>
                        <p>£0.00</p>
                        <a class="addItem">Add +</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="withImageCont">
                <div class="image"></div>
                <div class="content">
                    <span>
                        <h3>Product name</h3>
                        <p>Lorem ipsum dolor sit amet, etetur adipiscing elit, sed</p>
                    </span>
                    <span>
                        <p>£0.00</p>
                        <a class="addItem">Add +</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="withImageCont">
                <div class="image"></div>
                <div class="content">
                    <span>
                        <h3>Product name</h3>
                        <p>Lorem ipsum dolor sit amet, etetur adipiscing elit, sed</p>
                    </span>
                    <span>
                        <p>£0.00</p>
                        <a class="addItem">Add +</a>
                    </span>
                </div>
            </div>
        </div>

        <h3>Items Without Images</h3>

        <div class="item">
            <div class="withImageCont">
                <div class="content">
                    <span>
                        <h3>Product name</h3>
                        <p>Lorem ipsum dolor sit amet, etetur adipiscing elit, sed</p>
                    </span>
                    <span>
                        <p>£0.00</p>
                        <a class="addItem">Add +</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="withImageCont">
                <div class="content">
                    <span>
                        <h3>Product name</h3>
                        <p>Lorem ipsum dolor sit amet, etetur adipiscing elit, sed</p>
                    </span>
                    <span>
                        <p>£0.00</p>
                        <a class="addItem">Add +</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="withImageCont">
                <div class="content">
                    <span>
                        <h3>Product name</h3>
                        <p>Lorem ipsum dolor sit amet, etetur adipiscing elit, sed</p>
                    </span>
                    <span>
                        <p>£0.00</p>
                        <a class="addItem">Add +</a>
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    var splide = new Splide( '.splide', {
    type     : 'loop',
    perPage: 6,
    focus  : 0,
    omitEnd: true,
    autoWidth: false,
  } );
  
  splide.mount();
</script>