@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='css/index.css' />
@endsection

@section('content')
<h1 class='title'>{{env('APP_NAME')}}</h1>

<form method='POST' action='/shorten' role='form'>
    <input type='url' autocomplete='off'
        class='form-control long-link-input' placeholder='http://' name='link-url' />

    <div class='row' id='options'>
        <p>自定义短链</p>

        @if (!env('SETTING_PSEUDORANDOM_ENDING'))
        {{-- Show secret toggle only if using counter-based ending --}}
        <div class='btn-group btn-toggle visibility-toggler' data-toggle='buttons'>
            <label class='btn btn-primary btn-sm active'>
                <input type='radio' name='options' value='p' checked /> 公开
            </label>
            <label class='btn btn-sm btn-default'>
                <input type='radio' name='options' value='s' /> 私密
            </label>
        </div>
        @endif

        <div>
            <div class='custom-link-text'>
                <h2 class='site-url-field'>{{env('APP_ADDRESS')}}/</h2>
                <input type='text' autocomplete="off" class='form-control custom-url-field' name='custom-ending' />
            </div>
            <div>
                <a href='#' class='btn btn-success btn-xs check-btn' id='check-link-availability'>检查是否可用</a>
                <div id='link-availability-status'></div>
            </div>
        </div>
    </div>
    <input type='submit' class='btn btn-info' id='shorten' value='生成短链' />
    <a href='#' class='btn btn-warning' id='show-link-options'>自定义</a>
    <input type="hidden" name='_token' value='{{csrf_token()}}' />
</form>

<div id='tips' class='text-muted tips'>
    <i class='fa fa-spinner'></i> 加载小贴士中...
</div>
<div id='footer' class='text-muted tips'>
    {{env('APP_NAME')}}是由Adam Yi搭建的模联专用短链接服务，使用修改过的Polr，永久免费
</div>
@endsection

@section('js')
<script src='js/index.js'></script>
@endsection
