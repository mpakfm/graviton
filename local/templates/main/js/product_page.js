!function(e){var t={};function o(r){if(t[r])return t[r].exports;var n=t[r]={i:r,l:!1,exports:{}};return e[r].call(n.exports,n,n.exports,o),n.l=!0,n.exports}o.m=e,o.c=t,o.d=function(e,t,r){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(o.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)o.d(r,n,function(t){return e[t]}.bind(null,n));return r},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="/",o(o.s=12)}({12:function(e,t,o){"use strict";o.r(t);o(13),o(14)},13:function(e,t){if(document.querySelector(".s-product-tech")){var o=document.querySelector(".s-product-tech__button-more"),r=document.querySelector(".s-product-tech__info");o.onclick=function(){r.classList.toggle("_show"),o.textContent.toLowerCase().includes("Свернуть".toLowerCase())?o.textContent="Развернуть":o.textContent="Свернуть"}}},14:function(e,t){var o,r,n;document.querySelector(".s-product-docs")&&(o=document.querySelector(".s-product-docs__tabs"),r=document.querySelectorAll(".s-product-docs__tab"),n=document.querySelectorAll(".s-product-docs__content"),o.addEventListener("click",(function(e){if(e.target){for(var t=0;t<r.length;t++)r[t].classList.remove("is-active");for(e.target.classList.toggle("is-active"),t=0;t<n.length;t++)n[t].classList.remove("is-active");var o="#"+e.target.dataset.tabId;document.querySelector(o).classList.toggle("is-active")}})))}});