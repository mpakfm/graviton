!function(e){function t(t){for(var s,i,a=t[0],c=t[1],l=t[2],p=0,u=[];p<a.length;p++)i=a[p],Object.prototype.hasOwnProperty.call(n,i)&&n[i]&&u.push(n[i][0]),n[i]=0;for(s in c)Object.prototype.hasOwnProperty.call(c,s)&&(e[s]=c[s]);for(d&&d(t);u.length;)u.shift()();return r.push.apply(r,l||[]),o()}function o(){for(var e,t=0;t<r.length;t++){for(var o=r[t],s=!0,a=1;a<o.length;a++){var c=o[a];0!==n[c]&&(s=!1)}s&&(r.splice(t--,1),e=i(i.s=o[0]))}return e}var s={},n={13:0},r=[];function i(t){if(s[t])return s[t].exports;var o=s[t]={i:t,l:!1,exports:{}};return e[t].call(o.exports,o,o.exports,i),o.l=!0,o.exports}i.m=e,i.c=s,i.d=function(e,t,o){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(i.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var s in e)i.d(o,s,function(t){return e[t]}.bind(null,s));return o},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="/";var a=window.webpackJsonp=window.webpackJsonp||[],c=a.push.bind(a);a.push=t,a=a.slice();for(var l=0;l<a.length;l++)t(a[l]);var d=c;r.push([37,0]),o()}({10:function(e,t,o){(function(e){function t(t){switch(!0){case t<1199&&0==e(".s-support-form__mobile",e(".s-support-form__bottom-left")).length&&t>991:e(".s-support-form__mobile").append(e(".s-support-form__bottom-left")),e(".s-support-form__contacts-links").append(e(".s-support-form__contacts-message"));break;case t<1199&&0==e(".s-support-form__contacts-mobile",e(".s-support-form__bottom-left")).length&&t<991:e(".s-support-form__contacts-mobile").append(e(".s-support-form__contacts-message")),e(".s-support-form__mobile").append(e(".s-support-form__bottom-left"));break;case t>1199&&0==e(".s-support-form__bottom",e(".s-support-form__bottom-left")).length&&t>991:e(".s-support-form__bottom").append(e(".s-support-form__bottom-left")),e(".s-support-form__bottom").append(e(".s-support-form__contacts-message"))}}t(e(window).width()),e(window).on("resize",(function(){t(e(window).width())}))}).call(this,o(0))},31:function(e,t,o){(function(e){if(document.querySelector(".s-service-centres__tabs")){var t=document.querySelectorAll(".s-service-centres__tab-link"),o=document.querySelectorAll(".s-service-centres__tab-content");t.forEach((function(e){e.addEventListener("click",(function(){var s=document.querySelector("#"+e.dataset.tab);o.forEach((function(e){e.classList.remove("is-active")})),t.forEach((function(e){e.parentNode.classList.remove("is-active")})),e.parentNode.classList.add("is-active"),s.classList.add("is-active")}))}))}var s=[{name:"Омск",style:"islands#blackIcon",items:[{ID:1522,NAME:"СКК Компьютерная клиника №091 ООО «Компьютерофф»",CITY:"Омск",CITY_ID:1456,LETTER:"Ч",CENTER:[50.446977,30.505269],WORK:"с 9:00 до 18:00 пн-пт",ADDRESS:"ул. Советская, д 72",PHONE1:"+7 (8782) 268063",PHONE2:"",EMAIL:"klinika№091@yandex.ru"}]},{name:"Москва",style:"islands#blackIcon",items:[{ID:1522,NAME:"СКК Компьютерная клиника №091 ООО «Компьютерофф»",CITY:"Москва",CITY_ID:1456,LETTER:"Ч",CENTER:[42.058668,44.216342],WORK:"с 9:00 до 18:00 пн-пт",ADDRESS:"ул. Советская, д 72",PHONE1:"+7 (8782) 268063",PHONE2:"",EMAIL:"klinika№091@yandex.ru"}]},{name:"Черкеск",style:"islands#blackIcon",items:[{ID:1522,NAME:"СКК Компьютерная клиника №091 ООО «Компьютерофф»",CITY:"Черкесск",CITY_ID:1456,LETTER:"Ч",CENTER:[50.446977,30.505269],WORK:"с 9:00 до 18:00 пн-пт",ADDRESS:"ул. Советская, д 72",PHONE1:"+7 (8782) 268063",PHONE2:"",EMAIL:"klinika№091@yandex.ru"}]}];s.sort((function(e,t){return e.name>t.name?1:e.name<t.name?-1:0}));var n=document.querySelector(".s-service-centres__list-content"),r="";s.forEach((function(e,t){e.items.forEach((function(e,t){r+=function(e){return'<div class="service-centre__item"><div class="service-centre__item-city">'+e.CITY+'</div><div class="service-centre__item-top"><div class= "service-centre__item-name"> '+e.NAME+'</div><div class= "service-centre__item-work"> '+e.WORK+'</div></div><div class= "service-centre__item-address"> '+e.ADDRESS+'<button type="button" class="map-ballon__address-button"><svg width="25" height="30" viewBox="0 0 25 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.625 0H7.5C6.50544 0 5.55161 0.395088 4.84835 1.09835C4.14509 1.80161 3.75 2.75544 3.75 3.75C2.75544 3.75 1.80161 4.14509 1.09835 4.84835C0.395088 5.55161 0 6.50544 0 7.5V26.25C0 27.2446 0.395088 28.1984 1.09835 28.9016C1.80161 29.6049 2.75544 30 3.75 30H16.875C17.8696 30 18.8234 29.6049 19.5266 28.9016C20.2299 28.1984 20.625 27.2446 20.625 26.25C21.6196 26.25 22.5734 25.8549 23.2766 25.1516C23.9799 24.4484 24.375 23.4946 24.375 22.5V3.75C24.375 2.75544 23.9799 1.80161 23.2766 1.09835C22.5734 0.395088 21.6196 0 20.625 0V0ZM20.625 24.375V7.5C20.625 6.50544 20.2299 5.55161 19.5266 4.84835C18.8234 4.14509 17.8696 3.75 16.875 3.75H5.625C5.625 3.25272 5.82254 2.77581 6.17418 2.42417C6.52581 2.07254 7.00272 1.875 7.5 1.875H20.625C21.1223 1.875 21.5992 2.07254 21.9508 2.42417C22.3025 2.77581 22.5 3.25272 22.5 3.75V22.5C22.5 22.9973 22.3025 23.4742 21.9508 23.8258C21.5992 24.1775 21.1223 24.375 20.625 24.375ZM1.875 7.5C1.875 7.00272 2.07254 6.52581 2.42417 6.17417C2.77581 5.82254 3.25272 5.625 3.75 5.625H16.875C17.3723 5.625 17.8492 5.82254 18.2008 6.17417C18.5525 6.52581 18.75 7.00272 18.75 7.5V26.25C18.75 26.7473 18.5525 27.2242 18.2008 27.5758C17.8492 27.9275 17.3723 28.125 16.875 28.125H3.75C3.25272 28.125 2.77581 27.9275 2.42417 27.5758C2.07254 27.2242 1.875 26.7473 1.875 26.25V7.5Z" fill="#C6C7D0"/></svg></button></div><div class="service-centre__item-info"><div class= "service-centre__item-link"> <a href="tel:'+e.PHONE1+'">'+e.PHONE1+'</a></div><div class= "service-centre__item-link"> <a href="tel:'+e.PHONE2+'">'+e.PHONE2+'</a></div><div class= "service-centre__item-link"> <a href="mailto:'+e.EMAIL+'">'+e.EMAIL+'</a></div></div><div class= "service-centre__item-route"> <a href="https://yandex.ru/maps/?pt='+e.CENTER+'&z=10&l=map" target="_blank">Как проехать?</a></div></div>'}(e)}))})),n.innerHTML=r,ymaps.ready((function(){for(var t=new ymaps.Map("serviceCentres",{center:[50.443705,30.530946],zoom:14,controls:["zoomControl"]},{searchControlProvider:"yandex#search"}),o=(e(".s-service-centres__list"),0),n=s.length;o<n;o++)r(s[o]);function r(o){e('<div class="s-service-centres__item-group"></div>');var s=new ymaps.GeoObjectCollection(null,{iconLayout:"default#image",iconImageHref:"img/map-dot.svg",iconImageSize:[32,33]});submenu=e('<div class="s-service-centres__item-list"></div>'),t.geoObjects.add(s);for(var n=0,r=o.items.length;n<r;n++)i(o.items[n],s)}function i(e,t){var o=new ymaps.Placemark(e.CENTER,{hintContent:e.CITY,balloonContent:e.NAME,balloonContentHeader:"",balloonContentBody:'<div class="map-ballon"><div class= "map-ballon__city">'+e.CITY+'</div><div class="map-ballon__info"><div class= "map-ballon__name"> '+e.NAME+'</div><div class= "map-ballon__work"> '+e.WORK+'</div><div class= "map-ballon__address"><span id="addressServiceCenter"> '+e.ADDRESS+'</span><button type="button" class="map-ballon__address-button"><svg width="25" height="30" viewBox="0 0 25 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.625 0H7.5C6.50544 0 5.55161 0.395088 4.84835 1.09835C4.14509 1.80161 3.75 2.75544 3.75 3.75C2.75544 3.75 1.80161 4.14509 1.09835 4.84835C0.395088 5.55161 0 6.50544 0 7.5V26.25C0 27.2446 0.395088 28.1984 1.09835 28.9016C1.80161 29.6049 2.75544 30 3.75 30H16.875C17.8696 30 18.8234 29.6049 19.5266 28.9016C20.2299 28.1984 20.625 27.2446 20.625 26.25C21.6196 26.25 22.5734 25.8549 23.2766 25.1516C23.9799 24.4484 24.375 23.4946 24.375 22.5V3.75C24.375 2.75544 23.9799 1.80161 23.2766 1.09835C22.5734 0.395088 21.6196 0 20.625 0V0ZM20.625 24.375V7.5C20.625 6.50544 20.2299 5.55161 19.5266 4.84835C18.8234 4.14509 17.8696 3.75 16.875 3.75H5.625C5.625 3.25272 5.82254 2.77581 6.17418 2.42417C6.52581 2.07254 7.00272 1.875 7.5 1.875H20.625C21.1223 1.875 21.5992 2.07254 21.9508 2.42417C22.3025 2.77581 22.5 3.25272 22.5 3.75V22.5C22.5 22.9973 22.3025 23.4742 21.9508 23.8258C21.5992 24.1775 21.1223 24.375 20.625 24.375ZM1.875 7.5C1.875 7.00272 2.07254 6.52581 2.42417 6.17417C2.77581 5.82254 3.25272 5.625 3.75 5.625H16.875C17.3723 5.625 17.8492 5.82254 18.2008 6.17417C18.5525 6.52581 18.75 7.00272 18.75 7.5V26.25C18.75 26.7473 18.5525 27.2242 18.2008 27.5758C17.8492 27.9275 17.3723 28.125 16.875 28.125H3.75C3.25272 28.125 2.77581 27.9275 2.42417 27.5758C2.07254 27.2242 1.875 26.7473 1.875 26.25V7.5Z" fill="#C6C7D0"/></svg></button></div><div class= "map-ballon__phone"> <a href="tel:'+e.PHONE1+'">'+e.PHONE1+'</a><a href="tel:'+e.PHONE2+'">'+e.PHONE2+'</a></div><div class= "map-ballon__bottom"> <a href="mailto:'+e.EMAIL+'">'+e.EMAIL+'</a><a href="https://yandex.ru/maps/?pt='+e.CENTER+'&z=18&l=map" target="_blank">Как проехать?</a></div></div></div>',balloonContentFooter:""});t.add(o)}t.setBounds(t.geoObjects.getBounds()),t.behaviors.disable("scrollZoom")}))}).call(this,o(0))},37:function(e,t,o){"use strict";o.r(t);o(10),o(6);var s=o(0),n=o.n(s),r=n()(".form__raitings-item");function i(e){switch(!0){case e<1699&&0==n()(".s-reviews .form__checkbox",n()(".reviews__form-mobile")).length:n()(".reviews__form-mobile").append(n()(".s-reviews .form__checkbox"));break;case e<1699&&0==n()(".s-reviews .form__checkbox",n()(".form__checkbox-wrapper")).length:n()(",s-reviews .form__checkbox-wrapper").append(n()(".s-reviews .form__checkbox"))}}i(n()(window).width()),n()(window).on("resize",(function(){i(n()(window).width())})),r.on("mouseover",(function(){var e=n()("input",this).attr("value");r.each((function(t){t<=e-1&&!n()(this).hasClass("active")?n()(this).addClass("hover"):n()(this).removeClass("hover")}))})),r.on("mouseleave",(function(){r.removeClass("hover")})),n()(".form__raitings-item input").on("change",(function(){var e=n()(this).is(":checked"),t=n()(this).attr("value");r.each((function(o){o<=t-1&&e?n()(this).addClass("active"):n()(this).removeClass("active")}))}));o(31)},6:function(e,t,o){"use strict";var s=o(5);if(s.a.use([]),document.querySelector(".s-top-menu__slider"))new s.a(".s-top-menu__slider",{slidesPerView:"auto",spaceBetween:20,observer:!0,observeParents:!0,breakpoints:{1024:{spaceBetween:30},1600:{spaceBetween:35}}})}});