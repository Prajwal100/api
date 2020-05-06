$('body').scrollspy({ target: '#scroll-nav' });

/* Prism copy to clipbaord for all pre with copytoclipboard class */
$('pre.copytoclipboard').each(function () {
    $this = $(this);
    $button = $('<button>Copy</button>');
    $this.wrap('<div/>').removeClass('copytoclipboard');
    $wrapper = $this.parent();
    $wrapper.addClass('copytoclipboard-wrapper').css({position: 'relative'})
    $button.css({position: 'absolute', top: 10, right: 10}).appendTo($wrapper).addClass('copytoclipboard btn btn-default');
    /* */
    var copyCode = new Clipboard('button.copytoclipboard', {
        target: function (trigger) {
            return trigger.previousElementSibling;
        }
    });
    copyCode.on('success', function (event) {
        event.clearSelection();
        event.trigger.textContent = 'Copied';
        window.setTimeout(function () {
            event.trigger.textContent = 'Copy';
        }, 2000);
    });
    copyCode.on('error', function (event) {
        event.trigger.textContent = 'Press "Ctrl + C" to copy';
        window.setTimeout(function () {
            event.trigger.textContent = 'Copy';
        }, 2000);
    });
});




$(function(){
	$('.open-mobilenav').click(function(){
		$('body').toggleClass('nav-opened');
	})
	$('#sidenav a').click(function(){
		$('body').removeClass('nav-opened');
	})
})
