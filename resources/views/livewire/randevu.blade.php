<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="form-group">
        <div class="row">
            <div class="col-md-2"><label style="color: whitesmoke"> Randevu Tarihi : </label></div>
            <div class="col-md-3"><input type="date" class="form-control" id="date" name="date"></div>
        </div>
    </div>


    <div class="form-group">
        <div class="row">
            <div class="col-md-2"><label style="color: whitesmoke">Randevu Saati : </label></div>
            <div class="col-md-2">
                <select id="time" name="time">
                    <option value="--">SAAT SEÇİNİZ</option>
                    <option value="08:00">08:00</option>
                    <option value="08:15">08:15</option>
                    <option value="08:30">08:30</option>
                    <option value="08:45">08:45</option>
                    <option value="09:00">09:00</option>
                    <option value="09:15">09:15</option>
                    <option value="09:30">09:30</option>
                    <option value="09:45">09:45</option>
                    <option value="10:00">10:00</option>
                    <option value="10:15">10:15</option>
                    <option value="10:30">10:30</option>
                    <option value="10:45">10:45</option>
                    <option value="11:00">11:00</option>
                    <option value="11:15">11:15</option>
                    <option value="11:30">11:30</option>
                    <option value="11:45">11:45</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:15</option>
                    <option value="13:30">13:30</option>
                    <option value="13:45">13:45</option>
                    <option value="14:00">14:00</option>
                    <option value="14:15">14:15</option>
                    <option value="14:30">14:30</option>
                    <option value="14:45">14:45</option>
                    <option value="15:00">15:00</option>
                    <option value="15:15">15:15</option>
                    <option value="15:30">15:30</option>
                    <option value="15:45">15:45</option>
                    <option value="16:00">16:00</option>
                    <option value="16:15">16:15</option>
                    <option value="16:30">16:30</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-2"><label style="color: whitesmoke">Doktor : </label></div>
            <div class="col-md-3">
                <select id="doctor" name="doctor">
                    <option value="--">DOKTOR SEÇİNİZ</option>
                    @foreach($datalist as $rs)
                        @if($rs->role->pluck('name')->contains('doctor'))
                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
