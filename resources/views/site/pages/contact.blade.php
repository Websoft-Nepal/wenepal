@section('content')
@extends('site.layout.app')
<main class="charity-01-main">

    <!-- ============abt-01 Section  Start============ -->

    <section class="abt-01">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-wrapper">
                        <h3>Contact Us</h3>
                        <ol>
                            <li><a class="text-white" href="{{ route('displayIndex') }}">Home</a><i
                                    class="far fa-angle-double-right"></i></li>
                            <li><a class="text-white" href="{{ route('displayContact') }}">Contact</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="bg-0-b">
         <div class="container">
             <div class="row">
                 <div class="main-card-contact d-flex">
                     <div class="sup-card-contact">
                         <div class="sup-content">
                             <div class="head-content">
                                 <h2>Message</h2>
                                 {!! $contact->message !!}
                             </div>

                             <div class="contact-title">
                                 <h2>Contact Details</h2>
                                 <ol>
                                     <li><i class="far fa-map-marker-check"></i>{{ $contact->address }}</li>
                                     <li><i class="fal fa-mobile"></i>{{ $contact->phone }}</li>
                                     <li><i class="fal fa-envelope"></i>{{ $contact->email }}</li>
                                     <li><i class="fal fa-clock"></i>{{ $contact->openTime }}</li>
                                 </ol>
                             </div>
                         </div>
                     </div>

                     <div class="sup-card-contact-0a">
                         <div class="contact-a1">
                             <form>
                                 <div class="dived d-flex">
                                     <div class="form-group">
                                         <div class="form-sup">
                                             <div class="cal-01">
                                                 <input type="name" name="name" id="" class="form-control"
                                                     placeholder="Enter Your Name">
                                                 <i class="fal fa-user-tie"></i>
                                             </div>

                                             <div class="cal-01">
                                                 <input type="phone" name="phone" id="" class="form-control"
                                                     placeholder="Phone Number">
                                                 <i class="fal fa-phone"></i>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <div class="form-sup">
                                             <div class="cal-01">
                                                 <input type="email" name="email" id="" class="form-control"
                                                     placeholder="Enter Your Email">
                                                 <i class="fal fa-at"></i>
                                             </div>
                                             <div class="cal-01">
                                                 <input type="text" name="subject" id="" class="form-control"
                                                     placeholder="Enter Your Subject">
                                                 <i class="fal fa-envelope-open-text"></i>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="ca-ool">
                                         <textarea name="text" cols="80" rows="6" class="form-control"
                                             placeholder="Message"></textarea>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="mab-01">
          <iframe  style="width:100%;border:0;"
             src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d439.4840781878134!2d83.98091496851232!3d28.211182249094293!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595acf47c0b65%3A0x37d1e590f8a5d50e!2sWebsoft%20Technology%20Nepal%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1711994660635!5m2!1sen!2snp"
             height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </section>
  </main>
@stop
