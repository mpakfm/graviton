!function(e){function t(t){for(var o,d,u=t[0],a=t[1],s=t[2],l=0,p=[];l<u.length;l++)d=u[l],Object.prototype.hasOwnProperty.call(n,d)&&n[d]&&p.push(n[d][0]),n[d]=0;for(o in a)Object.prototype.hasOwnProperty.call(a,o)&&(e[o]=a[o]);for(i&&i(t);p.length;)p.shift()();return c.push.apply(c,s||[]),r()}function r(){for(var e,t=0;t<c.length;t++){for(var r=c[t],o=!0,u=1;u<r.length;u++){var a=r[u];0!==n[a]&&(o=!1)}o&&(c.splice(t--,1),e=d(d.s=r[0]))}return e}var o={},n={4:0},c=[];function d(t){if(o[t])return o[t].exports;var r=o[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,d),r.l=!0,r.exports}d.m=e,d.c=o,d.d=function(e,t,r){d.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},d.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},d.t=function(e,t){if(1&t&&(e=d(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(d.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)d.d(r,o,function(t){return e[t]}.bind(null,o));return r},d.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return d.d(t,"a",t),t},d.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},d.p="/";var u=window.webpackJsonp=window.webpackJsonp||[],a=u.push.bind(u);u.push=t,u=u.slice();for(var s=0;s<u.length;s++)t(u[s]);var i=a;c.push([19,0]),r()}({13:function(e,t){if(document.querySelector(".s-product-tech")){var r=document.querySelector(".s-product-tech__button-more"),o=document.querySelector(".s-product-tech__info");r.onclick=function(){o.classList.toggle("_show"),r.textContent.toLowerCase().includes("Свернуть".toLowerCase())?r.textContent="Развернуть":r.textContent="Свернуть"}}},14:function(e,t){var r,o,n;document.querySelector(".s-product-docs")&&(r=document.querySelector(".s-product-docs__tabs"),o=document.querySelectorAll(".s-product-docs__tab"),n=document.querySelectorAll(".s-product-docs__content"),r.addEventListener("click",(function(e){if(e.target){for(var t=0;t<o.length;t++)o[t].classList.remove("is-active");for(e.target.classList.toggle("is-active"),t=0;t<n.length;t++)n[t].classList.remove("is-active");var r="#"+e.target.dataset.tabId;document.querySelector(r).classList.toggle("is-active")}})))},19:function(e,t,r){"use strict";r.r(t);r(13),r(14);var o=r(0),n=r.n(o);function c(e){switch(!0){case e<991&&0==n()(".menu__item-btn",n()(".product-header__btn-text")).length:n()(".menu__item-btn").append(n()(".product-header__btn-text"));break;case e>991&&0==n()(".product-header__btn",n()(".product-header__btn-text")).length:n()(".product-header__btn").append(n()(".product-header__btn-text"))}}c(n()(window).width()),n()(window).on("resize",(function(){c(n()(window).width())})),n()(window).on("scroll",(function(){n()(window).scrollTop()>n()(".s-product-characteristics").offset().top?(n()(".header").addClass("header-hidden"),n()(".product-header").addClass("product-header-show")):(n()(".header").removeClass("header-hidden"),n()(".product-header").removeClass("product-header-show"))}));r(6)},6:function(e,t,r){"use strict";var o=r(0),n=r.n(o);n()(document).ready((function(){n()("body, html").removeClass("overflow-y-hidden").addClass("preloaded")}))}});