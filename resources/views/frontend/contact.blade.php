@extends('layouts.app')
@section('contact')
 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
 <!-- Contact Section Begin -->
 <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        <div class="contact__address">
                            <h5>Contact info</h5>
                            <ul>
                                <li>
                                    <h6><i class="fa fa-map-marker"></i> Address</h6>
                                    <p>Kwiatkowskiego 45, Rzeszów</p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-phone"></i> Phone</h6>
                                    <p><span>+48 532-711-852</span><span>+48 675-668-338</span></p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-headphones"></i> Support</h6>
                                    <p>clothdiva@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                        <div class="contact__form">
                            <h5>SEND MESSAGE</h5>
                           <!-- Success message -->
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif

              
                            <form method="get" action="{{ route('ContactUsForm') }}">

                                @csrf

                           
                                    <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" placeholder="Your name">

                                    <!-- Error -->
                                    @if ($errors->has('name'))
                                    <div class="error">
                                        {{ $errors->first('name') }}
                                    </div>
                                    @endif
                            

                              
                                    <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email"  placeholder="Your email">

                                    @if ($errors->has('email'))
                                    <div class="error">
                                        {{ $errors->first('email') }}
                                    </div>
                                    @endif
                            
                               
                                    <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                                    id="subject" placeholder="Subject">

                                    @if ($errors->has('subject'))
                                    <div class="error">
                                        {{ $errors->first('subject') }}
                                    </div>
                                    @endif
                    

                                    <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                                        rows="3" placeholder="Your message..."></textarea>

                                    @if ($errors->has('message'))
                                    <div class="error">
                                        {{ $errors->first('message') }}
                                    </div>
                                    @endif
                             
                                <button type="submit"  name="send" class="site-btn" style="background-color: black; !important;">Send Message</button>
                                <!--<input type="submit" name="send" value="Submit" class="site-btn" style="background-color: black; !important;">-->
                            </form>
                        
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8618.847552293277!2d21.997132495066328!3d50.04136192970375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473cfae3cc14d449%3A0xd2240d31b33eb2ed!2zUnplc3rDs3c!5e0!3m2!1spl!2spl!4v1621618918749!5m2!1spl!2spl"
                        height="780" style="border:0" allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

@endsection