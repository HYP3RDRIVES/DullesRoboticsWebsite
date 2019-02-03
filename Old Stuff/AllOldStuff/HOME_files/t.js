/**
 * @license almond 0.3.2 Copyright jQuery Foundation and other contributors.
 * Released under MIT license, http://github.com/requirejs/almond/LICENSE
 */

/*
CryptoJS v3.0.2
code.google.com/p/crypto-js
(c) 2009-2012 by Jeff Mott. All rights reserved.
code.google.com/p/crypto-js/wiki/License
*/

!function() {
    function e() {
        n(["analytics/AnalyticsModule"], function(e) {
            window.AMInsights = e
        })
    }
    var t, n, i;
    !function(e) {
        function r(e, t) {
            return b.call(e, t)
        }
        function a(e, t) {
            var n, i, r, a, o, s, c, u, l, f, p, d, h = t && t.split("/"), g = m.map, y = g && g["*"] || {};
            if (e) {
                for (e = e.split("/"),
                o = e.length - 1,
                m.nodeIdCompat && S.test(e[o]) && (e[o] = e[o].replace(S, "")),
                "." === e[0].charAt(0) && h && (d = h.slice(0, h.length - 1),
                e = d.concat(e)),
                l = 0; l < e.length; l++)
                    if ("." === (p = e[l]))
                        e.splice(l, 1),
                        l -= 1;
                    else if (".." === p) {
                        if (0 === l || 1 === l && ".." === e[2] || ".." === e[l - 1])
                            continue;
                        l > 0 && (e.splice(l - 1, 2),
                        l -= 2)
                    }
                e = e.join("/")
            }
            if ((h || y) && g) {
                for (n = e.split("/"),
                l = n.length; l > 0; l -= 1) {
                    if (i = n.slice(0, l).join("/"),
                    h)
                        for (f = h.length; f > 0; f -= 1)
                            if ((r = g[h.slice(0, f).join("/")]) && (r = r[i])) {
                                a = r,
                                s = l;
                                break
                            }
                    if (a)
                        break;
                    !c && y && y[i] && (c = y[i],
                    u = l)
                }
                !a && c && (a = c,
                s = u),
                a && (n.splice(0, s, a),
                e = n.join("/"))
            }
            return e
        }
        function o(t, n) {
            return function() {
                var i = H.call(arguments, 0);
                return "string" != typeof i[0] && 1 === i.length && i.push(null),
                d.apply(e, i.concat([t, n]))
            }
        }
        function s(e) {
            return function(t) {
                return a(t, e)
            }
        }
        function c(e) {
            return function(t) {
                y[e] = t
            }
        }
        function u(t) {
            if (r(v, t)) {
                var n = v[t];
                delete v[t],
                w[t] = !0,
                p.apply(e, n)
            }
            if (!r(y, t) && !r(w, t))
                throw new Error("No " + t);
            return y[t]
        }
        function l(e) {
            var t, n = e ? e.indexOf("!") : -1;
            return n > -1 && (t = e.substring(0, n),
            e = e.substring(n + 1, e.length)),
            [t, e]
        }
        function f(e) {
            return function() {
                return m && m.config && m.config[e] || {}
            }
        }
        var p, d, h, g, y = {}, v = {}, m = {}, w = {}, b = Object.prototype.hasOwnProperty, H = [].slice, S = /\.js$/;
        h = function(e, t) {
            var n, i = l(e), r = i[0];
            return e = i[1],
            r && (r = a(r, t),
            n = u(r)),
            r ? e = n && n.normalize ? n.normalize(e, s(t)) : a(e, t) : (e = a(e, t),
            i = l(e),
            r = i[0],
            e = i[1],
            r && (n = u(r))),
            {
                f: r ? r + "!" + e : e,
                n: e,
                pr: r,
                p: n
            }
        }
        ,
        g = {
            require: function(e) {
                return o(e)
            },
            exports: function(e) {
                var t = y[e];
                return void 0 !== t ? t : y[e] = {}
            },
            module: function(e) {
                return {
                    id: e,
                    uri: "",
                    exports: y[e],
                    config: f(e)
                }
            }
        },
        p = function(t, n, i, a) {
            var s, l, f, p, d, m, b = [], H = typeof i;
            if (a = a || t,
            "undefined" === H || "function" === H) {
                for (n = !n.length && i.length ? ["require", "exports", "module"] : n,
                d = 0; d < n.length; d += 1)
                    if (p = h(n[d], a),
                    "require" === (l = p.f))
                        b[d] = g.require(t);
                    else if ("exports" === l)
                        b[d] = g.exports(t),
                        m = !0;
                    else if ("module" === l)
                        s = b[d] = g.module(t);
                    else if (r(y, l) || r(v, l) || r(w, l))
                        b[d] = u(l);
                    else {
                        if (!p.p)
                            throw new Error(t + " missing " + l);
                        p.p.load(p.n, o(a, !0), c(l), {}),
                        b[d] = y[l]
                    }
                f = i ? i.apply(y[t], b) : void 0,
                t && (s && s.exports !== e && s.exports !== y[t] ? y[t] = s.exports : f === e && m || (y[t] = f))
            } else
                t && (y[t] = i)
        }
        ,
        t = n = d = function(t, n, i, r, a) {
            if ("string" == typeof t)
                return g[t] ? g[t](n) : u(h(t, n).f);
            if (!t.splice) {
                if (m = t,
                m.deps && d(m.deps, m.callback),
                !n)
                    return;
                n.splice ? (t = n,
                n = i,
                i = null) : t = e
            }
            return n = n || function() {}
            ,
            "function" == typeof i && (i = r,
            r = a),
            r ? p(e, t, n, i) : setTimeout(function() {
                p(e, t, n, i)
            }, 4),
            d
        }
        ,
        d.config = function(e) {
            return d(e)
        }
        ,
        t._defined = y,
        i = function(e, t, n) {
            if ("string" != typeof e)
                throw new Error("See almond README: incorrect module build, no module name");
            t.splice || (n = t,
            t = []),
            r(y, e) || r(v, e) || (v[e] = [e, t, n])
        }
        ,
        i.amd = {
            jQuery: !0
        }
    }(),
    i("almond", function() {});
    var r = r || function(e, t) {
        var n = {}
          , i = n.lib = {}
          , r = i.Base = function() {
            function e() {}
            return {
                extend: function(t) {
                    e.prototype = this;
                    var n = new e;
                    return t && n.mixIn(t),
                    n.$super = this,
                    n
                },
                create: function() {
                    var e = this.extend();
                    return e.init.apply(e, arguments),
                    e
                },
                init: function() {},
                mixIn: function(e) {
                    for (var t in e)
                        e.hasOwnProperty(t) && (this[t] = e[t]);
                    e.hasOwnProperty("toString") && (this.toString = e.toString)
                },
                clone: function() {
                    return this.$super.extend(this)
                }
            }
        }()
          , a = i.WordArray = r.extend({
            init: function(e, t) {
                e = this.words = e || [],
                this.sigBytes = void 0 != t ? t : 4 * e.length
            },
            toString: function(e) {
                return (e || s).stringify(this)
            },
            concat: function(e) {
                var t = this.words
                  , n = e.words
                  , i = this.sigBytes
                  , e = e.sigBytes;
                if (this.clamp(),
                i % 4)
                    for (var r = 0; r < e; r++)
                        t[i + r >>> 2] |= (n[r >>> 2] >>> 24 - r % 4 * 8 & 255) << 24 - (i + r) % 4 * 8;
                else if (65535 < n.length)
                    for (r = 0; r < e; r += 4)
                        t[i + r >>> 2] = n[r >>> 2];
                else
                    t.push.apply(t, n);
                return this.sigBytes += e,
                this
            },
            clamp: function() {
                var t = this.words
                  , n = this.sigBytes;
                t[n >>> 2] &= 4294967295 << 32 - n % 4 * 8,
                t.length = e.ceil(n / 4)
            },
            clone: function() {
                var e = r.clone.call(this);
                return e.words = this.words.slice(0),
                e
            },
            random: function(t) {
                for (var n = [], i = 0; i < t; i += 4)
                    n.push(4294967296 * e.random() | 0);
                return a.create(n, t)
            }
        })
          , o = n.enc = {}
          , s = o.Hex = {
            stringify: function(e) {
                for (var t = e.words, e = e.sigBytes, n = [], i = 0; i < e; i++) {
                    var r = t[i >>> 2] >>> 24 - i % 4 * 8 & 255;
                    n.push((r >>> 4).toString(16)),
                    n.push((15 & r).toString(16))
                }
                return n.join("")
            },
            parse: function(e) {
                for (var t = e.length, n = [], i = 0; i < t; i += 2)
                    n[i >>> 3] |= parseInt(e.substr(i, 2), 16) << 24 - i % 8 * 4;
                return a.create(n, t / 2)
            }
        }
          , c = o.Latin1 = {
            stringify: function(e) {
                for (var t = e.words, e = e.sigBytes, n = [], i = 0; i < e; i++)
                    n.push(String.fromCharCode(t[i >>> 2] >>> 24 - i % 4 * 8 & 255));
                return n.join("")
            },
            parse: function(e) {
                for (var t = e.length, n = [], i = 0; i < t; i++)
                    n[i >>> 2] |= (255 & e.charCodeAt(i)) << 24 - i % 4 * 8;
                return a.create(n, t)
            }
        }
          , u = o.Utf8 = {
            stringify: function(e) {
                try {
                    return decodeURIComponent(escape(c.stringify(e)))
                } catch (e) {
                    throw Error("Malformed UTF-8 data")
                }
            },
            parse: function(e) {
                return c.parse(unescape(encodeURIComponent(e)))
            }
        }
          , l = i.BufferedBlockAlgorithm = r.extend({
            reset: function() {
                this._data = a.create(),
                this._nDataBytes = 0
            },
            _append: function(e) {
                "string" == typeof e && (e = u.parse(e)),
                this._data.concat(e),
                this._nDataBytes += e.sigBytes
            },
            _process: function(t) {
                var n = this._data
                  , i = n.words
                  , r = n.sigBytes
                  , o = this.blockSize
                  , s = r / (4 * o)
                  , s = t ? e.ceil(s) : e.max((0 | s) - this._minBufferSize, 0)
                  , t = s * o
                  , r = e.min(4 * t, r);
                if (t) {
                    for (var c = 0; c < t; c += o)
                        this._doProcessBlock(i, c);
                    c = i.splice(0, t),
                    n.sigBytes -= r
                }
                return a.create(c, r)
            },
            clone: function() {
                var e = r.clone.call(this);
                return e._data = this._data.clone(),
                e
            },
            _minBufferSize: 0
        });
        i.Hasher = l.extend({
            init: function() {
                this.reset()
            },
            reset: function() {
                l.reset.call(this),
                this._doReset()
            },
            update: function(e) {
                return this._append(e),
                this._process(),
                this
            },
            finalize: function(e) {
                return e && this._append(e),
                this._doFinalize(),
                this._hash
            },
            clone: function() {
                var e = l.clone.call(this);
                return e._hash = this._hash.clone(),
                e
            },
            blockSize: 16,
            _createHelper: function(e) {
                return function(t, n) {
                    return e.create(n).finalize(t)
                }
            },
            _createHmacHelper: function(e) {
                return function(t, n) {
                    return f.HMAC.create(e, n).finalize(t)
                }
            }
        });
        var f = n.algo = {};
        return n
    }(Math);
    !function(e) {
        var t = r
          , n = t.lib
          , i = n.WordArray
          , n = n.Hasher
          , a = t.algo
          , o = []
          , s = [];
        !function() {
            function t(e) {
                return 4294967296 * (e - (0 | e)) | 0
            }
            for (var n = 2, i = 0; 64 > i; )
                (function(t) {
                    for (var n = e.sqrt(t), i = 2; i <= n; i++)
                        if (!(t % i))
                            return !1;
                    return !0
                }
                )(n) && (8 > i && (o[i] = t(e.pow(n, .5))),
                s[i] = t(e.pow(n, 1 / 3)),
                i++),
                n++
        }();
        var c = []
          , a = a.SHA256 = n.extend({
            _doReset: function() {
                this._hash = i.create(o.slice(0))
            },
            _doProcessBlock: function(e, t) {
                for (var n = this._hash.words, i = n[0], r = n[1], a = n[2], o = n[3], u = n[4], l = n[5], f = n[6], p = n[7], d = 0; 64 > d; d++) {
                    if (16 > d)
                        c[d] = 0 | e[t + d];
                    else {
                        var h = c[d - 15]
                          , g = c[d - 2];
                        c[d] = ((h << 25 | h >>> 7) ^ (h << 14 | h >>> 18) ^ h >>> 3) + c[d - 7] + ((g << 15 | g >>> 17) ^ (g << 13 | g >>> 19) ^ g >>> 10) + c[d - 16]
                    }
                    h = p + ((u << 26 | u >>> 6) ^ (u << 21 | u >>> 11) ^ (u << 7 | u >>> 25)) + (u & l ^ ~u & f) + s[d] + c[d],
                    g = ((i << 30 | i >>> 2) ^ (i << 19 | i >>> 13) ^ (i << 10 | i >>> 22)) + (i & r ^ i & a ^ r & a),
                    p = f,
                    f = l,
                    l = u,
                    u = o + h | 0,
                    o = a,
                    a = r,
                    r = i,
                    i = h + g | 0
                }
                n[0] = n[0] + i | 0,
                n[1] = n[1] + r | 0,
                n[2] = n[2] + a | 0,
                n[3] = n[3] + o | 0,
                n[4] = n[4] + u | 0,
                n[5] = n[5] + l | 0,
                n[6] = n[6] + f | 0,
                n[7] = n[7] + p | 0
            },
            _doFinalize: function() {
                var e = this._data
                  , t = e.words
                  , n = 8 * this._nDataBytes
                  , i = 8 * e.sigBytes;
                t[i >>> 5] |= 128 << 24 - i % 32,
                t[15 + (i + 64 >>> 9 << 4)] = n,
                e.sigBytes = 4 * t.length,
                this._process()
            }
        });
        t.SHA256 = n._createHelper(a),
        t.HmacSHA256 = n._createHmacHelper(a)
    }(Math),
    function() {
        var e = r
          , t = e.enc.Utf8;
        e.algo.HMAC = e.lib.Base.extend({
            init: function(e, n) {
                e = this._hasher = e.create(),
                "string" == typeof n && (n = t.parse(n));
                var i = e.blockSize
                  , r = 4 * i;
                n.sigBytes > r && (n = e.finalize(n));
                for (var a = this._oKey = n.clone(), o = this._iKey = n.clone(), s = a.words, c = o.words, u = 0; u < i; u++)
                    s[u] ^= 1549556828,
                    c[u] ^= 909522486;
                a.sigBytes = o.sigBytes = r,
                this.reset()
            },
            reset: function() {
                var e = this._hasher;
                e.reset(),
                e.update(this._iKey)
            },
            update: function(e) {
                return this._hasher.update(e),
                this
            },
            finalize: function(e) {
                var t = this._hasher
                  , e = t.finalize(e);
                return t.reset(),
                t.finalize(this._oKey.clone().concat(e))
            }
        })
    }(),
    function() {
        var e = r
          , t = e.lib.WordArray;
        e.enc.Base64 = {
            stringify: function(e) {
                var t = e.words
                  , n = e.sigBytes
                  , i = this._map;
                e.clamp(),
                e = [];
                for (var r = 0; r < n; r += 3)
                    for (var a = (t[r >>> 2] >>> 24 - r % 4 * 8 & 255) << 16 | (t[r + 1 >>> 2] >>> 24 - (r + 1) % 4 * 8 & 255) << 8 | t[r + 2 >>> 2] >>> 24 - (r + 2) % 4 * 8 & 255, o = 0; 4 > o && r + .75 * o < n; o++)
                        e.push(i.charAt(a >>> 6 * (3 - o) & 63));
                if (t = i.charAt(64))
                    for (; e.length % 4; )
                        e.push(t);
                return e.join("")
            },
            parse: function(e) {
                var n = e.length
                  , i = this._map
                  , r = i.charAt(64);
                r && -1 != (r = e.indexOf(r)) && (n = r);
                for (var r = [], a = 0, o = 0; o < n; o++)
                    if (o % 4) {
                        var s = i.indexOf(e.charAt(o - 1)) << o % 4 * 2
                          , c = i.indexOf(e.charAt(o)) >>> 6 - o % 4 * 2;
                        r[a >>> 2] |= (s | c) << 24 - a % 4 * 8,
                        a++
                    }
                return t.create(r, a)
            },
            _map: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="
        }
    }(),
    i("crypto", function() {}),
    i("analytics/EventHub", ["require", "exports", "module", "crypto"], function(e, t, n) {
        "use strict";
        function i(e) {
            for (var t, n = -1, i = (e = e.split("")).length, r = String.fromCharCode; ++n < i; e[n] = (t = e[n].charCodeAt(0)) >= 127 ? r(192 | t >>> 6) + r(128 | 63 & t) : e[n])
                return e.join("")
        }
        function a(e, t, n, a) {
            var o = encodeURIComponent(e)
              , s = Date.now() / 1e3 + 3600
              , c = i(o + "\n" + s)
              , u = r.HmacSHA256(c, n)
              , l = r.enc.Base64.stringify(u);
            return "SharedAccessSignature sr=" + o + "&sig=" + encodeURIComponent(l) + "&se=" + s + "&skn=" + a
        }
        function o(e, t, n) {
            return "https://" + t + ".servicebus.windows.net/" + e + "/publishers/" + n + "/messages"
        }
        function s(e) {
            var t = new XMLHttpRequest
              , n = "https://localize.uat.mywebsitebuilder.com";
            t.open("GET", n, !0),
            t.onreadystatechange = function() {
                if (4 === this.readyState && null !== e)
                    try {
                        var t = JSON.parse(this.response);
                        e(t.z)
                    } catch (t) {
                        e()
                    }
            }
            ,
            t.send(null)
        }
        function c(e) {
            var t = ""
              , n = 60
              , i = ""
              , r = ""
              , c = "";
            i = e.namespace,
            null != e.name && (t = e.name),
            null != e.sasKey && (r = e.sasKey),
            null != e.sasKeyName && (c = e.sasKeyName),
            null != e.timeOut && (n = e.timeOut);
            var u, l = "", f = this;
            this.sendMessage = function(e, p) {
                if (!l)
                    return void (u ? u.push({
                        obj: e,
                        callback: p
                    }) : (u = [{
                        obj: e,
                        callback: p
                    }],
                    s(function(e) {
                        l = e || " ";
                        var t = u;
                        u = null;
                        for (var n = 0; n < t.length; n++)
                            f.sendMessage(t[n].obj, t[n].callback)
                    })));
                e.localize = l;
                var d = o(t, i, e.applicationId)
                  , h = a(d, i, r, c)
                  , g = new XMLHttpRequest;
                g.open("POST", d + "?timeout=" + n, !0),
                g.setRequestHeader("Content-Type", "application/json"),
                g.setRequestHeader("Authorization", h),
                g.setRequestHeader("Access-Control-Allow-Origin", "*"),
                g.onreadystatechange = function() {
                    4 === this.readyState && null !== p && p(this.status, this.response)
                }
                ,
                g.send(JSON.stringify(e))
            }
        }
        e("crypto");
        n.exports = c
    }),
    i("analytics/EventHubService", ["require", "exports", "module", "analytics/EventHub"], function(e, t, n) {
        "use strict";
        function i() {
            var e, t, n = "";
            for (t = 0; t < 32; t++)
                8 !== t && 12 !== t && 16 !== t && 20 !== t || (n += "-"),
                e = Math.floor(16 * Math.random()).toString(16).toUpperCase(),
                n += e;
            return n
        }
        function r(e) {
            for (var t, n, i = document.cookie.split(";"), r = 0; r < i.length; r++)
                if (t = i[r].substr(0, i[r].indexOf("=")),
                n = i[r].substr(i[r].indexOf("=") + 1),
                (t = t.replace(/^\s+|\s+$/g, "")) === e)
                    return window.unescape(n);
            return null
        }
        function a(e, t, n) {
            var i = "";
            if (n) {
                var r = new Date;
                r.setTime(r.getTime() + n),
                i = "; expires=" + r.toGMTString()
            }
            document.cookie = e + "=" + window.escape(t) + i + "; path=/;"
        }
        function o() {
            var e = "none";
            O && "" !== O && (e = O),
            a(x, g + "/" + e, B)
        }
        function s() {
            if (m) {
                var e = (new Date).getTime();
                if (0 !== j && e - j > B) {
                    var t = D.pop();
                    if (window.setTimeout(function() {
                        D = [],
                        g = i(),
                        O = "",
                        o();
                        var e = I || {};
                        e.referrer = "",
                        u(e),
                        t && t.duration && (t.duration = 0),
                        c(t)
                    }, 1),
                    0 === D.length)
                        return void (j = e)
                }
                var n = {
                    applicationId: S,
                    sendDateTime: e,
                    version: "1",
                    applicationUserId: y,
                    applicationUserCreateDateTime: v,
                    sessionId: g
                };
                O && (n.referrer = O),
                C && (n.source = C),
                D && (n.trackEvents = D),
                q && (q[E] = n,
                E++,
                E %= 10),
                m ? (m.sendMessage(n, function(e, t) {
                    z && (console.log("status: " + e + "; response:" + t),
                    console.log(JSON.stringify(n)))
                }),
                j = e) : console.error("eventHub isn't initialized yet!!"),
                o()
            }
        }
        function c(e) {
            D.push(e),
            D.length >= T && (s(),
            D = [])
        }
        function u(e) {
            e = e || {},
            I = JSON.parse(JSON.stringify(e)),
            e.type = 2,
            e.version = "1",
            e.createDateTime = (new Date).getTime(),
            e.userId = y,
            e.sessionId = g,
            c(e)
        }
        function l(e) {
            e = e || {},
            e.type = 0,
            e.version = "1",
            e.createDateTime = (new Date).getTime(),
            c(e)
        }
        function f(e) {
            e = e || {},
            e.type = 1,
            e.version = "1",
            e.createDateTime = (new Date).getTime(),
            c(e)
        }
        function p(e) {
            if (e = e || {},
            e.debug && (z = !0),
            e.insightsId && (S = e.insightsId),
            e.referrer && (O = e.referrer),
            e.eventHubName && (w = e.eventHubName),
            e.eventHubNameSpace && (b = e.eventHubNameSpace),
            e.eventHubSasKey && (H = e.eventHubSasKey),
            (e.bulkInsetCount || 0 === e.bulkInsetCount) && (T = e.bulkInsetCount),
            e.source && (C = e.source),
            e.identity && e.identity.userId && e.identity.sessionId)
                y = e.identity.userId,
                g = e.identity.sessionId,
                v = e.identity.userDateTime;
            else {
                var t = r(A);
                if (t && (t = t.split("/"),
                2 === t.length && (y = t[0],
                v = t[1])),
                !y) {
                    y = i(),
                    v = 0;
                    a(A, y + "/" + v)
                }
                var n = r(x);
                if (n && (n = n.split("/"),
                2 === n.length && (g = n[0],
                O = "none" === n[1] ? "" : n[1])),
                !g) {
                    g = i(),
                    o();
                    var s = (new Date).getTime();
                    a(A, y + "/" + s)
                }
            }
            m = new _({
                name: w,
                sasKey: H,
                sasKeyName: N,
                timeOut: k,
                namespace: b
            })
        }
        function d() {
            return y && g ? {
                userId: y,
                sessionId: g,
                userDateTime: v,
                insightsId: S
            } : {
                insightsId: S
            }
        }
        function h() {}
        var g, y, v, m, w, b, H, S, I, _ = e("analytics/EventHub"), A = "app_key", x = "app_ses_key", B = 18e5, N = "Send", k = 10, T = 0, z = !1, O = "", C = "", D = [], j = 0, q = [], E = 0;
        window.EventHubHistory = q,
        h.prototype.initialize = p,
        h.prototype.PageView = l,
        h.prototype.Event = f,
        h.prototype.Start = u,
        h.prototype.getIdentityObj = d;
        var K = new h;
        n.exports = K
    }),
    i("analytics/AnalyticsService", ["require", "exports", "module", "analytics/EventHubService"], function(e, t, n) {
        "use strict";
        function i() {
            f || (f = {
                insightsId: "",
                referrer: "",
                source: "",
                eventHubName: "in-us-east-event-hub-a1",
                eventHubNameSpace: "in-us-east-event-hubs",
                eventHubSasKey: "GIhCyGMKT+d5d8pnkiS4YhW9ElRWe+MEC0FkCOT2qQY="
            })
        }
        function r() {
            !function(e, t, n, i, r, a, o) {
                e.GoogleAnalyticsObject = "ga",
                e.ga || (e.ga = function() {
                    (e.ga.q = e.ga.q || []).push(arguments)
                }
                ),
                e.ga.l = 1 * new Date,
                a = t.createElement(n),
                o = t.getElementsByTagName(n)[0],
                a.async = 1,
                a.src = "//www.google-analytics.com/analytics.js",
                o.parentNode.insertBefore(a, o)
            }(window, document, "script"),
            window.ga("create", f.googleAnalyticsTracker, {
                cookieDomain: "none"
            }),
            window.ga("require", "displayfeatures")
        }
        function a() {
            f && f.googleAnalyticsTracker && window.ga && window.location.pathname && window.ga("send", "pageview", window.location.pathname)
        }
        function o(e, t) {
            t || (t = "/" + e);
            var n = new Date
              , i = {
                pageName: e,
                pagePath: t,
                duration: 0
            };
            this.lastPageView && t !== this.lastPageView.pagePath && (i.duration = Math.abs(n - this.lastDate),
            i.durationPagePath = this.lastPageView.pagePath),
            this.lastPageView = i,
            this.lastDate = n,
            p && p.PageView(i),
            a()
        }
        function s(e, t, n, i, r, a, o, s) {
            var c = {
                action: a,
                category: r
            };
            e && (c.widgetId = e),
            n && (c.applicationItemName = n),
            t && (c.applicationItemId = t),
            o && (c.label = o),
            s && (c.value = s),
            p && p.Event(c),
            f.googleAnalyticsTracker && window.ga && window.ga("send", "event", r, a, o)
        }
        function c() {
            var e = {
                language: window.navigator.userLanguage || window.navigator.language,
                screenWidth: window.innerWidth,
                screenHeight: window.innerHeight,
                userAgent: navigator.userAgent,
                referrer: f.referrer
            };
            p && p.Start(e)
        }
        function u(e) {
            i(),
            f.insightsId = e.insightsId,
            f.referrer = document.referrer,
            e.eventHubName && (f.eventHubName = e.eventHubName),
            e.eventHubNameSpace && (f.eventHubNameSpace = e.eventHubNameSpace),
            e.eventHubSasKey && (f.eventHubSasKey = e.eventHubSasKey),
            e.source && (f.source = e.source),
            e.googleAnalyticsTracker && "" !== e.googleAnalyticsTracker && (f.googleAnalyticsTracker = e.googleAnalyticsTracker,
            r()),
            p.initialize({
                insightsId: f.insightsId,
                referrer: f.referrer,
                eventHubName: f.eventHubName,
                eventHubNameSpace: f.eventHubNameSpace,
                eventHubSasKey: f.eventHubSasKey,
                source: f.source,
                bulkInsetCount: 0,
                identity: e.identity
            }),
            e.identity && e.identity.sessionId || c()
        }
        function l() {}
        var f, p = e("analytics/EventHubService");
        l.prototype.pageView = o,
        l.prototype.event = s,
        l.prototype.initialize = u,
        l.prototype.getIdentityObj = p.getIdentityObj;
        var d = new l;
        n.exports = d
    }),
    i("analytics/AnalyticsModule", ["require", "exports", "module", "analytics/AnalyticsService"], function(e, t, n) {
        var i = e("analytics/AnalyticsService")
          , r = !1;
        return {
            initByIdentity: function(e) {
                i.initialize({
                    insightsId: e.insightsId,
                    identity: e
                }),
                r = !0
            },
            init: function(e) {
                i.initialize({
                    insightsId: e
                }),
                r = !0
            },
            event: function(e, t, n) {
                r && i.event("", "", "", "", e, t, "", n)
            },
            pageView: i.pageView,
            getIdentityObj: i.getIdentityObj
        }
    }),
    function() {
        window.require || (window.require = {
            config: function(e) {
                window.require = e
            }
        }),
        n.config({
            waitSeconds: 240,
            shim: {
                common: {}
            },
            paths: {
                crypto: "../lib/crypto/crypto",
                almond: "../lib/almond/almond"
            }
        })
    }(),
    i("requireConfig", function() {}),
    n(["requireConfig"], function() {
        e()
    }),
    i("analytics", function() {}),
    n(["analytics"])
}();