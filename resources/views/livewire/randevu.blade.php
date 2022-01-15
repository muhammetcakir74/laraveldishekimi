<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="form-group">
        <div class="row">
            <div class="col-md-2"><label style="color: whitesmoke"> Randevu Tarihi : </label></div>
            <div class="col-md-3"><input type="date" class="form-control" wire:model="date" id="date" name="date"></div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-2"><label style="color: whitesmoke">Doktor : </label></div>
            <div class="col-md-3">
                <select wire:model="doctor" id="doctor" name="doctor">
                    <option value="--">DOKTOR SEÇİNİZ</option>
                    @foreach($users as $rs)
                        @if($rs->role->pluck('name')->contains('doctor'))
                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-2"><label style="color: whitesmoke">Randevu Saati : </label></div>
            <div class="col-md-2">
                <select id="time" name="time">
                    @if(!empty($query2))
                        <option value="--">Saat Seçiniz</option>
                        @foreach($datalist as $rs)
                            <option value="{{$rs->time}}">{{$rs->time}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </div>





</div>
