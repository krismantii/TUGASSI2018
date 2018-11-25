<!-- Jenis Pengaduan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Jenis_pengaduan', 'Jenis Pengaduan:') !!}
    {!! Form::text('Jenis_pengaduan', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Keterangan', 'Keterangan:') !!}
    {!! Form::text('Keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pengaduans.index') !!}" class="btn btn-default">Cancel</a>
</div>
