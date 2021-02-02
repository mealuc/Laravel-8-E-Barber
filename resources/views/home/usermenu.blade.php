@auth
<div class="aside">
    <h3><strong class="aside-title">Kullanıcı Paneli</strong></h3>
    <ul class="list-links">
        <li><a href="{{route('myprofile')}}">Profilim</a></li>
        <li><a href="{{route('myprofile_appointment_show')}}">Randevularım</a></li>
        <li><a href="{{route('myprofile_message_show')}}">Mesajlarım</a></li>
        @php
            $userRoles = Auth::user()->roles->pluck('name');
        @endphp
        @if($userRoles->contains('admin'))
            <li><a href="{{route('admin')}}" target="_blank">Admin Panel</a></li>
        @endif
        <li><a href="{{route('logout')}}">Çıkış</a></li>
    </ul>
</div>
@endauth
