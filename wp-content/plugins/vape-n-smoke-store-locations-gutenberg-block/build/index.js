!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=4)}([function(e,t){!function(){e.exports=this.wp.element}()},function(e,t,n){var r=n(5),o=n(6),i=n(7),a=n(8);e.exports=function(e){return r(e)||o(e)||i(e)||a()}},function(e,t){e.exports=function(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}},function(e,t){!function(){e.exports=this.wp.serverSideRender}()},function(e,t,n){"use strict";n.r(t);var r=n(1),o=n.n(r),i=n(0),a=n(3),c=n.n(a),s=wp.i18n.__,l=wp.blocks.registerBlockType,u=wp.components,f=u.Button,p=u.PanelBody,d=u.PanelRow,b=u.TextControl,m=u.TextareaControl,v=wp.editor.InspectorControls,y=wp.element.Fragment;l("vape-smoke/store-locations",{title:s("Store Locations","vape-smoke"),description:s("Custom gutenberg block built for Vape & Smoke, showing the store locations.","vape-smoke"),icon:"admin-multisite",example:{},category:"vs-cgb",attributes:{locations:{type:"array",default:[]}},keywords:[s("Gutenberg Repeater Field","vape-smoke"),s("Repeatable","vape-smoke")],edit:function(e){var t=e.attributes.locations,n=e.setAttributes,r=e.attributes.locations.map((function(t,r){return Object(i.createElement)(p,{title:s("Location - ","vape-smoke")+t.title,initialOpen:!0,key:r},Object(i.createElement)(d,null,Object(i.createElement)(b,{label:s("Title","vape-smoke"),value:t.title,onChange:function(t){!function(t,n){if(void 0!==t){var r=o()(e.attributes.locations);r[n]={title:t||"",description:r[n].description||"",address:r[n].address||"",iframe_src:r[n].iframe_src||""},e.setAttributes({locations:r})}}(t,r)}})),Object(i.createElement)(d,null,Object(i.createElement)(m,{label:s("Description","vape-smoke"),value:t.description,onChange:function(t){!function(t,n){if(void 0!==t){var r=o()(e.attributes.locations);r[n]={title:r[n].title||"",description:t||"",address:r[n].address||"",iframe_src:r[n].iframe_src||""},e.setAttributes({locations:r})}}(t,r)}})),Object(i.createElement)(d,null,Object(i.createElement)(b,{label:s("Address","vape-smoke"),value:t.address,onChange:function(t){!function(t,n){if(void 0!==t){var r=o()(e.attributes.locations);r[n]={title:r[n].title||"",description:r[n].description||"",address:t||"",iframe_src:r[n].iframe_src||""},e.setAttributes({locations:r})}}(t,r)}})),Object(i.createElement)(d,null,Object(i.createElement)(b,{label:s("iFrame Src","vape-smoke"),value:t.iframe_src,onChange:function(t){!function(t,n){if(void 0!==t){var r=o()(e.attributes.locations);r[n]={title:r[n].title||"",description:r[n].description||"",address:r[n].address||"",iframe_src:t||""},e.setAttributes({locations:r})}}(t,r)}})),Object(i.createElement)(d,null,Object(i.createElement)(f,{className:"button",onClick:function(){return function(t){var r=o()(e.attributes.locations);r.splice(t,1),n({locations:r})}(r)}},s("Delete location","vape-smoke"))))}));return Object(i.createElement)(y,null,Object(i.createElement)(v,null,r,Object(i.createElement)(p,{title:s("Add New Location","vape-smoke"),initialOpen:!0},Object(i.createElement)(d,null,Object(i.createElement)(f,{isSecondary:!0,onClick:function(){var t=o()(e.attributes.locations);t.push({title:"",description:"",address:"",iframe_src:""}),n({locations:t})}.bind(void 0)},s("Add Location","vape-smoke"))))),Object(i.createElement)(c.a,{block:"vape-smoke/store-locations",attributes:{locations:t}}))},save:function(){return null}})},function(e,t,n){var r=n(2);e.exports=function(e){if(Array.isArray(e))return r(e)}},function(e,t){e.exports=function(e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e))return Array.from(e)}},function(e,t,n){var r=n(2);e.exports=function(e,t){if(e){if("string"==typeof e)return r(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?r(e,t):void 0}}},function(e,t){e.exports=function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}}]);