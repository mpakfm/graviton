!function(e){function t(t){for(var o,a,d=t[0],u=t[1],s=t[2],l=0,p=[];l<d.length;l++)a=d[l],Object.prototype.hasOwnProperty.call(n,a)&&n[a]&&p.push(n[a][0]),n[a]=0;for(o in u)Object.prototype.hasOwnProperty.call(u,o)&&(e[o]=u[o]);for(i&&i(t);p.length;)p.shift()();return c.push.apply(c,s||[]),r()}function r(){for(var e,t=0;t<c.length;t++){for(var r=c[t],o=!0,d=1;d<r.length;d++){var u=r[d];0!==n[u]&&(o=!1)}o&&(c.splice(t--,1),e=a(a.s=r[0]))}return e}var o={},n={8:0},c=[];function a(t){if(o[t])return o[t].exports;var r=o[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,a),r.l=!0,r.exports}a.m=e,a.c=o,a.d=function(e,t,r){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(a.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)a.d(r,o,function(t){return e[t]}.bind(null,o));return r},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="/";var d=window.webpackJsonp=window.webpackJsonp||[],u=d.push.bind(d);d.push=t,d=d.slice();for(var s=0;s<d.length;s++)t(d[s]);var i=u;c.push([30,0]),r()}({16:function(e,t){if(document.querySelector(".s-product-tech")){var r=document.querySelector(".s-product-tech__button-more"),o=document.querySelector(".s-product-tech__info");r.onclick=function(){o.classList.toggle("_show"),r.textContent.toLowerCase().includes("Свернуть".toLowerCase())?r.textContent="Развернуть":r.textContent="Свернуть"}}},17:function(e,t){var r,o,n;document.querySelector(".s-product-docs")&&(r=document.querySelector(".s-product-docs__tabs"),o=document.querySelectorAll(".s-product-docs__tab"),n=document.querySelectorAll(".s-product-docs__content"),r.addEventListener("click",(function(e){if(e.target){for(var t=0;t<o.length;t++)o[t].classList.remove("is-active");for(e.target.classList.toggle("is-active"),t=0;t<n.length;t++)n[t].classList.remove("is-active");var r="#"+e.target.dataset.tabId;document.querySelector(r).classList.toggle("is-active")}})))},30:function(e,t,r){"use strict";r.r(t);r(16),r(17);var o=r(0),n=r.n(o),c=n()(".product-header").height();function a(e){switch(!0){case e<991&&0==n()(".menu__item-btn",n()(".product-header__btn-text")).length:n()(".product-header .menu__item-btn").append(n()(".product-header__btn-text"));break;case e>991&&0==n()(".product-header__btn",n()(".product-header__btn-text")).length:n()(".product-header__btn").append(n()(".product-header__btn-text"))}}a(n()(window).width()),n()(window).on("resize",(function(){a(n()(window).width())})),n()(window).on("scroll",(function(){n()(window).scrollTop()>n()(".s-product-characteristics").offset().top?(n()(".header").addClass("header-hidden"),n()(".product-header").addClass("product-header-show")):(n()(".header").removeClass("header-hidden"),n()(".product-header").removeClass("product-header-show"))})),n()(".product-header__burger").on("click",(function(){n()(".header__mobile").toggleClass("open")})),n()("a.scroll").on("click",(function(){var e=n()(this);return n()("html, body").animate({scrollTop:n()(e.attr("href")).offset().top-c+"px"},{duration:800}),n()(window).width()<767&&burger(),!1})),n()(".scroll").each((function(){var e=n()(this).attr("href");e.substr(0,e.indexOf("+")),n()(this).attr("href",e)}));r(9)},9:function(e,t,r){"use strict";var o=r(0),n=r.n(o);n()(document).ready((function(){n()("body, html").removeClass("overflow-y-hidden").addClass("preloaded")}))}});