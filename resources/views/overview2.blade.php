



@extends('layouts/app')
@section('content')
    <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
    <div id="ttr_page" class="container">
        <div id="ttr_content_and_sidebar_container">
            <div id="ttr_content">
                <div id="ttr_html_content_margin" class="container-fluid">
                    <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                    <div class="ttr_MedicalFocus-overview2_row row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="ttr_MedicalFocus-overview2_col_bg">
                                <div class="html_content animated animatedFadeInUp fadeInUp" style="text-align:center; color: white">
                                    <h1 style="font-size: 3em;" class="pt-5">
                                        Medical Focus </h1>
                                    <br>
                                    <span style="font-style:italic;font-size:2em;">
                                        Providing the world’s medical profession the best clinically researched products</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-5 text-justify">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="html_content fade-inR">
                                <p>At Remedium Bio-Technology our medical focus is unwavering as we pursue a commitment to provide the world's medical profession the best clinically researched products
                                    to market to assist patients with their conditions globally.
                                    <br>This focus determines where many of our research and development programs start. Over the past twenty years we have seen an unprecedented expansion in the study of
                                    human biology, with advances in human genetics, cancer genomics, stem cell biology, bioinformatics and systems biology all paving the way for new therapies.
                                    In the future, advances not only in medicinal chemist1Y but in areas such as protein engineering, antibody drug conjugates and immunotherapies will set us new targets into reach.
                                </p></div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="html_content fade-inL">
                                <p>To ensure this medical expansion continues, Remedium Bio-Technology have established their own in-house IRDT program. This program has the sole purpose of Identifying,
                                    Researching, Developing and Testing new medicines for the treatment of numerous conditions and illnesses that have yet to be identified as benefiting from the new medical
                                    treatments now available.
                                    <br>We are assisted with our IRDT program by many well-respected medical professionals and clinical collars, all of whom bring their own skill sets to the program and help with
                                    exploring some of the technologies and platforms that we are using to discover and develop new and innovative medicines from our medical technology facility.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="html_content">
                                <h2 class="text-center">Immunology</h2>
                                <img class="img-fluid" src="{{asset('FrontEnd')}}/images/mini-banner-mf-211.jpg" alt="Immunology" />
                                <p>Through exhaustive research and clinical trials, Remedium Bio-Technology have become leading experts in discovering treatments for autoimmune diseases.
                                </p>
                                <p class="text-center"><a href="immunology" target="_self" class="btn btn-sm btn-info">Read more</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="html_content">
                                <h2 class="text-center">Oncology</h2>
                                <img class="img-fluid" src="{{asset('FrontEnd')}}/images/mini-banner-mf-31.jpg" alt="Oncology" />
                                <p>At Remedium Bio-Technology we are constantly investing in to new research and development to tackle even the most debilitating and widespread cancers.
                                </p>
                                <p class="text-center"><a href="oncology" target="_self" class="btn btn-sm btn-info">Read More</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="html_content">
                                <h2 class="text-center">Neuroscience</h2>
                                <img class="img-fluid" src="{{asset('FrontEnd')}}/images/mini-banner-mf-41.jpg" alt="Neuroscience" />
                                <p>At Remedium Bio-Technology we areconstantly discovering compounds that have the potential to treat chronic disabling neurological conditions. </p>
                                <p class="text-center"><a href="neuroscience" target="_self" class="btn btn-sm btn-info">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="html_content">
                                <h2 class="text-center">Virology</h2>
                                <img class="img-fluid" src="{{asset('FrontEnd')}}/images/mini-banner-mf-51.jpg" alt="Virology" />
                                <p>With Our clinical research and development program in to the use of Cannabinoids for use in medicine is now established and accepted as being 'cutting-edge'.</p>
                                <p class="text-center"><a href="virology" target="_self" class="btn btn-sm btn-info">Read More</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="html_content">
                                <h2 class="text-center">General Medicine </h2>
                                <img class="img-fluid" src="{{asset('FrontEnd')}}/images/mini-banner-mf-61.jpg" alt="General Medicine" />
                                <p>We're Remedium Bio-Technology have been one of the leading laboratories in establishing medical uses for TCH to the benefit of patients suffering from numerous conditions.</p>
                                <p class="text-center"><a href="general-medicine" target="_self" class="btn btn-sm btn-info">Read More</a></p>
                            </div>
                        </div>
                        <div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear: both;"></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="html_content">
                                <p class="text-center">Accredited by:</p>
                            </div>
                        </div>
                    </div>

                </div><!--content_margin-->
            </div><!--content-->
            <div style="clear:both">
            </div>
        </div><!--container-->
    </div><!--page-->
    <div style="height:0px;width:0px;overflow:hidden;"></div>
@endsection
