@extends('welcome')

@section('content')
    <!-- Navigation -->
    <div class="welcome">

        <div class="container">
            <img style="float: left;" src="img\logo-background.png" alt="Smart 4G+ Sim" width="125px"
                 height="80px"></a>

        </div>

        <!-- Intro Header -->
        <div class="masthead">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h1 class="brand-heading">#me<i style="font-size: 100px" class="material-icons">forum</i>
                            </h1>
                            <p class="intro-text"><i>"find me find you connect together"</i>


                                <!-- Link to the post page-->
                                <!--inline style is used -->
                            <form action="/login" method="POST" class="form">
                                {{ csrf_field() }}
                                <input style=" width:400px; height: 65px; font-size: 25px; text-align: center; font-family: 'Courgette', cursive; border-radius:15px"
                                       type="text" name="login-tel" id="sign_up"
                                       placeholder="Enter your phone number ">
                                <br/><br/>
                                <input type="submit"
                                       style="width: 250px; margin: 10px; color: #fff;background-color: green;text-align: center; height: 75px; border-radius: 25px; margin-top: 10px; font-family: 'Baloo Paaji', cursive; font-size: 22px; font-weight: 700"
                                       value="Chat now :D">
                            </form>
                            <br/>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
