<div class="row">
  <div class="col-sm-2">
    {!! form::label('Nama Pesakit ','Nama Pesakit') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('nama_pesakit') ? 'has-error' : "" }}">
      {{ Form::text('nama_pesakit',NULL, ['class'=>'form-control', 'id'=>'nama_pesakit', 'placeholder'=>'Nama Pesakit']) }}
      {{ $errors->first('nama_pesakit', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>


<div class="row">
  <div class="col-sm-2">
    {!! form::label('Nombor ID','Nombor ID') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('nombor_id') ? 'has-error' : "" }}">
      {{ Form::text('nombor_id',NULL, ['class'=>'form-control', 'id'=>'nombor_id', 'placeholder'=>'Nombor ID']) }}
      {{ $errors->first('nombor_id', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'Simpan' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>