(()=>{var t={228:t=>{t.exports=function(t,r){(null==r||r>t.length)&&(r=t.length);for(var e=0,n=new Array(r);e<r;e++)n[e]=t[e];return n}},646:(t,r,e)=>{var n=e(228);t.exports=function(t){if(Array.isArray(t))return n(t)}},713:t=>{t.exports=function(t,r,e){return r in t?Object.defineProperty(t,r,{value:e,enumerable:!0,configurable:!0,writable:!0}):t[r]=e,t}},318:t=>{t.exports=function(t){return t&&t.__esModule?t:{default:t}}},860:t=>{t.exports=function(t){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(t))return Array.from(t)}},206:t=>{t.exports=function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}},319:(t,r,e)=>{var n=e(646),o=e(860),a=e(379),c=e(206);t.exports=function(t){return n(t)||o(t)||a(t)||c()}},379:(t,r,e)=>{var n=e(228);t.exports=function(t,r){if(t){if("string"==typeof t)return n(t,r);var e=Object.prototype.toString.call(t).slice(8,-1);return"Object"===e&&t.constructor&&(e=t.constructor.name),"Map"===e||"Set"===e?Array.from(t):"Arguments"===e||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e)?n(t,r):void 0}}},567:t=>{"use strict";t.exports=window.jQuery},707:t=>{"use strict";t.exports=window.wc_stripe}},r={};function e(n){var o=r[n];if(void 0!==o)return o.exports;var a=r[n]={exports:{}};return t[n](a,a.exports,e),a.exports}(()=>{var t=e(318),r=t(e(319)),n=t(e(713)),o=t(e(567)),a=e(707);function c(t,r){var e=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);r&&(n=n.filter((function(r){return Object.getOwnPropertyDescriptor(t,r).enumerable}))),e.push.apply(e,n)}return e}function u(t){for(var r=1;r<arguments.length;r++){var e=null!=arguments[r]?arguments[r]:{};r%2?c(Object(e),!0).forEach((function(r){(0,n.default)(t,r,e[r])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(e)):c(Object(e)).forEach((function(r){Object.defineProperty(t,r,Object.getOwnPropertyDescriptor(e,r))}))}return t}var i=function(t){a.product_gateways.forEach((function(t){t.maybe_calculate_cart&&t.maybe_calculate_cart()}))};(0,o.default)((function(){a.product_gateways.length&&(a.product_gateways.forEach((function(t){var e=t.get_add_to_cart_data;t.get_add_to_cart_data=function(){return u(u({},e.call(t)),(0,o.default)("form.cart .wc-pao-addon-field").serializeArray().reduce((function(t,e){if(/([\w\-\_]+)\[\]$/.test(e.name)){var o=e.name.substring(0,e.name.length-2);return u(u({},t),{},(0,n.default)({},o,[].concat((0,r.default)(t[o]||[]),[e.value])))}return u(u({},t),{},(0,n.default)({},e.name,e.value))}),{}))}})),(0,o.default)(document.body).on("updated_addons","form.cart",i))}))})(),(this.wc_stripe=this.wc_stripe||{})["product-addons"]={}})();
//# sourceMappingURL=product-addons.js.map