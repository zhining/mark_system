(function (window, document, $, undefined) {
	

var App = function() {

    var _this = this;

    // 全局设置
    _this.settings = {};
    _this.$button  = null;
    _this.$destObject = null;
    _this.status = true;   // false hide ,true show

    _this.init = function(options) {
        return this.each(function() {
            var $this = $(this);
            var defaults = {
                'text_show' : 'SHOW',
                'text_hide' : 'HIDE',
                'button_class' : '.button_tab',
                'dest_class' : '.tabObject',
                'duration' : 0,
                'start_status' : true  // false hide ,true show
            };
            options = $.extend({}, defaults, options);
            _this.settings = options; 
            
            _this.$button = $this.find(_this.settings.button_class);
            // _this.$button.find('a').text(_this.settings.text_show);
            _this.$destObject = $this.parent().find(_this.settings.dest_class);


            _this.$button.click(function () {
                _this.$destObject.toggle(_this.settings.duration);
                _this.status = !_this.status;
                if (!_this.status) {
                    _this.$button.find('a').text(_this.settings.text_show);    
                } else {
                    _this.$button.find('a').text(_this.settings.text_hide);
                }
            });

            if (!_this.settings.start_status) {
                _this.$destObject.hide();
                _this.status = false;
                _this.$button.find('a').text(_this.settings.text_show);
            };
        });
    };

};

$.fn.tab = function() {
    var method = arguments[0];

    var app = new App;
    if (app[method]) {
        method = app[method];
        arguments = Array.prototype.slice.call(arguments, 1);
    } else if (typeof(method) == 'object' || !method) {
        method = app.init;
    } else {
        $.error('Method ' + method + ' does not exist on jQuery.pluginName');
        return this;
    }

    return method.apply(this, arguments);

}

})(window, document, jQuery);