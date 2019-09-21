<div class="jumbotron">
    <form class="form-horizontal" action="{{route('patients_data_upload')}}" method="post"
          enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-4">Hospital:</label>
            <div class="col-sm-6">
                <select name="hospital" class="form-control">
                    @foreach($hospitals as $hospital)
                        <option value="{{$hospital->id}}">{{$hospital->name}}</option>
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
            <a href="{{str_replace("/index.php","",url("patient_format.xlsx"))}}" download> Download Template </a>
        </div>
    </div>
</div>