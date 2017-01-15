@extends('layouts.base')

@section('content')
<h1>404</h1>
<p>您要访问的页面无法找到。</p>
<div id='footer' class='text-muted tips'>
    {{env('APP_NAME')}}是由Adam Yi搭建的模联专用短链接服务，使用修改过的Polr，永久免费
</div>
@endsection
