!function(){"use strict";var e,r={227:function(){var e=window.wp.blocks,r=window.wp.element,n=window.wp.i18n,t=window.wp.blockEditor,o=JSON.parse('{"u2":"u-plus/alert-box"}');(0,e.registerBlockType)(o.u2,{edit:function(){return(0,r.createElement)("p",{...(0,t.useBlockProps)()},(0,n.__)("Alert Box – hello from the editor!","alert-box"))},save:function(){return(0,r.createElement)("p",{...t.useBlockProps.save()},"Alert Box – hello from the saved content!")}})}},n={};function t(e){var o=n[e];if(void 0!==o)return o.exports;var i=n[e]={exports:{}};return r[e](i,i.exports,t),i.exports}t.m=r,e=[],t.O=function(r,n,o,i){if(!n){var u=1/0;for(f=0;f<e.length;f++){n=e[f][0],o=e[f][1],i=e[f][2];for(var l=!0,c=0;c<n.length;c++)(!1&i||u>=i)&&Object.keys(t.O).every((function(e){return t.O[e](n[c])}))?n.splice(c--,1):(l=!1,i<u&&(u=i));if(l){e.splice(f--,1);var a=o();void 0!==a&&(r=a)}}return r}i=i||0;for(var f=e.length;f>0&&e[f-1][2]>i;f--)e[f]=e[f-1];e[f]=[n,o,i]},t.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},function(){var e={826:0,431:0};t.O.j=function(r){return 0===e[r]};var r=function(r,n){var o,i,u=n[0],l=n[1],c=n[2],a=0;if(u.some((function(r){return 0!==e[r]}))){for(o in l)t.o(l,o)&&(t.m[o]=l[o]);if(c)var f=c(t)}for(r&&r(n);a<u.length;a++)i=u[a],t.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return t.O(f)},n=self.webpackChunkalert_box=self.webpackChunkalert_box||[];n.forEach(r.bind(null,0)),n.push=r.bind(null,n.push.bind(n))}();var o=t.O(void 0,[431],(function(){return t(227)}));o=t.O(o)}();