<!-- ======= About Section ======= -->
<section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>{{$about[0]->description}}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>{{$about[0]->qualification}}</h3>
                        <p class="font-italic">
                            {{$about[0]->description2}}
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$about[0]->birthday}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{$about[0]->siteweb}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$about[0]->phone}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$about[0]->city}}</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$about[0]->age}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$about[0]->degree}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{$about[0]->email}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{$about[0]->status}}</li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            {{$about[0]->description3}}
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
