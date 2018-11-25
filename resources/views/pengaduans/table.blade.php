<table class="table table-responsive" id="pengaduans-table">
    <thead>
        <tr>
            <th>Jenis Pengaduan</th>
        <th>Keterangan</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pengaduans as $pengaduan)
        <tr>
            <td>{!! $pengaduan->Jenis_pengaduan !!}</td>
            <td>{!! $pengaduan->Keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['pengaduans.destroy', $pengaduan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pengaduans.show', [$pengaduan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pengaduans.edit', [$pengaduan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>