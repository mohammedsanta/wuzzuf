@extends('header.header')

@section('content')

    <section class="applications">

        @include('header.applicationsHeader')

        <div class="applications-container">

            <div class="applications-have-not">

                <img class="applications-container-have-not-img" src="/pic/archive.svg" alt="">
                
                <h3 class="applications-container-have-not-h3">You have no archived applications</h3>
                
                <p class="applications-container-have-not-p">You can archive old and inactive applications to organize your application activity</p>

            </div>


        </div>        


    </section>

@endsection