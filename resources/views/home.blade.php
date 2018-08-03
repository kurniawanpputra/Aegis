@extends('layouts.app')

@section('content')

<style>
    .navbar{
        position: fixed;
        width: 100%;
    }
    .content{
        background-color: white;
        text-align: center;
    }
    #abc{
        border: 5px solid #154360;
        margin-top: 20px;
        height: 95%;
        width: 95%;
    }
    .foo{
        background-color: #898989;
        margin-bottom: 40px;
    }
    a{
        color: black;
        transition: 0.25s;
    }
    a:hover{
        color: #154360;
        transition: 0.25s;
        text-decoration: none;
    }
    a:focus{
        color: black;
        text-decoration: underline;
    }
    #pm{
        margin-top: 25px;
    }
    @media only screen and (max-width: 991.975px){
        #pm{
            margin-top: 0;
            padding-top: 25px;
        }
/*        .foo{
            min-height: 650px;
        }*/
        #sub{
            display: none;
        }
    }
    @media only screen and (max-width: 984px){
        #abc{
            display: none;
        }
    }
    .ct{
        transition: 0.25s;
    }
    .ct:hover{
        transition: 0.25s;
        transform: scale(1.1);
    }
    .date-box{
        background-color: #898989;
        padding: 15px 0 0 0;
        margin-top: 50px;
    }
    input[type=email]{
        border: 1px solid #f5f5f5;
        border-radius: 3px;
        transition: 0.25s;
        padding: 3px;
    }
    input[type=email]:focus{
        border: 1px solid #154360;
        border-radius: 3px;
        transition: 0.25s;
        padding: 3px;
    }
    input[type=submit]{
        background-color: #154360;
        border: 1px solid #154360;
        border-radius: 3px;
        padding: 3px 7.5px;
        transition: 0.25s;
        color: white;
    }
    input[type=submit]:hover{
        background-color: white;
        transition: 0.25s;
        color: #154360;
    }
    input[type=submit]:focus{
        color: white;
    }
    #thr{
        padding-bottom: 20px;
    }
    .addto{
        background-color: #154360;
        border: 1px solid #154360;
        border-radius: 3px;
        padding: 5px 7.5px;
        transition: 0.25s;
        color: white;
    }
    .addto:hover{
        background-color: white;
        transition: 0.25s;
        color: #154360;
    }
    .addto:focus{
        color: white;
    }
</style>

