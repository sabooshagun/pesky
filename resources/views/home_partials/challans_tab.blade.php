<div class="jumbotron">
    <form class="form-horizontal" action="{{route('challans_data_upload')}}" method="post"
          enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-4">City:</label>
            <div class="col-sm-6">
                <select name="city" class="form-control">
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-6" for="pwd">Select excel file to upload:</label>
            <div class="col-sm-8">
                <input type="file" class="form-control" name="file" id="fileToUpload">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
                <button type="submit" class="btn btn-default" name="submit">Upload</button>
            </div>
        </div>

    </form>
    <div class="row">
        <div class="col-sm-offset-4 col-sm-8">
            <a href="{{str_replace("/index.php","",url("challan_format.xlsx"))}}" download> Download Template </a>
        </div>
    </div>
</div>