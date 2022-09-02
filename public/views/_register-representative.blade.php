@if(representative_is_enabled())
    <div class="col-md-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="representative_type">نحوه آشنایی با مجموعه</label>
            <select class="form-control number-control" name="representative_type">
                <option value="">هیج کدام</option>
                @foreach(representative_get_options() as $option)
                    <option value="{{$option}}">{{$option}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="family">شماره تماس معرف در صورت تمایل</label>
            <input type="text" class="form-control number-control" name="representative_username"
                   placeholder="شماره تماس معرف"
                   value="{{ old('representative_username') }}">
        </div>
    </div>
@endif