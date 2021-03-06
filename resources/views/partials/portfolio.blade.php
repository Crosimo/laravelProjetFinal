<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>{{$portfolio[0]->description}}</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{$portfolio[0]->photo1}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{$portfolio[0]->photo1}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{$portfolio[0]->photo2}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{$portfolio[0]->photo2}}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{$portfolio[0]->photo3}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{$portfolio[0]->photo3}}" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{$portfolio[0]->photo4}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{$portfolio[0]->photo4}}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{$portfolio[0]->photo5}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{$portfolio[0]->photo5}}" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{$portfolio[0]->photo6}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{$portfolio[0]->photo6}}" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{$portfolio[0]->photo7}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{$portfolio[0]->photo7}}" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{$portfolio[0]->photo8}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{$portfolio[0]->photo8}}" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{$portfolio[0]->photo9}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{$portfolio[0]->photo9}}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->
