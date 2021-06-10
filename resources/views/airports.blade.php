<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The World Airports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div id="airports">
    <h1>The World Airports</h1>
<div class="myform">
    @php
        $scategories = ['country','city','name','code','details'];
        sort($scategories);
    @endphp
    <form>
        <p>Search:
            <input name="keyword" type="text" placeholder="Your Keyword" value="{{$keyword}}">
            By
            <select name="stype" id="stype">
                @foreach($scategories as $scat)
                    @if($scat == $stype)
                        <option selected value="{{$scat}}">{{ucwords($scat)}}</option>
                    @else
                        <option value="{{$scat}}">{{ucwords($scat)}}</option>
                    @endif
                @endforeach
            </select>
            <button class="btn btn-info" type="submit">GO</button>
        </p>
    </form>

    <div class="display_results_info">There are <span>{{$airports->total()}}</span> airport(s) found by that criteria</div>

</div>
    <table id="results" class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Airport Name</th>
            <th>City</th>
            <th>Country</th>
        </tr>

        @foreach($airports as $airport)
            <tr data-details="{{json_encode( unserialize( $airport->details))}}" class="select_airport">
                <td>{{$airport->id}}</td>
                <td>{{$airport->name}}</td>
                <td>{{$airport->city}}</td>
                <td>{{$airport->country}}</td>
            </tr>
        @endforeach

    </table>

    <nav id="mypagination" aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="{{$airports->previousPageUrl()}}" tabindex="-1" aria-disabled="false">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="{{$querystring}}&page=1">1</a></li>
            <li class="page-item"><a class="page-link" href="{{$querystring}}&page=2">2</a></li>
            <li class="page-item"><a class="page-link" href="{{$querystring}}&page=3">3</a></li>
            <li class="page-item">
                <a class="page-link" href="{{$airports->nextPageUrl()}}">Next</a>
            </li>
        </ul>
    </nav>

</div>
@include("modal")
<script>
    $(function () {
        $(".select_airport").click(function () {
            let details = $(this).data('details');
            $(".city").html(details.city);
            $(".country").html(details.country);
            $(".code").html(details.iata);
            $(".location").html(details.location);
            $(".name").html(details.name);
            $(".website").html("<a target='_blank' href='"+details.website+"'>"+details.website+"</a>");
            $(".phone").html("<a href='tel:"+details.phone+"'>"+details.phone+"</a>");
            let latitude = details.latitude;
            let longitude = details.longitude;
            let location = details.location;
            let map_url = "https://maps.google.com/maps?q="+latitude+","+longitude+"&hl=es&z=14&amp&output=embed";
            $("#googlemap").attr('src', map_url);
            $("#mymodal").modal('show');
        });
    })
</script>
<style>
    #mypagination{
        margin-top: 30px;
    }
    #results tr:hover{
        background-color: darkmagenta !important;
        color: #f2ffe8;
        cursor: pointer;
    }
    #results tr:nth-child(even){
        background-color: #cbf7ff;
    }
    #results td:first-child{
        background-color: #ffc8c5;
    }
    #results th{
        background-color: darkred;
        color: gold;

    }
    #results{
        width: 95%;
        margin: auto;
        background-color: lightgoldenrodyellow;
    }
    .display_results_info span{
        padding:0px 5px 0px 5px;
        font-weight: bolder;
        color: darkred;
        font-size: 15px;
        background-color: yellow;
        border-radius: 50%;
        border: 1px solid black;
    }
    .display_results_info{
        margin: 10px;
    }
    #airports{
        text-align: center;
    }
</style>

</body>
</html>
