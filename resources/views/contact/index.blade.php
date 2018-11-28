@extends('layouts.frontend')

@section('content')
    <div class="grid-1">

        <div class="grid_1">

            &nbsp;

        </div>



        <div class="booking-success">

            <div class="container-success">

                <div class="title-success">

                    <h2>Thank you very much for sending us your inquiry!</h2>

                    <p>We will start working on your request right now &amp; one of our travel consultants will proceed your request and get back to you shortly with best quotation &amp; best offers.</p>

                </div>

                <div class="content-success">



                    <div class="footer-success">

                        <p><strong id="note">Note:</strong> To ensure that you can receive a reply from <strong>{{ get_option('site_email') }}, Please kindly add the "<strong>{{ get_option('site_email') }}" domain to your e-email "safe list". If you do not receive a response in your "inbox" within 24 hours, check your "bulk mail" or "junk mail" folders. Thank you!.</p>

                    </div>

                </div>

            </div>

        </div>



        <div class="grid_1">

            &nbsp;

        </div>

    </div>
@stop