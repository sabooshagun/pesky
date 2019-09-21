@extends('layouts.app')
<style>
    .content {
        display: inline;
    }

    .scroll-area{
        overflow-y: scroll;
        border: 1px solid #2c98d8;
        border-radius: 2%;
        height: 600px;
        padding: 5%;
    }

    #style-1::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        border-radius: 10px;
        background-color: #F5F5F5;
    }

    #style-1::-webkit-scrollbar
    {
        width: 12px;
        background-color: #F5F5F5;
    }

    #style-1::-webkit-scrollbar-thumb
    {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #2c98d8;
    }

</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="container content">
                        <h2>Welcome Admin</h2>
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active margin-10"><a data-toggle="tab" href="#home">Home</a></li>
                            <li class="margin-10"><a data-toggle="tab" href="#menu1">Patients</a></li>
                            <li class="margin-10"><a data-toggle="tab" href="#menu2">Challann</a></li>
                            <li class="margin-10"><a data-toggle="tab" href="#menu3">Foggings</a></li>
                            <li class="margin-10"><a data-toggle="tab" href="#menu4">Areas</a></li>
                            <li class="margin-10"><a data-toggle="tab" href="#menu5">Stats</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <h3>HOME</h3>
                                <div class="panel panel-default">
                                    @include('home_partials/home_tab')
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <h3>Patients Data Entry</h3>
                                @include('home_partials.patients_tab')
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <h3>Challans Data Entry</h3>
                                @include('home_partials.challans_tab')
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <h3>Fogging Data Entry</h3>
                                @include('home_partials.fogging_tab')
                            </div>
                            <div id="menu4" class="tab-pane fade">
                                <h3>Area Check</h3>
                                @include('home_partials.area_tab')
                            </div>
                            <div id="menu5" class="tab-pane fade">
                                <h3>Stats</h3>
                                @include('home_partials.stats_tab')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){

        $('a[data-toggle="tab"]').on('click', function(e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });

        var activeTab = localStorage.getItem('activeTab');

        if(activeTab){

            $('#myTab a[href="' + activeTab + '"]').tab('show');

        }

    });
</script>

@endsection
