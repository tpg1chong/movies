"function" != typeof Object.create && (Object.create = function(e) {
        function t() {}
        return t.prototype = e, new t
    }),
    function(e, t, i, n) {
        var o = {
            init: function(i, n) {
                var o = this;
                return o.$elem = e(n), o.$slider = o.$elem.find(".slide-items"), o.$item = o.$slider.find(".slide-item"), o.options = e.extend({}, e.fn.slider.options, i), o.length = o.$item.length, o.movex = 0, o.working = !1, o.point = "next", 1 == o.length ? (o.$elem.find("[data-action=prev], [data-action=next]").hide(0), !1) : (2 == o.length && (o.$slider.append(o.$item.eq(1).clone(), o.$item.eq(0).clone()), o.length = o.$slider.find(".slide-item").length), o.resize(), e(t).resize(function(e) {
                    o.resize()
                }), o.index = o.options.index || 0, o.$item.first().before(o.$item.last()), o.refresh(), o.$elem.delegate("[data-action=prev], [data-action=next]", "click", function() {
                    clearTimeout(o.is_laoding), o.is_laoding = !1, o.point = e(this).data("action"), o.buildFrag(), o.display()
                }), void(navigator.msMaxTouchPoints || (o.$slider.on("touchstart", function(t) {
                    return o.working ? !1 : (e("#touchStart").text("start" + t.originalEvent.touches[0].pageX), void o.touchStart(t))
                }), o.$slider.on("touchmove", function(t) {
                    return o.working ? !1 : (e("#touchMove").text("move" + t.originalEvent.touches[0].pageX), void o.touchMove(t))
                }), o.$slider.on("touchend", function(t) {
                    return o.working ? !1 : (e("#touchEnd").text("end:"), void o.touchEnd(t))
                }))))
            },
            resize: function() {
                var e = this;
                e.width = e.options.width || e.$elem.outerWidth(), e.$slider.css("left", -1 * e.width)
            },
            refresh: function(e, t) {
                var i = this,
                    t = t || "next";
                i.first_is_clone = !1, i.is_laoding = setTimeout(function() {
                    return i.working ? !1 : (i.buildFrag(t), void i.display())
                }, e || i.options.refresh)
            },
            buildFrag: function() {
                var e = this;
                "prev" == e.point ? (e.index--, e.index < 0 && (e.index = e.length - 1), e.$slider.find(".slide-item").first().before(e.$slider.find(".slide-item").last().clone()), e.$slider.css("left", 2 * e.width * -1)) : "next" == e.point && (e.index++, e.index >= e.length && (e.index = 0), e.$slider.find(".slide-item").last().after(e.$slider.find(".slide-item").first().clone()), e.$slider.css("left", -1 * e.width))
            },
            display: function(t) {
                var i = this;
                t || (t = {}), i.working = !0;


                var n = i.width + i.movex;
                i.$slider.find('.active').removeClass('active');

                
                "next" == i.point && (n = i.width - i.movex), i.$slider.stop(!0, !0).animate({
                    fake: n
                }, {
                    duration: t.duration || i.options.duration,
                    easing: t.easing || i.options.easing,
                    queue: !1,
                    step: function(t, o) {
                        var r = t;
                        "next" == i.point && (r = -1 * t), r -= i.movex, e(this).css("transform", "translateX(" + r + "px)"), t == n && (o.now = 0)
                    },
                    complete: function() {

                    	i.$slider.find('.slide-item').eq(2).addClass('active').siblings().removeClass('active');
                        i.$slider.css({
                            left: -1 * i.width,
                            transform: ""
                        }), "prev" == i.point ? (i.$slider.find(".slide-item").last().remove(), i.point = "next") : "next" == i.point && i.$slider.find(".slide-item").first().remove(), i.movex = 0, setTimeout(function() {
                            i.working = !1
                        }, 1), i.options.refresh && i.refresh()
                    }
                })
            },
            touchStart: function(e) {
                var t = this;
                clearTimeout(t.is_laoding), t.is_laoding = !1, t.touchstartx = e.originalEvent.touches[0].pageX
            },
            touchMove: function(e) {
                var t = this;
                t.touchmovex = e.originalEvent.touches[0].pageX, t.movex = t.touchstartx - t.touchmovex;
                var i = 20 * t.width / 100,
                    n = -1 * i;
                t.movex > i ? t.movex = i : t.movex < n && (t.movex = n);
                var o = -1 * t.movex;
                return 0 == t.movex ? !1 : void t.$slider.css("transform", "translateX(" + o + "px)")
            },
            touchEnd: function(e) {
                var t = this;
                return 0 == t.movex ? !1 : (clearTimeout(t.is_laoding), t.is_laoding = !1, t.point = t.movex > 0 ? "next" : "prev", t.buildFrag(), void t.display({
                    easing: "swing"
                }))
            }
        };
        e.fn.slider = function(t) {
            return this.each(function() {
                var i = Object.create(o);
                i.init(t, this), e.data(this, "slider", i)
            })
        }, e.fn.slider.options = {
            effect: "fade",
            speed: 500,
            duration: 750,
            easing: "easeInOutQuint",
            auto: !0,
            refresh: 5e3,
            random: !0,
            min_height: 180,
            index: 0
        }
    }(jQuery, window, document);