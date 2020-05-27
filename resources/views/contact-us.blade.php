@extends('layouts.app')
@section('content')
    <div id="ttr_page" class="container">
        <div id="ttr_content_and_sidebar_container">
            <div id="ttr_content">
                <div id="ttr_html_content_margin" class="container-fluid">
                    <div class="ttr_general-medicine_row row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ttr_general-medicine_col_bg html_content pt-5 text-center" >
                                    <h1 style="font-size: 3em; color: white" >
                                        Contact Us </h1>
                                    <br>
                                    <p style="font-style:italic;font-size:2em; color: white">
                                        Feel free to do so</p>
                                </div>
                        </div>
                    </div>


                    <div class="row pt-5 text-justify">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="html_content">
                                <p>We welcome your interaction with us
                                    <br>If you would like to send us a question, please use the form below
                                    <br>If you have any inquiry relating to Investor Relations, please
                                    <a href="investor-relation" class="tt_link" target="_self">click here</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="html_content">
                                <p>If you have a general quention or comment you would like to make to Remedium Bio-Technology, please
                                    <a href="index" class="tt_link" target="_self">click here.</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="html_content">
                                    <form id="ContactForm7"  role="form" method="post" action="/contact-us" >
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Name</label>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" class="form-control" data-vali="novalidation" name="name" />

                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                            </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label required">Email</label>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" class="form-control required" data-vali="email" name="email" />

                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror


                                            </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Address</label>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" class="form-control" data-vali="novalidation" name="address" />

                                            </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label"> <span style="white-space: nowrap">Telephone Number</span></label>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" class="form-control required" data-vali="numeric" name="telephone_number" />

                                                @error('telephone_number')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                            </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-4 col-md-4 col-sm-4 col-xs-12 control-label">Message</label>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <textarea class="form-control comment" name="message" rows="4"></textarea>

                                            </div></div>
                                        <div class="form-group">
                                            <div class="col-sm-8 col-sm-offset-4">
                                                <input type="submit" class="pull-left btn btn-md btn-info" id="submitform" name="submit" value="Send Message" />
                                            </div></div>


                                        @if(session('success'))

                                        <div class="success">{{session('success')}}</div>
                                        @endif

                                        <div class="success"></div>
                                        <div class="req_field"></div>
                                    </form>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="html_content">
                                <h2>Contact Information</h2>
                                <p>Address: Remedium Bio-Technology, Pinnacle Business Park, Alberta, Canada, T5A0A7</p>
                                <p>Phone: +1-587-487-5722</p>
                                <p>Email: infor@remediumpharmacy.com</p>
                            </div>
                        </div>
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

        </div><!--container-->
    </div><!--page-->
@endsection()