<div class="container">
    <div class="date-box">
        <marquee behavior="scroll" direction="left" scrollamount="7.5">
            <p id="time"></p>
        </marquee>
    </div>
    
    <div class="content">
        <img src="{{asset('resources/assets/bench.jpg')}}" id="abc">
        {{-- FIRST LINE --}}
        <div class="row">
            <hr width="90%" style="border: 1px solid #f5f5f5">
            <h2>NEW PRODUCTS</h2>
            <div class="card col-md-4">
                <img src="{{asset('resources/assets/spy.jpg')}}" alt="Spyderco Model C40GP"
                style="height: 200px; width:auto; padding: 10px;" class="ct">
                <a href="#"><h4><b>Spyderco Model C40GP</b></h4></a>
                <p style="color: red; font-weight: bold;">On Sale: $400</p>
                <button class="addto">Add to Cart</button>
            </div>
            <div class="card col-md-4">
                <img src="{{asset('resources/assets/gerber.jpg')}}" alt="Gerber Fast Draw"
                style="height: 200px; width:auto; padding: 10px;" class="ct">
                <a href="#"><h4><b>Gerber Fast Draw</b></h4></a>
                <p style="color: #154360; font-weight: bold;">$250</p>
                <button class="addto">Add to Cart</button>
            </div>
            <div class="card col-md-4">
                <img src="{{asset('resources/assets/uzi.jpg')}}" alt="UZI Tactical BK-M1"
                style="height: 200px; width:auto; padding: 10px;" class="ct">
                <a href="#"><h4><b>UZI Tactical BK-M1</b></h4></a>
                <p style="color: #154360; font-weight: bold;">$100</p>
                <button class="addto">Add to Cart</button>
            </div>
        </div>
        {{-- SECOND LINE --}}
        <div class="row">
            <hr width="90%" style="border: 1px solid #f5f5f5">
            <h2>HOT ITEMS</h2>
            <div class="card col-md-4">
                <img src="{{asset('resources/assets/bat.jpg')}}" alt="Extendable Baton Stick"
                style="height: 200px; width:auto; padding: 10px;" class="ct">
                <a href="#"><h4><b>Extendable Baton Stick</b></h4></a>
                <p style="color: #154360; font-weight: bold;">$75</p>
                <button class="addto">Add to Cart</button>
            </div>
            <div class="card col-md-4">
                <img src="{{asset('resources/assets/crkt.jpg')}}" alt="CRKT Ripple Aluminium"
                style="height: 200px; width:auto; padding: 10px;" class="ct">
                <a href="#"><h4><b>CRKT Ripple Aluminium</b></h4></a>
                <p style="color: red; font-weight: bold;">On Sale: $350</p>
                <button class="addto">Add to Cart</button>
            </div> 
            <div class="card col-md-4">
                <img src="{{asset('resources/assets/sab.jpg')}}" alt="Sabre Pepper Spray"
                style="height: 200px; width:auto; padding: 10px;" class="ct">
                <a href="#"><h4><b>Sabre Pepper Spray</b></h4></a>
                <p style="color: #154360; font-weight: bold;">$25</p>
                <button class="addto">Add to Cart</button>
            </div>
        </div>
        {{-- THIRD LINE --}}
        <div class="row" id="thr">
            <hr width="90%" style="border: 1px solid #f5f5f5">
            <h2>AEGIS EXCLUSIVES</h2>
            <div class="card col-md-4">
                <img src="{{asset('resources/assets/x26p.jpg')}}" alt="MK-3 Pepper Spray"
                style="height: 200px; width:auto; padding: 10px;" class="ct">
                <a href="#"><h4><b>Taser Model X26P</b></h4></a>
                <p style="color: #154360; font-weight: bold;">$150</p>
                <button class="addto">Add to Cart</button>
            </div>
            <div class="card col-md-4">
                <img src="{{asset('resources/assets/cold.jpg')}}" alt="Cold Steel Knuckle"
                style="height: 200px; width:auto; padding: 10px;" class="ct">
                <a href="#"><h4><b>Cold Steel Knuckle</b></h4></a>
                <p style="color: #154360; font-weight: bold;">$125</p>
                <button class="addto">Add to Cart</button>
            </div>
            <div class="card col-md-4">
                <img src="{{asset('resources/assets/51bk.jpg')}}" alt="Benchmade Model 51BK"
                style="height: 200px; width:auto; padding: 10px;" class="ct">
                <a href="#"><h4><b>Benchmade Model 51BK</b></h4></a>
                <p style="color: red; font-weight: bold;">On Sale: $225</p>
                <button class="addto">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="foo">
        <div class="col-md-3" style="padding-left: 55px;">
            <p style="color: black; font-weight: bold;" id="pm">AEGIS.COM Partners</p>
            <img src="{{asset('resources/assets/b3.png')}}" style="max-height:80px;
            max-width: 100%;">
            <img src="{{asset('resources/assets/metro.png')}}" style="max-height: 80px;
            max-width: 100%; padding: 5px;">
        </div>
        <div class="col-md-3">
            <ul style="list-style: none;">
                <p style="margin-top: 25px; color: black; font-weight: bold;">
                Privacy & Security</p>
                <li><a href="#">Items Return Policy</a></li>
                <li><a href="#">Our Pledge To You</a></li>
                <li><a href="#">Legal Statement</a></li>
                <li><a href="#">Your Security</a></li>
                <li><a href="#">Disclaimer</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul style="list-style: none;">
                <p style="margin-top: 25px; color: black; font-weight: bold;">Item Categories</p>
                <li><a href="#">Portable Tools</a></li>
                <li><a href="#">Tactical Pens</a></li>
                <li><a href="#">Pepper Sprays</a></li>
                <li><a href="#">Electrics</a></li>
                <li><a href="#">Knives</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul style="list-style: none;">
                <p style="margin-top: 25px; color: black; font-weight: bold;">Company Info</p>
                <li><a href="#">Suggestions</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Sitemaps</a></li>
                <li><a href="#">Partners</a></li>
            </ul>
        </div>
        <div id="sub" style="padding-bottom: 20px;">
            <center>
                <form>
                    <p style="color: black; font-weight: bold;">Subscribe For 
                        <span style="color: #154360;">Exclusive Offers!</span></p>
                    <input type="email" name="" placeholder="Input E-Mail...">
                    <input type="submit" name="" value="Submit">
                </form>
            </center>
        </div>
    </div>
</div>
<div class="footer">© 2018 Aegis Inc. Designed by Kurniawan. All rights reserved. 978.645.4132 (Phone Orders)</div>

<script>
    document.getElementById("time").innerHTML = "Welcome To AEGIS.COM, Please Enjoy Your Visit. - " + new Date();
</script>

@endsection