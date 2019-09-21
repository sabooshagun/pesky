<div class="container">

    <table class="table table-hover">
        <thead>
        <tr>
            <th>City Name</th>
            <th>Dengue Case Count</th>
            <th>Challan Count</th>
            <th>In-App Report Count</th>
        </tr>
        </thead>
        @foreach($cities_risk as $city)
            <tbody>
            <tr>
                <td>{{$city->name}}</td>
                <td>{{$city->patient_danger_count}}</td>
                <td>{{$city->challan_count}}</td>
                <td>{{$city->user_specific_count}}</td>
                <td>
                    <a type="button" class="btn btn-info" href="{{route('risk',$city->id)}}">Alert Users</a>
                </td>

            </tr>
            </tbody>
        @endforeach
    </table>
</div>
