<style>
    #myInput {
        background-image: url('/css/searchicon.png'); /* Add a search icon to input */
        background-position: 10px 12px; /* Position the search icon */
        background-repeat: no-repeat; /* Do not repeat the icon image */
        width: 100%; /* Full-width */
        font-size: 16px; /* Increase font-size */
        padding: 12px 20px 12px 40px; /* Add some padding */
        border: 1px solid #ddd; /* Add a grey border */
        margin-bottom: 12px; /* Add some space below the input */
    }

    #myUL {
        /* Remove default list styling */
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    #myUL li a {
        border: 1px solid #ddd; /* Add a border to all links */
        margin-top: -1px; /* Prevent double borders */
        background-color: #f6f6f6; /* Grey background color */
        padding: 12px; /* Add some padding */
        text-decoration: none; /* Remove default text underline */
        font-size: 18px; /* Increase the font-size */
        color: black; /* Add a black text color */
        display: block; /* Make it into a block element to fill the whole list */
    }

    #myUL li a:hover:not(.header) {
        background-color: #eee; /* Add a hover effect to all links, except for headers */
    }
</style>

<div class="panel-body">

    <div class="row">
        <label for="sel1">Select City:</label>
        <select class="form-control" id="sel1" onchange="change(event)">
            <option value="0"> Select here </option>
            @foreach($cities as $city)
                <option value="{{$city->id}}"> {{$city->name}}</option>
            @endforeach
        </select>
    </div>


    @if (Session::has('areas'))
        <div class="row margin-10">
            <input class="col-md-12" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
        </div>
        <div class="row margin-10">
            <ul id="myUL" style="margin-left: 50px;" class="col-md-12">
                @foreach(Session::get('areas') as $area)
                    <li><a href="#">{{$area->name}}</a></li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
<script>
    function change(e) {
//          alert(""+id+"|"+e.target.checked+"|"+ ((e.target.checked==true)?1:0));
        var form = document.createElement("form");
        document.body.appendChild(form);
        form.method = "POST";
        form.action = "{{route('fetch_areas')}}";

        var element1 = document.createElement("INPUT");
        element1.name = "city_id";
        element1.value = e.target.value;
        element1.type = 'hidden';
        form.appendChild(element1);

        var element2 = document.createElement("INPUT");
        element2.name = "token";
        element2.value = "{{csrf_token()}}";
        element2.type = 'hidden';
        form.appendChild(element2);

        if(e.target.value !== 0)
        form.submit();

    }

    function myFunction() {
        // Declare variables
        var input, filter, ul, li, a, i;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName('li');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }


</script>