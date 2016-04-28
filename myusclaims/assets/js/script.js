$(document).ready(function() {

  $(".menu").click(function () {
    $('nav').slideToggle(500);
    $(".glide").click(function () {
      $('nav').hide();
    });
  });

  $(window).load(function(){
    $('.flexslider').flexslider({
      animation: "slide",
      slideshowSpeed: 12000,
    });
  });

  $(document).scroll(function() {
    var scroll = $(this).scrollTop();
    if (scroll >= 20) {
      $("header").addClass("shadow");
    } else {
      $("header").removeClass("shadow");
    }
  });

  // Scroll Control
  $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
          || location.hostname == this.hostname) {

          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
             if (target.length) {
               $('html,body').animate({
                   scrollTop: target.offset().top
              }, 1000);
              return false;
          }
      }
  });


  // Contact Form
  (function(a,h,y){var w="function",v="password",j="maxLength",n="type",b="",c=true,u="placeholder",i=false,t="watermark",g=t,f="watermarkClass",q="watermarkFocus",l="watermarkSubmit",o="watermarkMaxLength",e="watermarkPassword",d="watermarkText",k=/\r/g,s="input:data("+g+"),textarea:data("+g+")",m="input:text,input[type=email],input:password,input[type=search],input:not([type]),textarea",p=["Page_ClientValidate"],r=i,x=u in document.createElement("input");a.watermark=a.watermark||{version:"3.1.3",runOnce:c,options:{className:t,useNative:c,hideBeforeUnload:c},hide:function(b){a(b).filter(s).each(function(){a.watermark._hide(a(this))})},_hide:function(a,r){var p=a[0],q=(p.value||b).replace(k,b),l=a.data(d)||b,m=a.data(o)||0,i=a.data(f);if(l.length&&q==l){p.value=b;if(a.data(e))if((a.attr(n)||b)==="text"){var g=a.data(e)||[],c=a.parent()||[];if(g.length&&c.length){c[0].removeChild(a[0]);c[0].appendChild(g[0]);a=g}}if(m){a.attr(j,m);a.removeData(o)}if(r){a.attr("autocomplete","off");h.setTimeout(function(){a.select()},1)}}i&&a.removeClass(i)},show:function(b){a(b).filter(s).each(function(){a.watermark._show(a(this))})},_show:function(g){var p=g[0],u=(p.value||b).replace(k,b),h=g.data(d)||b,s=g.attr(n)||b,t=g.data(f);if((u.length==0||u==h)&&!g.data(q)){r=c;if(g.data(e))if(s===v){var m=g.data(e)||[],l=g.parent()||[];if(m.length&&l.length){l[0].removeChild(g[0]);l[0].appendChild(m[0]);g=m;g.attr(j,h.length);p=g[0]}}if(s==="text"||s==="search"){var i=g.attr(j)||0;if(i>0&&h.length>i){g.data(o,i);g.attr(j,h.length)}}t&&g.addClass(t);p.value=h}else a.watermark._hide(g)},hideAll:function(){if(r){a.watermark.hide(m);r=i}},showAll:function(){a.watermark.show(m)}};a.fn.watermark=a.fn.watermark||function(p,o){var t="string";if(!this.length)return this;var s=i,r=typeof p===t;if(r)p=p.replace(k,b);if(typeof o==="object"){s=typeof o.className===t;o=a.extend({},a.watermark.options,o)}else if(typeof o===t){s=c;o=a.extend({},a.watermark.options,{className:o})}else o=a.watermark.options;if(typeof o.useNative!==w)o.useNative=o.useNative?function(){return c}:function(){return i};return this.each(function(){var B="dragleave",A="dragenter",z=this,i=a(z);if(!i.is(m))return;if(i.data(g)){if(r||s){a.watermark._hide(i);r&&i.data(d,p);s&&i.data(f,o.className)}}else{if(x&&o.useNative.call(z,i)&&(i.attr("tagName")||b)!=="TEXTAREA"){r&&i.attr(u,p);return}i.data(d,r?p:b);i.data(f,o.className);i.data(g,1);if((i.attr(n)||b)===v){var C=i.wrap("<span>").parent(),t=a(C.html().replace(/type=["']?password["']?/i,'type="text"'));t.data(d,i.data(d));t.data(f,i.data(f));t.data(g,1);t.attr(j,p.length);t.focus(function(){a.watermark._hide(t,c)}).bind(A,function(){a.watermark._hide(t)}).bind("dragend",function(){h.setTimeout(function(){t.blur()},1)});i.blur(function(){a.watermark._show(i)}).bind(B,function(){a.watermark._show(i)});t.data(e,i);i.data(e,t)}else i.focus(function(){i.data(q,1);a.watermark._hide(i,c)}).blur(function(){i.data(q,0);a.watermark._show(i)}).bind(A,function(){a.watermark._hide(i)}).bind(B,function(){a.watermark._show(i)}).bind("dragend",function(){h.setTimeout(function(){a.watermark._show(i)},1)}).bind("drop",function(e){var c=i[0],a=e.originalEvent.dataTransfer.getData("Text");if((c.value||b).replace(k,b).replace(a,b)===i.data(d))c.value=a;i.focus()});if(z.form){var w=z.form,y=a(w);if(!y.data(l)){y.submit(a.watermark.hideAll);if(w.submit){y.data(l,w.submit);w.submit=function(c,b){return function(){var d=b.data(l);a.watermark.hideAll();if(d.apply)d.apply(c,Array.prototype.slice.call(arguments));else d()}}(w,y)}else{y.data(l,1);w.submit=function(b){return function(){a.watermark.hideAll();delete b.submit;b.submit()}}(w)}}}}a.watermark._show(i)})};if(a.watermark.runOnce){a.watermark.runOnce=i;a.extend(a.expr[":"],{data:function(c,d,b){return!!a.data(c,b[3])}});(function(c){a.fn.val=function(){var e=this;if(!e.length)return arguments.length?e:y;if(!arguments.length)if(e.data(g)){var f=(e[0].value||b).replace(k,b);return f===(e.data(d)||b)?b:f}else return c.apply(e,arguments);else{c.apply(e,arguments);a.watermark.show(e);return e}}})(a.fn.val);p.length&&a(function(){for(var b,c,d=p.length-1;d>=0;d--){b=p[d];c=h[b];if(typeof c===w)h[b]=function(b){return function(){a.watermark.hideAll();return b.apply(null,Array.prototype.slice.call(arguments))}}(c)}});a(h).bind("beforeunload",function(){a.watermark.options.hideBeforeUnload&&a.watermark.hideAll()})}})(jQuery,window);
  $.prepopulateForm = function (fields) {
  	for (var i = 0; i < fields.length; i++) {
  		if (QueryStringExists(fields[i].param)) {
  			$(fields[i].field).val(QueryStringValue(fields[i].param));
  		}
  	}
  };
  var _sid = 'z1x4jvsboq2yoghknmhbxres';
  $.formhandler = function (onsuccess, onerror) {
  	if (QueryStringExists('fst')) {
  		if (QueryStringValue('fst') == '1')
  			onsuccess('Thanks for your submission.', 'db202eb3-4375-4214-bf4a-003bdfdd59b7');
  		else if (QueryStringValue('fst') == '0')
  			onerror('There was a problem with your submission. Please check your submitted information and try again.', 'db202eb3-4375-4214-bf4a-003bdfdd59b7');
  	}
  };
  function getCookie(NAME) {
  	//Without this, it will return the first value
  	//in document.cookie when name is the empty string.
  	if (NAME == '')
  		return '';

  	name_index = document.cookie.indexOf(NAME + '=');

  	if (name_index == -1)
  		return '';

  	cookie_value = document.cookie.substr(name_index + NAME.length + 1, document.cookie.length);

  	//All cookie name-value pairs end with a semi-colon, except the last one.
  	end_of_cookie = cookie_value.indexOf(';');
  	if (end_of_cookie != -1)
  		cookie_value = cookie_value.substr(0, end_of_cookie);

  	//Restores all the blank spaces.
  	space = cookie_value.indexOf('+');
  	while (space != -1) {
  		cookie_value = cookie_value.substr(0, space) + ' ' + cookie_value.substr(space + 1, cookie_value.length);

  		space = cookie_value.indexOf('+');
  	}

  	return cookie_value;
  }
  function GetQueryParams() {
  	var ret = [];
  	var href = window.location.href.split('#')[0];
  	if (href.indexOf('?') > -1) {
  		var qry = href.split('?')[1];
  		var params = qry.split('&');
  		var i = 0;
  		for (i = 0; i < params.length; i++) {
  			var prts = params[i].split('=');
  			ret.push({ key: prts[0], value: prts[1] });
  		}
  	}
  	return ret;
  }

  function QueryStringExists(param) {
  	var ret = false;
  	var href = window.location.href;
  	if (href.indexOf('?') > -1) {
  		var qry = href.split('?')[1];
  		var params = qry.split('&');
  		var i = 0;
  		for (i = 0; i < params.length; i++) {
  			if (params[i].split('=')[0] == param)
  				ret = true;
  		}
  	}
  	return ret;
  }

  function QueryStringValue(param) {
  	var ret = '';
  	var href = window.location.href;
  	if (href.indexOf('?') > -1) {
  		var qry = href.split('?')[1];
  		var params = qry.split('&');
  		var i = 0;
  		for (i = 0; i < params.length; i++) {
  			if (params[i].split('=')[0] == param)
  				ret = params[i].split('=')[1];
  		}
  	}
  	return ret;
  }
  var loadDt;
  $(function () {
  	loadDt = new Date();

  	var params = GetQueryParams();
  	var i = 0;
  	for (i = 0; i < params.length; i++) {
  		var objs = $('form.formhandler').find('[data-query="' + params[i].key + '"]');
  		if (objs.length > 1) {
  			if ($(objs[0]).is('input[type="radio"]')) {
  				$(objs).each(function () {
  					if ($(this).val() == params[i].value)
  						$(this).attr('checked', 'checked');
  				});
  			}
  			else if ($(objs[0]).is('input[type="checkbox"]')) {
  				var opts = params[i].value.split(',');
  				var j = 0;
  				$(objs).each(function () {
  					for (j = 0; j < opts.length; j++) {
  						if ($(this).val() == opts[j])
  							$(this).attr('checked', 'checked');
  					}
  				});
  			}
  		}
  		else if (objs.length == 1) {
  			if ($(objs[0]).is('input[type="checkbox"]'))
  				$(objs[0]).attr('checked', 'checked');
  			else
  				$(objs[0]).val(unescape(params[i].value));
  		}
  	}
  	$('input[type="text"]').add('input[type="email"]').each(function () {
  		$(this).watermark($(this).attr('placeholder'));
  	});
  	if ($('.email').attr('placeholder')) {
  		$('input[type="text"]').add('input[type="email"]').add('textarea').each(function () {
  			$(this).watermark($(this).attr('placeholder'));
  		});
  	}
  	$.formhandler(function (errormsg, authcode) {
  		$('form.formhandler').each(function () {
  			if ($(this).find('input[name="auth"]').val() == authcode) {
  				$(this).closest('form').find('.feedback').show().removeClass('alert-error').addClass('alert-success').html('<strong>Thanks.</strong>Your message has been submitted.').css('display', 'block').focus();
  			}
  		});
  	}, function () {
  		$('form.formhandler').each(function () {
  			if ($(this).find('input[name="auth"]').val() == authcode) {
  				$(this).closest('form').find('.feedback').show().removeClass('alert-success').addClass('alert-error').html('<strong>Error.</strong>There was a problem with your submission. Please try again.').css('display', 'block').focus();
  			}
  		});
  	});
  	$('.otherfield').change(function () {
  		if ($(this).val() == 'other') {
  			$(this).parent().append('<input type="text" class="text" placeholder="Other" name="other" id="other"/>')
  			$('#other').watermark('Other');
  		}
  	});
  	$('.submit').attr('disabled', false);
  	$('form.formhandler').submit(function (e) {
  		var email_error = "Please enter a valid email address.";
  		var req_field_error = "Please fill in the required fields.";
  		var valid = true;
  		var emailvalid = true;
  		var form = $(this);
  		var post_url = $(this).attr('action') + '?ajax=1';
  		var postedForm = $(this);
  		//console.log(post_data);
  		var postDt = new Date();
  		if ($(this).find('input[name="js"]').length == 0) {
  			var str = '<input type="hidden" name="js" value="1" />';
  			$(this).append(str);
  		}
  		if ($(this).find('input[name="ttp"]').length == 0) {
  			var str = '<input type="hidden" name="ttp" value="' + ((postDt - loadDt) / 1000).toString() + '" />';
  			$(this).append(str);
  		}
  		if ($(this).find('input[name="sid"]').length == 0) {
  			var str = '<input type="hidden" name="sid" value="' + _sid + '" />';
  			$(this).append(str);
  		}
  		else
  			$(this).find('input[name="sid"]').val(_sid);

  		var post_data = $(this).serialize();

  		$('.error').blur(function () {
  			if ($(this).val() != "") {
  				$(this).removeClass('error');
  			}
  		});
  		$(this).find('.required').removeClass('error');
  		$(this).find('.required').each(function () {
  			var value = $(this).val();
  			if (value == '') {
  				$(this).addClass('error');
  				valid = false;
  			}
  			else if ($(this).hasClass('email')) {
  				if (!isValidEmailAddress(value)) {
  					$(this).addClass('error');
  					valid = false;
  					emailvalid = false;
  				}
  			}
  		});

  		if (valid) {
  			$(this).find('.feedback').hide().html('');
  			$(this).find('.submit').attr('disabled', true).addClass('disabled');
  			$('body').css('cursor', 'wait');
  			if ($.browser.msie == true) {
  				//$(this).submit();
  				$('.submit').attr('disabled', false);
  				$('body').add('.submit').css('cursor', 'default');
  			} else {
  				e.preventDefault();
  				$.ajax({
  					type: 'POST',
  					url: post_url,
  					data: post_data,
  					dataType: 'json',
  					success: function (result) {
  						$('body').css('cursor', 'default');
  						var r = eval(result)[0];

  						postedForm.find('.feedback').show().removeClass('alert-error').addClass('alert-success').html(r.Message).css('display', 'block').focus();
  						postedForm.find('.submit').attr('disabled', false).removeClass('disabled');
  						if (!$(postedForm).is('[data-preserve]')) {
  						$('input[type="text"]', postedForm).add('input[type=checkbox]', postedForm).add('input[type=radio]', postedForm).removeAttr('checked');
  						//console.log($('input[type="text"]', postedForm).not('.hu').add('select', postedForm).add('textarea', postedForm).add('input[type="email"]', postedForm));
  						$('input[type="text"]', postedForm).not('.hu').add('select', postedForm).add('textarea', postedForm).add('input[type="email"]', postedForm).val('');
  						}
  						//console.log($(this));
  						//console.log(popupUrl);

  						if ($(postedForm).attr('data-popup') != undefined && $(postedForm).attr('data-popup') != '' || r.Popup != '') {
  							var popup = '';
  							if (r.Popup != '')
  								popup = r.Popup;
  							else
  								popup = $(postedForm).attr('data-popup');

  							//$('.feedback', postedForm).html('Please wait, the download should open in a new window within 3 seconds. If not <a target="_blank" href="' + popup + '">click here</a>. An email has been dispatched to your submitted email address containing a link to download the whitepaper.');
  							setTimeout(function () {
  								window.open(popup, '_blank');
  							}, 3000);
  						}
  						if ($(postedForm).attr('data-redirect') != undefined && $(postedForm).attr('data-redirect') != '' || r.Redirect != '') {
  							var redirect = '';
  							if (r.Redirect != '')
  								redirect = r.Redirect;
  							else
  								redirect = $(postedForm).attr('data-redirect');

  							//$('.feedback', postedForm).html('Please wait, you should be redirected within 3 seconds. If not <a href="' + redirect + '">click here</a>');
  							setTimeout(function () {
  								window.location.href = redirect;
  							}, 3000);
  						}
  						if ($(postedForm).attr('data-onsuccess')) {
  							eval($(postedForm).attr('data-onsuccess'));
  						}
  						if ($(postedForm).attr('data-submit-text') != undefined && $(postedForm).attr('data-submit-text') != '') {
  							postedForm.find('button').attr('disabled',true).html($(postedForm).attr('data-submit-text'));
  						}

  					},
  					error: function () {
  						$('body').css('cursor', 'default');
  						postedForm.find('.feedback').show().addClass('alert-error').html().css('display', 'block').focus();
  						postedForm.find('.submit').attr('disabled', false).removeClass('disabled');
  					},
  					complete: function () {
  						$('body').css('cursor', 'default');
  						postedForm.find('.submit').attr('disabled', false).removeClass('disabled');
  					}
  				});
  			}
  		} else if (emailvalid == false) {
  			e.preventDefault();
  			$('body').css('cursor', 'default');
  			$(this).find('.feedback').hide().html('');
  			$(this).find('.feedback').show().addClass('alert-error').html('<h4>Error.</h4><p>' + email_error + '</p>').css('display', 'block').focus();
  		} else {
  			e.preventDefault();
  			$('body').css('cursor', 'default');
  			$(this).find('.feedback').html('');
  			$(this).find('.feedback').show().addClass('alert-error').html('<h4>Error.</h4><p>' + req_field_error + '</p>').css('display', 'block').focus();
  		}
  		if ($('.email').attr('placeholder')) {
  			$('input[type="text"]').add('input[type="email"]').add('textarea').each(function () {
  				$(this).watermark($(this).attr('placeholder'));
  			});
  		}
  	});
  });

  function isValidEmailAddress(email) {
  	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
  	return pattern.test(email);
  }

});
