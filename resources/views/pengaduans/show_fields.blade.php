<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pengaduan->id !!}</p>
</div>

<!-- Jenis Pengaduan Field -->
<div class="form-group">
    {!! Form::label('Jenis_pengaduan', 'Jenis Pengaduan:') !!}
    <p>{!! $pengaduan->Jenis_pengaduan !!}</p>
</div>

<!-- Keterangan Field -->
<div class="form-group">
    {!! Form::label('Keterangan', 'Keterangan:') !!}
    <p>{!! $pengaduan->Keterangan !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pengaduan->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pengaduan->updated_at !!}</p>
</div>

