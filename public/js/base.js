// AJAX settings
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Escape jQuery selectors
function esc_selector(selector) {
    return selector.replace( /(:|\.|\[|\]|,)/g, "\\$1" );
}

jQuery.fn.clearForm = function() {
    // http://stackoverflow.com/questions/6364289/clear-form-fields-with-jquery
    $(this).find('input').not(':button, :submit, :reset, :hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');

    return this;
};

// Output helpful console message
console.log('%cPolr - MUNLink', 'font-size:5em;color:green');
console.log('%c需要帮助？请联系xuan@yiad.am', 'color:blue');
console.log('%cMUNLink是由Adam Yi搭建的模联专用短链接服务，使用修改过的Polr，永久免费', 'color:grey');

// Set up Angular module
var polr = angular.module('polr',[]);
