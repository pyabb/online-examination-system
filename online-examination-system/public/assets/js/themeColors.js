(()=>{function e(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,r){var t=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null==t)return;var o,a,l=[],c=!0,s=!1;try{for(t=t.call(e);!(c=(o=t.next()).done)&&(l.push(o.value),!r||l.length!==r);c=!0);}catch(e){s=!0,a=e}finally{try{c||null==t.return||t.return()}finally{if(s)throw a}}return l}(e,t)||function(e,t){if(!e)return;if("string"==typeof e)return r(e,t);var o=Object.prototype.toString.call(e).slice(8,-1);"Object"===o&&e.constructor&&(o=e.constructor.name);if("Map"===o||"Set"===o)return Array.from(e);if("Arguments"===o||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(o))return r(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function r(e,r){(null==r||r>e.length)&&(r=e.length);for(var t=0,o=new Array(r);t<r;t++)o[t]=e[t];return o}function t(e,r,t){return r in e?Object.defineProperty(e,r,{value:t,enumerable:!0,configurable:!0,writable:!0}):e[r]=t,e}function o(e){"use strict";e.forEach((function(e){e.addEventListener("input",(function(e){var r,o,a,l="--primary-".concat(e.target.getAttribute("data-id")),c="--primary-".concat(e.target.getAttribute("data-id1")),s="--primary-".concat(e.target.getAttribute("data-id2")),n="--primary-".concat(e.target.getAttribute("data-id7")),m="--darkprimary-".concat(e.target.getAttribute("data-id8")),d="--dark-".concat(e.target.getAttribute("data-id3")),i="--transparent-".concat(e.target.getAttribute("data-id4")),y="--transparent-".concat(e.target.getAttribute("data-id5")),u="--transparent-".concat(e.target.getAttribute("data-id6")),p="--transparentprimary-".concat(e.target.getAttribute("data-id9"));t(r={},l,e.target.value),t(r,c,e.target.value+95),t(r,s,e.target.value),t(r,d,e.target.value),t(r,i,e.target.value),t(r,y,e.target.value),t(r,u,e.target.value+95),t(r,n,e.target.value+20),t(r,m,e.target.value+20),t(r,p,e.target.value+20),o=r,a=document.querySelector(":root"),Object.keys(o).forEach((function(e){a.style.setProperty(e,o[e])}))}))}))}!function(){"use strict";o(document.querySelectorAll("input.color-primary-light")),o(document.querySelectorAll("input.color-primary-dark")),o(document.querySelectorAll("input.color-primary-transparent")),o(document.querySelectorAll("input.color-bg-transparent")),function(){if(localStorage.sashprimaryColor){var e,r,t;document.querySelector("html").style.setProperty("--primary-bg-color",localStorage.sashprimaryColor),document.querySelector("html").style.setProperty("--primary-bg-hover",localStorage.sashprimaryHoverColor),document.querySelector("html").style.setProperty("--primary-bg-border",localStorage.sashprimaryBorderColor),document.querySelector("html").style.setProperty("--primary-transparentcolor",localStorage.sashprimaryTransparent),null===(e=document.querySelector("body"))||void 0===e||e.classList.add("light-mode"),null===(r=document.querySelector("body"))||void 0===r||r.classList.remove("dark-mode"),null===(t=document.querySelector("body"))||void 0===t||t.classList.remove("transparent-mode"),$("#myonoffswitch3").prop("checked",!0),$("#myonoffswitch6").prop("checked",!0),$("#myonoffswitch1").prop("checked",!0)}if(localStorage.sashdarkPrimary){var o,a,l;document.querySelector("html").style.setProperty("--primary-bg-color",localStorage.sashdarkPrimary),document.querySelector("html").style.setProperty("--primary-bg-hover",localStorage.sashdarkPrimary),document.querySelector("html").style.setProperty("--primary-bg-border",localStorage.sashdarkPrimary),document.querySelector("html").style.setProperty("--dark-primary",localStorage.sashdarkPrimary),document.querySelector("html").style.setProperty("--darkprimary-transparentcolor",localStorage.sashdarkprimaryTransparent),null===(o=document.querySelector("body"))||void 0===o||o.classList.add("dark-mode"),null===(a=document.querySelector("body"))||void 0===a||a.classList.remove("light-mode"),null===(l=document.querySelector("body"))||void 0===l||l.classList.remove("transparent-mode"),$("#myonoffswitch2").prop("checked",!0)}if(localStorage.sashtransparentPrimary){var c,s,n;document.querySelector("html").style.setProperty("--primary-bg-color",localStorage.sashtransparentPrimary),document.querySelector("html").style.setProperty("--primary-bg-hover",localStorage.sashtransparentPrimary),document.querySelector("html").style.setProperty("--primary-bg-border",localStorage.sashtransparentPrimary),document.querySelector("html").style.setProperty("--transparent-primary",localStorage.sashtransparentPrimary),document.querySelector("html").style.setProperty("--transparentprimary-transparentcolor",localStorage.sashtransparentprimaryTransparent),null===(c=document.querySelector("body"))||void 0===c||c.classList.add("transparent-mode"),null===(s=document.querySelector("body"))||void 0===s||s.classList.remove("dark-mode"),null===(n=document.querySelector("body"))||void 0===n||n.classList.remove("light-mode"),$("#myonoffswitchTransparent").prop("checked",!0)}if(localStorage.sashtransparentBgImgPrimary){var m,d,i;document.querySelector("html").style.setProperty("--primary-bg-color",localStorage.sashtransparentBgImgPrimary),document.querySelector("html").style.setProperty("--primary-bg-hover",localStorage.sashtransparentBgImgPrimary),document.querySelector("html").style.setProperty("--primary-bg-border",localStorage.sashtransparentBgImgPrimary),document.querySelector("html").style.setProperty("--transparent-primary",localStorage.sashtransparentBgImgPrimary),document.querySelector("html").style.setProperty("--transparentprimary-transparentcolor",localStorage.sashtransparentBgImgprimaryTransparent),null===(m=document.querySelector("body"))||void 0===m||m.classList.add("transparent-mode"),null===(d=document.querySelector("body"))||void 0===d||d.classList.remove("dark-mode"),null===(i=document.querySelector("body"))||void 0===i||i.classList.remove("light-mode"),$("#myonoffswitchTransparent").prop("checked",!0)}localStorage.sashtransparentBgColor&&(document.querySelector("html").style.setProperty("--transparent-body",localStorage.sashtransparentBgColor),document.querySelector("html").style.setProperty("--transparent-mode",localStorage.sashtransparentThemeColor),document.querySelector("html").style.setProperty("--transparentprimary-transparentcolor",localStorage.sashtransparentprimaryTransparent),document.querySelector("body").classList.add("transparent-mode"),document.querySelector("body").classList.remove("dark-mode"),document.querySelector("body").classList.remove("light-mode"),$("#myonoffswitchTransparent").prop("checked",!0));if(localStorage.sashBgImage){var y,u,p,g;null===(y=document.querySelector("body"))||void 0===y||y.classList.add("transparent-mode");var h=localStorage.sashBgImage.split(" ")[0];null===(u=document.querySelector("body"))||void 0===u||u.classList.add(h),null===(p=document.querySelector("body"))||void 0===p||p.classList.remove("dark-mode"),null===(g=document.querySelector("body"))||void 0===g||g.classList.remove("light-mode"),$("#myonoffswitchTransparent").prop("checked",!0)}if(localStorage.sashlightMode){var S,v,f;null===(S=document.querySelector("body"))||void 0===S||S.classList.add("light-mode"),null===(v=document.querySelector("body"))||void 0===v||v.classList.remove("dark-mode"),null===(f=document.querySelector("body"))||void 0===f||f.classList.remove("transparent-mode"),$("#myonoffswitch1").prop("checked",!0),$("#myonoffswitch3").prop("checked",!0),$("#myonoffswitch6").prop("checked",!0)}if(localStorage.sashdarkMode){var b,q,P;null===(b=document.querySelector("body"))||void 0===b||b.classList.remove("light-mode"),null===(q=document.querySelector("body"))||void 0===q||q.classList.add("dark-mode"),null===(P=document.querySelector("body"))||void 0===P||P.classList.remove("transparent-mode"),$("#myonoffswitch2").prop("checked",!0),$("#myonoffswitch5").prop("checked",!0),$("#myonoffswitch8").prop("checked",!0)}if(localStorage.sashtransparentMode){var k,L,I;null===(k=document.querySelector("body"))||void 0===k||k.classList.remove("light-mode"),null===(L=document.querySelector("body"))||void 0===L||L.classList.remove("dark-mode"),null===(I=document.querySelector("body"))||void 0===I||I.classList.add("transparent-mode"),$("#myonoffswitchTransparent").prop("checked",!0),$("#myonoffswitch3").prop("checked",!1),$("#myonoffswitch6").prop("checked",!1),$("#myonoffswitch5").prop("checked",!1),$("#myonoffswitch8").prop("checked",!1)}localStorage.sashhorizontal&&document.querySelector("body").classList.add("horizontal");localStorage.sashhorizontalHover&&document.querySelector("body").classList.add("horizontal-hover");localStorage.sashrtl&&document.querySelector("body").classList.add("rtl")}(),$("#myonoffswitch1").on("click",(function(){var e,r,t,o,a,l;null===(e=document.querySelector("body"))||void 0===e||e.classList.remove("dark-mode"),null===(r=document.querySelector("body"))||void 0===r||r.classList.remove("transparent-mode"),null===(t=document.querySelector("body"))||void 0===t||t.classList.remove("bg-img1"),null===(o=document.querySelector("body"))||void 0===o||o.classList.remove("bg-img2"),null===(a=document.querySelector("body"))||void 0===a||a.classList.remove("bg-img3"),null===(l=document.querySelector("body"))||void 0===l||l.classList.remove("bg-img4"),localStorage.removeItem("sashBgImage"),$("#myonoffswitch1").prop("checked",!0),localStorage.setItem("sashlightMode",!0),localStorage.removeItem("sashdarkMode"),localStorage.removeItem("sashtransparentMode")})),$("#myonoffswitch2").on("click",(function(){var e,r,t,o,a,l;null===(e=document.querySelector("body"))||void 0===e||e.classList.remove("light-mode"),null===(r=document.querySelector("body"))||void 0===r||r.classList.remove("transparent-mode"),null===(t=document.querySelector("body"))||void 0===t||t.classList.remove("bg-img1"),null===(o=document.querySelector("body"))||void 0===o||o.classList.remove("bg-img2"),null===(a=document.querySelector("body"))||void 0===a||a.classList.remove("bg-img3"),null===(l=document.querySelector("body"))||void 0===l||l.classList.remove("bg-img4"),localStorage.setItem("sashdarkMode",!0),localStorage.removeItem("sashlightMode"),localStorage.removeItem("sashtransparentMode"),localStorage.removeItem("sashBgImage"),$("#myonoffswitch2").prop("checked",!0)})),$("#myonoffswitchTransparent").on("click",(function(){var e,r,t,o,a,l;null===(e=document.querySelector("body"))||void 0===e||e.classList.remove("dark-mode"),null===(r=document.querySelector("body"))||void 0===r||r.classList.remove("light-mode"),null===(t=document.querySelector("body"))||void 0===t||t.classList.remove("bg-img1"),null===(o=document.querySelector("body"))||void 0===o||o.classList.remove("bg-img2"),null===(a=document.querySelector("body"))||void 0===a||a.classList.remove("bg-img3"),null===(l=document.querySelector("body"))||void 0===l||l.classList.remove("bg-img4"),localStorage.removeItem("sashBgImage"),$("#myonoffswitchTransparent").prop("checked",!0),localStorage.setItem("sashtransparentMode",!0),localStorage.removeItem("sashlightMode"),localStorage.removeItem("sashdarkMode")}))}();var a,l=function(e){return parseInt(e.repeat(2/e.length),16)};function c(r,t){"use strict";if(!function(e){return/^#([A-Fa-f0-9]{3,4}){1,2}$/.test(e)}(r))return null;var o=Math.floor((r.length-1)/3),a=function(e,r){return e.match(new RegExp(".{".concat(r,"}"),"g"))}(r.slice(1),o),c=e(a.map(l),4),s=c[0],n=c[1],m=c[2],d=c[3];return"rgba(".concat(s,", ").concat(n,", ").concat(m,", ").concat(function(e,r){return void 0!==e?e/255:"number"!=typeof r||r<0||r>1?1:r}(d,t),")")}function s(){"use strict";var e=getComputedStyle(document.documentElement).getPropertyValue("--primary-bg-color").trim();a=localStorage.getItem("sashprimaryColor")||localStorage.getItem("sashdarkPrimary")||localStorage.getItem("sashtransparentPrimary")||localStorage.getItem("sashtransparentBgImgPrimary")||e,localStorage.getItem("sashprimaryColor")||localStorage.getItem("sashdarkPrimary")||localStorage.getItem("sashtransparentPrimary")||localStorage.getItem("sashtransparentBgImgPrimary")||"#05c3fb",localStorage.getItem("sashprimaryColor")||localStorage.getItem("sashdarkPrimary")||localStorage.getItem("sashtransparentPrimary")||localStorage.getItem("sashtransparentBgImgPrimary")||null,localStorage.getItem("sashprimaryColor")||localStorage.getItem("sashdarkPrimary")||localStorage.getItem("sashtransparentPrimary")||localStorage.getItem("sashtransparentBgImgPrimary")||null,null!==document.querySelector("#transactions")&&index();var r=c(a||"#6c5ffc",.1);document.querySelector("html").style.setProperty("--primary01",r);var t=c(a||"#6c5ffc",.2);document.querySelector("html").style.setProperty("--primary02",t);var o=c(a||"#6c5ffc",.3);document.querySelector("html").style.setProperty("--primary03",o);var l=c(a||"#6c5ffc",.6);document.querySelector("html").style.setProperty("--primary06",l);var s=c(a||"#6c5ffc",.9);document.querySelector("html").style.setProperty("--primary09",s);var n=c(a||"#6c5ffc",.05);document.querySelector("html").style.setProperty("--primary005",n)}s()})();