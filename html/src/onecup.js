// Generated by CoffeeScript 2.3.2
(function() {
  // onecup.coffee
  // the most crazy reactive html css framework out there
  var CSS_PROPS, HTML_TAGS, IE, JS_EVENT, check_selectors, css, css_chain, css_def, css_rule_chain, current_rule, current_tag, dom_build, dom_scan, dont_refresh_flag, dont_refresh_this_time, full_refresh, i, inserted, j, js_event, l, len, len1, len2, levels, m, make_css, make_event, make_selectors, make_tag, needs_refresh_flag, o, old_oml, parse_selectors, parse_url, redraw, render, requestAnimationFrame, setup_new_window, tag, tag_add, tag_build, tag_chain, tag_remove, tag_replace, tag_scan, tags, visibilitychange;

  window.onecup = {};

  HTML_TAGS = "a\naudio\nb\nblockquote\nbr\nbutton\ncanvas\ncode\ndiv\nem\nembed\nform\nh1\nh2\nh3\nh4\nh5\nh6\nheader\nhr\ni\niframe\nimg\ninput\nlabel\nli\nobject\nol\noption\np\npre\nscript\nselect\nsmall\nsource\nspan\nstrong\nsub\nsup\ntable\ntbody\ntd\ntextarea\ntfoot\nth\nthead\ntime\ntr\nu\nul\nvideo".split(/\s/);

  CSS_PROPS = "align_items\nanimation\nanimation_direction\nbackground\nbackground_attachment\nbackground_color\nbackground_image\nbackground_size\nbackground_position\nbackground_position_x\nbackground_position_y\nbackground_repeat\nborder\nborder_bottom\nborder_bottom_color\nborder_bottom_style\nborder_bottom_width\nborder_collapse\nborder_color\nborder_image\nborder_left\nborder_left_color\nborder_left_style\nborder_left_width\nborder_radius\nborder_right\nborder_right_color\nborder_right_style\nborder_right_width\nborder_spacing\nborder_style\nborder_top\nborder_top_color\nborder_top_style\nborder_top_width\nborder_width\nbottom\nbox_shadow\nclear\nclip\ncolor\ncursor\ndirection\ndisplay\nfilter\nflex\nflex_direction\nflex_wrap\nfloat\nfont\nfont_family\nfont_size\nfont_size_adjust\nfont_stretch\nfont_style\nfont_variant\nfont_weight\nheight\njustify_content\nleft\nline_break\nline_height\nlist_style\nlist_style_image\nlist_style_position\nlist_style_type\nmargin\nmargin_bottom\nmargin_left\nmargin_right\nmargin_top\nmarker_offset\nmax_height\nmax_width\nmin_height\nmin_width\nopacity\noutline\noverflow\noverflow_x\noverflow_y\npadding\npadding_bottom\npadding_left\npadding_right\npadding_top\npointer_events\nposition\nresize\nright\ntable_layout\ntext_align\ntext_align_last\ntext_decoration\ntext_indent\ntext_justify\ntext_overflow\ntext_shadow\ntext_transform\ntext_autospace\ntext_kashida_space\ntext_underline_position\ntop\ntransform\ntransition\nuser_select\nvalue\nvertical_align\nvisibility\nwhite_space\nwidth\nword_break\nword_spacing\nword_wrap\nz_index\nzoom".split(/\s/);

  JS_EVENT = "onblur\nonchange\noncontextmenu\nonfocus\noninput\nonselect\nonsubmit\nonkeydown\nonkeypress\nonkeyup\nonclick\nondblclick\nondrag\nondragend\nondragenter\nondragleave\nondragover\nondragstart\nondrop\nonmouseenter\nonmousedown\nonmousemove\nonmouseout\nonmouseover\nonmouseup\nonload\nonscroll\nonwheel".split(/\s/);

  IE = navigator.msMaxTouchPoints;

  //IE
  if (Array.isArray == null) {
    Array.isArray = function(obj) {
      return Object.prototype.toString.call(obj) === '[object Array]';
    };
  }

  onecup.new_page = function() {};

  // needed for html rendering
  current_tag = null;

  tag_chain = [];

  css_chain = "";

  css_rule_chain = [];

  current_rule = null;

  levels = [];

  tags = [];

  old_oml = null;

  full_refresh = true;

  dont_refresh_flag = false;

  // ------------------------------- render system -----------------------------
  // render the tags
  render = function() {
    var finished_tags;
    finished_tags = tags;
    tags = [];
    return finished_tags;
  };

  // check if first arg is a selector string like "#id.class.class"
  check_selectors = function(args) {
    var first_arg;
    first_arg = args[0];
    if (typeof first_arg === 'string') {
      if ("#" === first_arg[0] || "." === first_arg[0]) {
        return parse_selectors(args.shift());
      }
    }
    return {};
  };

  // parses selectors like "#id.class.class"
  parse_selectors = function(arg) {
    var attributes, classes, i, j, len, ref;
    attributes = {};
    classes = [];
    ref = arg.split('.');
    for (j = 0, len = ref.length; j < len; j++) {
      i = ref[j];
      if (i.length === 0) {
        continue;
      } else if ("#" === i[0]) {
        if (attributes.id) {
          throw Error(`mulitple ids ${arg}`);
        }
        attributes.id = i.slice(1);
      } else {
        classes.push(i);
      }
    }
    if (classes.length > 0) {
      attributes.class = classes.join(" ");
    }
    return attributes;
  };

  make_selectors = function(attrs) {
    var selector;
    selector = "";
    if (attrs.id) {
      selector += "#" + attrs.id;
    }
    if (attrs.class) {
      selector += "." + attrs.class.split(" ").join(".");
    }
    return selector;
  };

  // css definer {left: 34} -> to "left: 34px;"
  css_def = function(css) {
    var k, lines, v;
    if (typeof css !== 'object') {
      return css;
    }
    lines = [];
    for (k in css) {
      v = css[k];
      if (typeof v === 'number') {
        v = v + "px";
      }
      lines.push(`${k}:${v}`);
    }
    return lines.join(";");
  };

  // create a tag function, pass tag names
  make_tag = function(tag_name) {
    return function(...args) {
      var arg, attributes, css_chain_prev, inner_fn, inner_tags, j, k, len, newv, this_tag, v;
      // see if first arg is "#id.class.class" syntax
      attributes = check_selectors(args);
      // see if the last argument is a function to render rest of the dom
      if (typeof args[args.length - 1] === 'function') {
        inner_fn = args.pop();
      }
// turn the rest of the args into tag attributes
      for (j = 0, len = args.length; j < len; j++) {
        arg = args[j];
        if (typeof arg === 'object') {
          for (k in arg) {
            v = arg[k];
            if (typeof v === 'function') {
              newv = onecup.event_fn(v);
            } else if (typeof v === 'undefined') {
              continue;
            } else if (k === "style") {
              newv = v; // don't do any thing yet
            } else {
              newv = v;
            }
            attributes[k] = newv;
          }
        } else {
          throw Error(`invalid tag argument ${JSON.stringify(arg)} of type ${typeof arg} for <${tag_name}>`);
        }
      }
      this_tag = {
        tag: tag_name,
        attrs: attributes,
        listeners: {},
        children: null
      };
      levels.push(tags);
      tags = inner_tags = [];
      current_tag = this_tag;
      tag_chain.push(current_tag);
      css_chain_prev = css_chain;
      css_chain = css_chain + make_selectors(current_tag.attrs);
      if (typeof inner_fn === "function") {
        inner_fn();
      }
      tags = levels.pop(tags);
      this_tag.children = inner_tags;
      if (this_tag.attrs.style != null) {
        this_tag.attrs.style = css_def(this_tag.attrs.style);
      }
      tag_chain.pop();
      css_chain = css_chain_prev;
      current_tag = tag_chain[tag_chain.length - 1];
      return tags.push(this_tag);
    };
  };

  // css stuff
  make_css = function(css_name) {
    var css_real_name;
    css_real_name = css_name.replace("_", "-").replace("_", "-");
    return function(...args) {
      if (current_rule) {
        current_rule[css_real_name] = args[0];
        return;
      }
      if (current_tag.attrs.style == null) {
        current_tag.attrs.style = {};
      }
      return current_tag.attrs.style[css_real_name] = args[0];
    };
  };

  // handler mapper
  window._handler = {};

  onecup.listeners = [];

  for (i = j = 0; j < 5000; i = ++j) {
    (function(i) {
      return onecup.listeners[i] = function() {
        onecup.track_error(window._handler[i], ...arguments);
        return onecup.refresh();
      };
    })(i);
  }

  onecup.fn_count = 0;

  onecup.event_fn = function(fn) {
    var count;
    window._handler[onecup.fn_count] = fn;
    count = onecup.fn_count;
    onecup.fn_count += 1;
    return count;
  };

  // js events stuff
  make_event = function(js_name) {
    return function(...args) {
      return current_tag.listeners[js_name.slice(2)] = onecup.event_fn(args[0]);
    };
  };

// generate all tags
  for (l = 0, len = HTML_TAGS.length; l < len; l++) {
    tag = HTML_TAGS[l];
    onecup[tag] = make_tag(tag);
  }

  for (m = 0, len1 = CSS_PROPS.length; m < len1; m++) {
    css = CSS_PROPS[m];
    onecup[css] = make_css(css);
  }

  for (o = 0, len2 = JS_EVENT.length; o < len2; o++) {
    js_event = JS_EVENT[o];
    onecup[js_event] = make_event(js_event);
  }

  // special html functions
  // produces normal text
  onecup.text = function(...args) {
    return tags.push({
      special: "text",
      text: args.join("")
    });
  };

  // produces unescaped text
  onecup.raw = function(...args) {
    return tags.push({
      special: "raw",
      text: args.join("")
    });
  };

  // put some nbsps
  onecup.nbsp = function(n = 1) {
    var p, ref, results;
    results = [];
    for (i = p = 0, ref = n; (0 <= ref ? p < ref : p > ref); i = 0 <= ref ? ++p : --p) {
      results.push(onecup.raw("&nbsp;"));
    }
    return results;
  };

  // special image tag
  onecup.raw_img = onecup.img;

  onecup.img = function(...args) {
    var a, kargs, len3, p, src;
    for (p = 0, len3 = args.length; p < len3; p++) {
      a = args[p];
      if (a.src != null) {
        kargs = a;
        break;
      }
    }
    if (!kargs) {
      console.error("Image without source", args);
      return;
    }
    src = kargs.src;
    // if its a local png try replace with retina version
    if (window.devicePixelRatio !== 1 && src.indexOf(".png") !== -1 && src.slice(0, 4) !== "http") {
      kargs.src = src.replace(".png", "@2x.png");
    }
    if (window.devicePixelRatio !== 1 && src.indexOf(".jpg") !== -1 && src.slice(0, 4) !== "http") {
      kargs.src = src.replace(".jpg", "@2x.jpg");
    }
    return onecup.raw_img(...args);
  };

  // create a new rule tag
  inserted = {};

  onecup.css = function(...args) {
    var css_chain_prev, fn, rule_body, rule_css, rule_selector;
    if (args.length === 2) {
      [rule_selector, fn] = args;
    } else {
      rule_selector = "";
      [fn] = args;
    }
    css_chain_prev = css_chain;
    if (rule_selector[0] === ":") {
      css_chain = css_chain + rule_selector;
    } else if (rule_selector[0] === "&") {
      css_chain = css_chain + rule_selector.slice(1);
    } else {
      css_chain = css_chain + " " + rule_selector;
    }
    css_rule_chain.push(current_rule);
    current_rule = {};
    fn();
    rule_body = css_def(current_rule);
    current_rule = null;
    if (rule_body) {
      rule_css = css_chain + " {" + rule_body + "}";
      if (inserted[rule_css] !== true) {
        inserted[rule_css] = true;
        document.styleSheets[0].insertRule(rule_css, 0);
      }
    }
    //console.log "rule_css", rule_css
    css_chain = css_chain_prev;
    return current_rule = css_rule_chain.pop();
  };

  if (document.styleSheets.length === 0) {
    document.head.appendChild(document.createElement("style"));
  }

  onecup.import = function() {
    var all, k;
    all = [];
    for (k in onecup) {
      if (k !== "import") {
        all.push(`${k} = onecup.${k}`);
      }
    }
    return "var " + all.join(", ") + ";";
  };

  onecup.importCoffee = function(scope) {
    var all, k;
    all = (function() {
      var results;
      results = [];
      for (k in onecup) {
        if (k !== "import" && k !== "importCoffee") {
          results.push(k);
        }
      }
      return results;
    })();
    return "{" + all.join(", ") + "} = onecup";
  };

  // redraws the full html or just parts of it
  redraw = function(time) {
    var e, fn, len3, new_oml, p, ref, results;
    // console.log "redraw -----------------"
    // reset fn count to start over
    onecup.fn_count = 0;
    onecup.params = parse_url();
    onecup.post_render_fns = [];
    // make sure document is ready to start drawing
    //if document.readyState != "complete"
    //    console.log "doc not complete", document.getElementById('onecup')
    //    onecup.after(0, onecup.refresh)
    //    return
    if (!onecup.body) {
      try {
        onecup.body = document.getElementById('onecup');
        if (!onecup.body && document.body) {
          document.body.innerHTML += "<div id='onecup'></div>";
          onecup.body = document.getElementById('onecup');
        } else {
          //console.log "no element yet"
          onecup.after(0, onecup.refresh);
          return;
        }
      } catch (error) {
        e = error;
        //console.log "init", e
        onecup.after(0, onecup.refresh);
      }
    }
    if (window.error_body != null) {
      try {
        if (typeof window.body === "function") {
          window.body();
        }
      } catch (error) {
        e = error;
        tags = [];
        if (typeof window.error_body === "function") {
          window.error_body(e);
        }
      }
    } else {
      if (typeof window.body === "function") {
        window.body();
      }
    }
    new_oml = render();
    if (!full_refresh && old_oml) {
      dom_scan(onecup.body, new_oml, old_oml);
    } else {
      // clear whole document
      onecup.body.innerHTML = '';
      // build new nodes
      dom_build(onecup.body, new_oml);
      // dont run full refresh next time
      full_refresh = false;
    }
    old_oml = new_oml;
    ref = onecup.post_render_fns;
    results = [];
    for (p = 0, len3 = ref.length; p < len3; p++) {
      fn = ref[p];
      results.push(fn());
    }
    return results;
  };

  onecup.post_render = function(fn) {
    return onecup.post_render_fns.push(fn);
  };

  // builds the dom
  dom_build = function(parent, oml) {
    var elm, len3, p;
    for (p = 0, len3 = oml.length; p < len3; p++) {
      elm = oml[p];
      tag_build(elm);
      tag_add(parent, elm);
    }
  };

  // ads a tag
  tag_add = function(parent, elm) {
    var dom, len3, p, ref, results;
    // if there is no parent we cant add?
    if (!(parent != null ? parent.appendChild : void 0)) {
      return;
    }
    elm.parentNode = parent;
    if (elm.dom != null) {
      //console.log "tag add", elm.dom
      // single element
      parent.appendChild(elm.dom);
    }
    if (elm.doms != null) {
      ref = elm.doms;
      //console.log "raw add", elm.text
      // multiple elements
      results = [];
      for (p = 0, len3 = ref.length; p < len3; p++) {
        dom = ref[p];
        results.push(parent.appendChild(dom));
      }
      return results;
    }
  };

  // builds a tag
  tag_build = function(elm) {
    var child, dom, k, len3, p, ref, ref1, ref2, v;
    if (elm.special === "raw") {
      // 'raw' text node
      dom = document.createElement("span");
      dom.innerHTML = elm.text;
      elm.doms = [];
      ref = dom.childNodes;
      for (p = 0, len3 = ref.length; p < len3; p++) {
        child = ref[p];
        elm.doms.push(child);
      }
      // dont allow empty raw nodes
      if (elm.doms.length === 0) {
        elm.doms.push(document.createTextNode(""));
      }
    } else if (elm.special === "text") {
      // true text node
      dom = document.createTextNode(elm.text);
      elm.dom = dom;
    } else {
      dom = document.createElement(elm.tag);
      elm.dom = dom;
      ref1 = elm.attrs;
      for (k in ref1) {
        v = ref1[k];
        if (Array.isArray(v)) {
          v = v.join(" ");
        }
        if (k === "selected") {
          if (v === true) {
            dom.setAttribute(k, v);
          }
        } else {
          dom.setAttribute(k, v);
        }
      }
      ref2 = elm.listeners;
      for (k in ref2) {
        v = ref2[k];
        //console.log "add listener", k, v
        dom.addEventListener(k, onecup.listeners[v]);
      }
      if (elm.children) {
        dom_build(dom, elm.children);
      }
    }
  };

  // scan the dom for diffs
  dom_scan = function(parent, as, bs) {
    var elm, p, q, r, ref, ref1, ref2, ref3, ref4, scan_length;
    if ((as == null) && (bs == null)) {
      return;
    } else if (as == null) {
      //console.log "clear children"
      parent.innerHTML = '';
    } else if (bs == null) {
      //console.log "new children", as:as, bs:bs
      dom_build(parent, as);
    } else {
      // if bs has more nodes
      // we need remove some
      if (as.length < bs.length) {
//console.log "tag removed"
        for (i = p = ref = as.length, ref1 = bs.length; (ref <= ref1 ? p < ref1 : p > ref1); i = ref <= ref1 ? ++p : --p) {
          tag_remove(bs[i]);
        }
        scan_length = as.length;
      } else {
        scan_length = bs.length;
      }
// scan down existing nodes
      for (i = q = 0, ref2 = scan_length; (0 <= ref2 ? q < ref2 : q > ref2); i = 0 <= ref2 ? ++q : --q) {
        tag_scan(as[i], bs[i]);
      }
      // if as has more nodes
      // we need to add some
      if (as.length > bs.length) {
//console.log "tag added"
        for (i = r = ref3 = bs.length, ref4 = as.length; (ref3 <= ref4 ? r < ref4 : r > ref4); i = ref3 <= ref4 ? ++r : --r) {
          elm = as[i];
          tag_build(elm);
          tag_add(parent, elm);
        }
      }
    }
  };

  // scan the tags for diffs
  tag_scan = function(a, b) {
    var dom, k, ref, ref1, ref2, ref3, v;
    if (b == null) {
      throw "no tag b";
    } else if ((a.special != null) || (b.special != null)) {
      if (a.special !== b.special || a.text !== b.text) {
        //console.log "special tag change"
        //console.log "tag build", a
        tag_build(a);
        //console.log "tag replace", a, b
        tag_replace(a, b);
      } else {
        if (b.dom != null) {
          a.dom = b.dom;
        } else if (b.doms != null) {
          a.doms = b.doms;
        } else {
          throw "b has no doms";
        }
      }
    } else if (a.tag !== b.tag) {
      //console.log "full tag changed"
      tag_build(a);
      tag_replace(a, b);
    } else if (a.attrs.id !== b.attrs.id) {
      //console.log "full tag changed"
      tag_build(a);
      tag_replace(a, b);
    } else {
      // parcial tag change
      dom = a.dom = b.dom;
      ref = a.attrs;
      for (k in ref) {
        v = ref[k];
        if (v !== b.attrs[k]) {
          //console.log "set attr", k
          if (k === 'value' && document.activeElement !== dom) {
            dom.value = v;
          } else if (k === 'style' && IE) { // ie 11 does not support setAttribute("style",...)
            dom.removeAttribute(k);
            dom.setAttribute(k, v);
          //dom.style = v # old method for IE
          } else if (k === 'src') {
            dom.src = "data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D";
            dom.src = v;
          } else {
            dom.setAttribute(k, v);
          }
        }
      }
      ref1 = b.attrs;
      for (k in ref1) {
        v = ref1[k];
        if (a.attrs[k] == null) {
          //console.log "attrs removed", k
          dom.removeAttribute(k);
        }
      }
      ref2 = a.listeners;
      // listeners scan
      for (k in ref2) {
        v = ref2[k];
        if (b.listeners[k] == null) {
          //console.log "none added?", k, v, b.listeners
          dom.addEventListener(k, onecup.listeners[v]);
        } else if (v !== b.listeners[k]) {
          //console.log "remove?", onecup.listeners[v]
          dom.removeEventListener(k, onecup.listeners[b.listeners[k]]);
          dom.addEventListener(k, onecup.listeners[v]);
        }
      }
      ref3 = b.listeners;
      for (k in ref3) {
        v = ref3[k];
        if (a.listeners[k] == null) {
          //console.log "been removed?", k, v, onecup.listeners[v]
          //console.log "remove?", onecup.listeners[v]
          dom.removeEventListener(k, onecup.listeners[v]);
        }
      }
      //console.log "listeners", a.listeners, b.listeners

      // scan down the children
      dom_scan(dom, a.children, b.children);
    }
  };

  // replace one tag with a changed tag
  tag_replace = function(a, b) {
    var b_dom, dom, len3, p, parent, ref;
    // get the first b
    if (b.dom != null) {
      b_dom = b.dom;
    } else if (b.doms != null) {
      b_dom = b.doms[0];
    } else {
      throw "element b not created";
    }
    parent = b_dom.parentNode;
    if (parent == null) {
      // fix for text area user removing nodes
      parent = b.parentNode;
      tag_add(parent, a);
      return;
    }
    if (a.dom != null) {
      parent.insertBefore(a.dom, b_dom);
      a.parentNode = parent;
    } else if (a.doms != null) {
      ref = a.doms;
      for (p = 0, len3 = ref.length; p < len3; p++) {
        dom = ref[p];
        parent.insertBefore(dom, b_dom);
      }
      a.parentNode = parent;
    } else {
      throw "element a not created yet";
    }
    return tag_remove(b);
  };

  // remove the old tag
  tag_remove = function(b) {
    var dom, len3, p, parent, ref;
    // remove b
    if (b.dom != null) {
      //console.log "remove b dom", b.dom
      parent = b.dom.parentNode;
      // if it has no parent, then its removed?
      if (parent) {
        parent.removeChild(b.dom);
      }
    } else if (b.doms != null) {
      //console.log "remove b doms", b.doms
      parent = b.doms[0].parentNode;
      ref = b.doms;
      for (p = 0, len3 = ref.length; p < len3; p++) {
        dom = ref[p];
        parent.removeChild(dom);
      }
    }
  };

  // ----------------------------- url stuff -------------------------------
  parse_url = function() {
    var params;
    // some bots dont have window.location?
    if (window.location == null) {
      return {};
    }
    params = window.location.search.slice(1);
    return onecup.parse_query_string(params);
  };

  onecup.parse_query_string = function(params) {
    var args, k, len3, p, pair, ref, v;
    args = {};
    ref = params.split("&");
    for (p = 0, len3 = ref.length; p < len3; p++) {
      pair = ref[p];
      if (!pair) {
        continue;
      }
      [k, v] = pair.split("=");
      if (v) {
        args[k] = unescape(decodeURI(v.replace(/\+/g, " ")));
      }
    }
    return args;
  };

  onecup.mk_url = function(base, params) {
    var key, part, parts, url, value;
    url = base;
    parts = (function() {
      var results;
      results = [];
      for (key in params) {
        value = params[key];
        part = "";
        part += key;
        part += "=";
        part += encodeURIComponent(value);
        results.push(part);
      }
      return results;
    })();
    if (parts.length > 0 && url[url.length - 1] !== "?") {
      url += "?";
    }
    return url + parts.join("&");
  };

  onecup.lookup = function(selector) {
    var selectorType;
    selectorType = 'querySelectorAll';
    if (selector.indexOf('#') === 0) {
      selectorType = 'getElementById';
      selector = selector.substr(1, selector.length);
    }
    return document[selectorType](selector);
  };

  setup_new_window = function() {
    onecup.new_page();
    return onecup.refresh();
  };

  onecup.newTab = function(url) {
    if ((typeof electron !== "undefined" && electron !== null) && url.substr(0, 4) === "http") {
      electron.shell.openExternal(url);
      return;
    }
    return window.open(url);
  };

  onecup.goto = window.goto = function(url) {
    var ref;
    if ((typeof electron !== "undefined" && electron !== null) && url.substr(0, 4) === "http") {
      electron.shell.openExternal(url);
      return;
    }
    if (typeof track === "function") {
      track("goto", {
        url: url
      });
    }
    if (url.substr(0, 4) === "http" || url.substr(0, 7) === "mailto:") {
      window.location = url;
      return;
    }
    if (window.self !== window.top) {
      window.open(url);
      return;
    }
    if (((ref = window.history) != null ? ref.pushState : void 0) != null) {
      window.history.pushState("", url, url);
    } else {
      // safari users for who history is not supported
      if (window.location.pathname === "/" && url.slice(0, 2) === "/#") {
        window.location.hash = url.slice(2);
      } else {
        window.location = url;
      }
    }
    return setup_new_window();
  };

  window.onpopstate = function(event) {
    onecup.scroll_top();
    return setup_new_window();
  };

  onecup.scroll_top = function() {
    try {
      return window.scrollTo(0, 0);
    } catch (error) {
      return typeof track === "function" ? track("scroll_error") : void 0;
    }
  };

  // ----------------------------- view stuff ------------------------------
  window.current_view = null;

  window.last_view_params = null;

  window.with_view = function(view_name, params) {
    var ref;
    // call exit/enter on view change
    if (view_name !== window.current_view) {
      if ((ref = window.last_view_params) != null) {
        if (typeof ref.exit === "function") {
          ref.exit();
        }
      }
      if (params != null) {
        if (typeof params.enter === "function") {
          params.enter();
        }
      }
      window.current_view = view_name;
      onecup.refresh();
    }
    return window.last_view_params = params;
  };

  // ---------------------------- event stuff ------------------------------

  // click event is complex
  onecup.on_click = function(event) {
    var href, target;
    if (event.ctrlKey || event.metaKey || event.altKey || event.button === 1) {
      return;
    }
    // do special thing for links with href
    target = event.target;
    href = typeof target.getAttribute === "function" ? target.getAttribute("href") : void 0;
    while (!href) {
      target = target.parentNode;
      if (!target || !target.getAttribute) {
        return;
      }
      href = typeof target.getAttribute === "function" ? target.getAttribute("href") : void 0;
    }
    if (typeof target.onclick === "function") {
      target.onclick();
    }
    if ((typeof electron !== "undefined" && electron !== null) && href.substr(0, 4) === "http") {
      electron.shell.openExternal(href);
      event.preventDefault();
      event.stopPropagation();
      return;
    }
    if (href.substr(0, 4) !== "http" && !target.getAttribute("target")) {
      goto(href);
      onecup.refresh();
      event.preventDefault();
    } else {
      if (target.target == null) {
        if (typeof track === "function") {
          track("exit", {
            url: href
          });
        }
        window.location = href;
      } else {
        if (typeof track === "function") {
          track("new_window", {
            url: href
          });
        }
      }
    }
    event.stopPropagation();
  };

  window.addEventListener("click", onecup.on_click, true);

  // subit event is a no-op, forms are never submitted any more
  onecup.on_submit = function(event) {
    event.preventDefault();
    return event.stopPropagation();
  };

  window.addEventListener("submit", onecup.on_submit, true);

  // ---------------------------- refresh stuff ------------------------------

  // request animation frame fires a new frame only when browser is ready
  requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame || function(callback) {
    return window.setTimeout(callback, 17);
  };

  onecup.after = function(ms, fn) {
    var wrap_fn;
    wrap_fn = function() {
      fn();
      return onecup.refresh();
    };
    return setTimeout(wrap_fn, ms);
  };

  onecup.later = function(ms, fn) {
    var wrap_fn;
    wrap_fn = function() {
      fn();
      return onecup.refresh();
    };
    return setTimeout(wrap_fn, ms);
  };

  // fancy refresh
  needs_refresh_flag = false;

  dont_refresh_this_time = false;

  onecup.refresh = function() {
    var tick;
    if (dont_refresh_this_time) {
      dont_refresh_this_time = false;
      return;
    }
    if (needs_refresh_flag === false) {
      needs_refresh_flag = true;
      tick = function() {
        needs_refresh_flag = false;
        return onecup.track_error(redraw);
      };
      return requestAnimationFrame(tick, 0);
    }
  };

  onecup.no_refresh = function() {
    return dont_refresh_this_time = true;
  };

  onecup.track_error = function(fn, ...args) {
    var e;
    if (typeof track !== "undefined" && track !== null) {
      try {
        return fn(...args);
      } catch (error) {
        e = error;
        track('error', {
          stack: e.stack,
          message: "" + e
        });
        throw e;
      }
    } else {
      return fn(...args);
    }
  };

  window.onresize = function() {
    return onecup.refresh();
  };

  visibilitychange = function() {
    return onecup.refresh();
  };

  document.addEventListener("visibilitychange", visibilitychange, false);

  // refresh everything
  onecup.params = parse_url();

  onecup.after(0, onecup.refresh);

  onecup.preloaded = {};

  onecup.preload = function(src) {
    var image;
    if (window.devicePixelRatio !== 1 && src.indexOf(".png") !== -1 && src.slice(0, 4) !== "http") {
      src = src.replace(".png", "@2x.png");
    }
    if (!onecup.preloaded[src]) {
      image = new Image();
      image.src = src;
      return onecup.preloaded[src] = image;
    }
  };

  onecup.getCache = {};

  onecup.get = function(url) {
    var page, xhr;
    if (!onecup.getCache[url]) {
      page = {
        loaded: false
      };
      xhr = new XMLHttpRequest();
      xhr.addEventListener("load", function(e) {
        page.status = xhr.status;
        page.loaded = e;
        page.json = JSON.parse(xhr.responseText);
        return onecup.refresh();
      });
      xhr.addEventListener("error", function(e) {
        page.error = e;
        return onecup.refresh();
      });
      xhr.addEventListener("abort", function(e) {
        page.abort = e;
        return onecup.refresh();
      });
      xhr.open("GET", url);
      xhr.send();
      page.xhr = xhr;
      onecup.getCache[url] = page;
    }
    return onecup.getCache[url];
  };

}).call(this);
