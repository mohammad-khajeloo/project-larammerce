@if(representative_is_enabled())
    <div class="col-md-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="representative_type">نحوه آشنایی با مجموعه</label>
            <select class="form-control number-control" name="representative_type">
                <option value="">هیج کدام</option>
                <option value="مشتریان فعلی مجموعه" id="manual-representative">مشتریان فعلی مجموعه</option>
                @foreach(representative_get_options() as $option)
                    <option value="{{$option}}">{{$option}}</option>
                @endforeach
            </select>
        </div>
    </div>
    @if(representative_is_customer_representative_enabled())
        <div class="col-md-6 col-sm-6 col-xs-12" id="representative-input-container" style="display: none">
            <div class="form-group">
                <label for="family">شماره تماس معرف در صورت تمایل</label>
                <input type="text" class="form-control number-control" name="representative_username"
                       placeholder="شماره تماس معرف"
                       value="{{ old('representative_username') }}">
            </div>
        </div>
    @endif
@endif