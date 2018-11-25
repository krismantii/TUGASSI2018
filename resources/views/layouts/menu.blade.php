
<li class="{{ Request::is('pengaduan*') ? 'active' : '' }}">
    <a href="{!! route('pengaduans.index') !!}"><i class="fa fa-edit"></i><span>Pengaduans</span></a>
</li>

<li class="{{ Request::is('calender') ? 'active' : '' }}">
        <a href="{!! route('calender') !!}"><i class="fa fa-calendar"></i><span>calender</span></a>
    </li>
