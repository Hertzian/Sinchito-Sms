@extends('layouts.app')

@section('title')
    <h1>Home</h1>
@endsection

@section('content')

@section('title')
<h1>Home Dashboard</h1>    
@endsection

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <div class="card">
                    {{-- ************************************* --}}
                    <div class="content">
                        <div class="content box-body">
                            <h4>Lorem ipsum dolor</h4>
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-success"><i class="fa fa-envelope"></i></span>
                                        <div class="info-box-content box-body">
                                            <h3 class="box-title">Send a single SMS</h3>
                                            <p>
                                                Just want to send a single message? Simple. <br> 
                                                Do it here. <br><br>
                                            </p>
                                            <span class="info-box-text">
                                                <p class="text-right">
                                                    <a href="
                                                    {{-- {{ URL::route('single') }} --}}
                                                    ">Go to single message</a>
                                                </p>
                                            </span> 
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>

                                <div class="col-xl-4 col-md-6 col">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-success"><i class="fa fa-envelope"></i></span>
                                        <div class="info-box-content box-body">
                                            <h3 class="box-title">Schedule a batch sendout</h3>
                                            <p>
                                            Need to plan ahead? Repeat sendouts? Sending to a large group of receivers? <br>
                                            Schedule a batch here.
                                            </p>
                                            <span class="info-box-text"><p class="text-right"><a href="
                                                #
                                                {{-- {{ URL::route('sms') }} --}}
                                                "class="text-left">go to batches</a></span> 
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>

                                <div class="col-xl-4 col-md-6 col">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-success"><i class="fa fa-envelope"></i></span>
                                        <div class="info-box-content box-body">
                                            <h3 class="box-title">Templates</h3>
                                            <p>
                                                Set up your pre-defined message templates. <br>
                                                Personalised messages are allowed. <br><br>
                                            </p>
                                            <span class="info-box-text"><p class="text-right"><a href="
                                            #
                                            {{-- {{ URL::route('tempate') }} --}}
                                            "class="text-left">go to templete</a></span> 
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            </div>
                            <h4>Lorem ipsum dolor</h4>
                            <div class="row ">

                            <div class="col-xl-4 col-md-6 col">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="ion ion-person-stalker"></i></span>
                                    <div class="info-box-content box-body">
                                        <h3 class="box-title">Address Book</h3>
                                        <p>
                                            Upload the list of receivers who you want to send to, <br>
                                            to simplify the recurring sendout.<br><br><br>
                                        </p>
                                        <span class="info-box-text"><p class="text-right"><a href="
                                            #
                                            {{-- {{ URL::route('contacts') }} --}}
                                            "class="text-left">go to address book</a></span> 
                                    </div>
                                    <!-- /.info-box-content --> 
                                </div>
                                <!-- /.info-box -->
                            </div>

                            <div class="col-xl-4 col-md-6 col">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="fa fa-exclamation"></i></span>
                                    <div class="info-box-content box-body">
                                        <h3 class="box-title">FAQ</h3>
                                        <p> 
                                            How do I send Batch SMS?<br>
                                            How do I send a single SMS?<br>
                                            How do I create an Address Book?<br>
                                            How do I upload a list?<br>
                                        </p>
                                        <span class="info-box-text"><p class="text-right"><a href="#"class="text-left">go to FAQ</a></span> 
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>

                            <div class="col-xl-4 col-md-6 col">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success"><i class="fa fa-gears"></i></span>
                                    <div class="info-box-content box-body">
                                        <h3 class="box-title">Need to top up your account?</h3>
                                        <p> 
                                            Manage your account and top up your balance in the Sinch portal. <br><br><br>
                                        </p>
                                        <span class="info-box-text"><p class="text-right"><a href="#"class="text-left">Go to payment</a></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
