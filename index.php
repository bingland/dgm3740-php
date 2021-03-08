<?php $ptitle='Cabot Cruises - Index'; include '_header.php'; ?>
    <div class="wrapper1200">
        <div class="my_slider">
            <div class="sliderImg">
                <picture>
                    <source srcset="images/content/slider/slider1-small.jpg"
                    media="(max-width: 450px)">
                    <source srcset="images/content/slider/slider1.jpg"
                    media="(min-width: 450px)">
                    <img src="images/content/slider/slider1.jpg" alt="slider picture 1">
                </picture>
            </div>
            <div class="sliderImg">
                <picture>
                    <source srcset="images/content/slider/slider2-small.jpg"
                    media="(max-width: 450px)">
                    <source srcset="images/content/slider/slider2.jpg"
                    media="(min-width: 450px)">
                    <img src="images/content/slider/slider2.jpg" alt="slider picture 2">
                </picture>
            </div>
            <div class="sliderImg">
                <picture>
                    <source srcset="images/content/slider/slider3-small.jpg"
                    media="(max-width: 450px)">
                    <source srcset="images/content/slider/slider3.jpg"
                    media="(min-width: 450px)">
                    <img src="images/content/slider/slider3.jpg" alt="slider picture 3">
                </picture>
            </div>
            <div class="sliderImg">
                <picture>
                    <source srcset="images/content/slider/slider4-small.jpg"
                    media="(max-width: 450px)">
                    <source srcset="images/content/slider/slider4.jpg"
                    media="(min-width: 450px)">
                    <img src="images/content/slider/slider4.jpg" alt="slider picture 4">
                </picture>
            </div>
        </div>
    
        <main class="articleArea">
            <h2>Recent Blog Articles</h2>

            <div class="articles">
                <a class="articleBackground" href="#">
                    <div class="article">
                        <div class="desc">Article title goes here and may also wrap two lines.</div>
                        <div class="dateBox">
                            <p class="date">May 1, 2021</p>
                        </div>
                    </div>
                </a>
                <a class="articleBackground" href="#">
                    <div class="article">
                        <div class="desc">Article title goes here and may also wrap two lines.</div>
                        <div class="dateBox">
                            <p class="date">May 3, 2021</p>
                        </div>
                    </div>
                </a>
                <a class="articleBackground" href="#">
                    <div class="article">
                        <div class="desc">Article title goes here and may also wrap two lines.</div>
                        <div class="dateBox">
                            <p class="date">May 5, 2021</p>
                        </div>
                    </div>
                </a>
                <a class="articleBackground" href="#">
                    <div class="article">
                        <div class="desc">Article title goes here and may also wrap two lines.</div>
                        <div class="dateBox">
                            <p class="date">May 9, 2021</p>
                        </div>
                    </div>
                </a>
            </div>
            
        </main>
    </div>
<?php include '_footer.php'; ?>