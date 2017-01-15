@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='/css/about.css' />
<link rel='stylesheet' href='/css/effects.css' />
@endsection

@section('content')
<div class='well logo-well'>
    <img class='logo-img' src='/img/logo.png' />
</div>

<div class='about-contents'>
    @if ($role == "admin")
    <dl>
        <p>Build Information</p>
        <dt>Version: {{env('POLR_VERSION')}}</dt>
        <dt>Release date: {{env('POLR_RELDATE')}}</dt>
        <dt>App Install: {{env('APP_NAME')}} on {{env('APP_ADDRESS')}} on {{env('POLR_GENERATED_AT')}}<dt>
    </dl>
    <p>You are seeing the information above because you are logged in as an administrator.</p>
    @endif

    <p>{{env('APP_NAME')}}是由Adam Yi搭建的模联专用短链接服务，永久免费。其使用经修改的Polr 2，一款开源的短链接生成平台。如您在使用过程中遇到任何问题，请联系xuan@yiad.am。
        <br />Polr is licensed under the GNU GPL License. Visit <a href="https://github.com/adamyi/MUNLink">GitHub</a> page.
    </p>
</div>
<a href='#' class='btn btn-success license-btn'>GNU GPL License</a>
<pre class="license" id="gpl-license">
Copyright (C) 2013-2016 Chaoyi Zha
Modified by Adam Yi

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
</pre>

@endsection

@section('js')
<script src='/js/about.js'></script>
@endsection
