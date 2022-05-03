<div>
    <ul class="service-list-1">
        <li class="{{ Request::is('services/laptop-repair') ? 'active' : '' }}"><a href="{{route('services.laptop-repair')}}">Laptop Repair</a></li>
        <li class="{{ Request::is('services/pc-repair') ? 'active' : '' }}"><a href="{{route('services.pc-repair')}}">PC Repair</a></li>
        <li class="{{ Request::is('services/mac-repair') ? 'active' : '' }}"><a href="{{route('services.mac-repair')}}">Mac Repair</a></li>
        <li class="{{ Request::is('services/data-backup') ? 'active' : '' }}"><a href="{{route('services.data-backup')}}">Data Backup and Recovery</a></li>
        <li class="{{ Request::is('services/software-installation') ? 'active' : '' }}"><a href="{{route('services.software-installation')}}">Software Installation</a></li>
        <li class="{{ Request::is('services/hardware-updates') ? 'active' : '' }}"><a href="{{route('services.hardware-updates')}}">Hardware Updates</a></li>
    </ul>
</div>