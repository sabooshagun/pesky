<div class="panel-heading">Admin Dashboard</div>
<div class="panel-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    You are logged in!

    <div class="container" style="margin-top: 50px">
        <h2>Settings</h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Attribute</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            @foreach($constants as $constant)
                <tr onclick="edit({{$constant->id.",\"".$constant->name."\",\"".$constant->value."\""}})">
                    <td>{{$constant->name}}</td>
                    <td>{{$constant->value}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="editConstant" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form class="form-horizontal" action="{{route('edit_constant')}}" method="post">

                <div class="modal-header">
                    <h4 class="modal-title">Edit Attribute</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label id="constant_name" for="usr">Name:</label>
                        <input id="constant_value" type="text" name="value" class="form-control">
                        <input id="constant_id" type="hidden" name="constant_id" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" >Submit</button>
                    {{--<button type="submit" class="btn btn-default" data-dismiss="modal">Submit</button>--}}
                </div>
                </form>
            </div>

        </div>
    </div>


</div>
<script>
    function edit(id, name, value) {
        $("#editConstant").modal();
        $("#constant_name").html(name);
        $("#constant_value").val(value);
        $("#constant_id").val(id);
    }

</script>
