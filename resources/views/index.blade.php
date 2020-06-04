@extends('layouts.app')
@section('content')



    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            </div>
            <div class="carousel-item">
            </div>
            <div class="carousel-item">
            </div>
            <div class="carousel-item">
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



    <div id="ttr_page" class="container pt-5">
        <div id="ttr_html_content_margin" class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="html_content">
                        <h1 style="text-align: center">
                            Hello Welcome to Remedium Bio-Technology</h1>
                        <p style="text-align: center; font-size: 1.2em">Developing Clinically Proven Cures Through Clinically Proven Research</p>
                        <p> Remedium Bio-Technology is a bio-technology company who through clinical research develop clinically proven cures and remedies utilizing marijuana as the core ingredient to our established research programs.</p>
                        <p>As our name implies, 'Remedium', being Latin for 'remedy' or 'cure' aptly describes our company's ethos as we always have, and always will,
                            put the needs of the patient first in developing remedies and cures for some of the worst illnesses and diseases known to mankind, many which have to date unmet needs.</p>
                        <p>As a companywe will always research for cures and remedies to the toughest ofhealth challenges, and it is this research that allows for us to treat more than just medical conditions,
                            it also has a remarkable benefit and impact to the lives ofpeople and patients worldwide.</p>
                        <p>Targeting specific and dificult-to-cure diseases by utilizing our expertise and advance science technology goes beyond treating the illness alone.
                            It also results in having positive impacts on the lives of patients' worldwide, on societies and on advancements in clinical research.
                        </p>
                        <p>We believe that there is not another company that brings all of our research sectors into one highly synergistic whole. Remedium Bio-Technology's foundation was built on testing,
                            analyzing and developing medical marijuana treatments. This research has also spread to the testing of recreational marijuana to ensure compliance with public safety standards</p>
                        <p>As a result of this, we now also provide expert consulting sewices to legislators and regulators in many countries, states and municipalities around the world.</p>
                        <p>In 2012, Remedium Bio-Technology opened one of the first commercial marijuana labs in Canada and has been on the cutting edge since its inception. We are currently
                            expanding throughout Canada, the United States and worldwide with the goal of helping the rest of the world adopt best practices in medical marijuana research and testing.</p>
                        <p>The research, development and clinical trials that we undertake at Remedium Bio-Technology are not only well-documented but have firmly established us as being one of the industry's
                            pioneers who are at the forefront of the medical marijuana revolution.</p>
                        <p>This is the reason for our success and it's why we're able to create value for both our patients, partners and our shareholders alike.</p>
                        <p>If you would like to become part of our success story too, please feel free to visit our Investor Relations page.</p>
                    </div>
                </div>
            </div>

            <div class="row index_bg_row">
                <div class=" col-lg-4 col-md-6 col-sm-6 col-xs-12 border_column">
                    <img class="img-fluid mt-3" src="{{asset('FrontEnd')}}/images/pic-about119251.jpg" alt="Our Philosophy" />
                    <h4> Our Philosophy </h4>
                    <p >To deliver innovative medicines and advance patient care.
                        </br> With a shared vision philosophy, we align our capabilities to conduct ground-breaking clinical proven, innovative medicines to societies around the globe. </p>
                    <p class="text-right"><a href="our-philosophy.html" target="_self" class="btn btn-sm btn-info">Learn More</a></p>

                </div>

                <div class=" col-lg-4 col-md-6 col-sm-6 col-xs-12 border_column">
                    <img class="img-fluid mt-3"  src="{{asset('FrontEnd')}}/images/pic-about29251.jpg" alt="Our Research" />
                    <h4>Our Research</h4>
                    <p>With our research we do far more than just treat diseases.</br>
                        We're committed to new thinking and approaches that will make for a greater impact to the medical profession and allow for greater client care and symptop relief. </p>
                    <p class="text-right"><a href="our-research.html" target="_self" class="btn btn-sm btn-info">Learn More</a></p>
                </div>

                <div class=" col-lg-4 col-md-6 col-sm-6 col-xs-12 border_column">
                    <img class="img-fluid mt-3" src="{{asset('FrontEnd')}}/images/pic-about39251.jpg" alt="Our Commitment" />
                    <h4>Our Commitment</h4>
                    <p>We are committed to pursue all aspect of clinical research and development.</br>
                        Our ongoing commitment to deliver results is at the core of everything we do and will ensure a better future for those dependent upon our research.</p>
                    <p class="text-right"><a href="our-commitment.html" target="_self" class="btn btn-sm btn-info">Learn More</a></p>

                </div>
            </div>

            <div class="row">
                <div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-center pt-4">Accredited by:</p>
                </div>
            </div>
        </div><!--content_margin-->
    </div><!--page-->
@endsection
