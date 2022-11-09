(()=>{function e(t){return e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e(t)}!function(t){"use strict";t(window).on("load",(function(e){t("#global-loader").fadeOut("slow")})),t(document).on("click","a[data-theme]",(function(){t("head link#theme").attr("href",t(this).data("theme")),t(this).toggleClass("active").siblings().removeClass("active")})),t(document).on("click",".fullscreen-button",(function(){t(".fullscreen-button").addClass("fullscreen-button"),void 0!==document.fullScreenElement&&null===document.fullScreenElement||void 0!==document.msFullscreenElement&&null===document.msFullscreenElement||void 0!==document.mozFullScreen&&!document.mozFullScreen||void 0!==document.webkitIsFullScreen&&!document.webkitIsFullScreen?document.documentElement.requestFullScreen?document.documentElement.requestFullScreen():document.documentElement.mozRequestFullScreen?document.documentElement.mozRequestFullScreen():document.documentElement.webkitRequestFullScreen?document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT):document.documentElement.msRequestFullscreen&&document.documentElement.msRequestFullscreen():(t("html").removeClass("fullscreen-button"),document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen?document.webkitCancelFullScreen():document.msExitFullscreen&&document.msExitFullscreen())})),t(window).on("scroll",(function(e){t(this).scrollTop()>0?t("#back-to-top").fadeIn("slow"):t("#back-to-top").fadeOut("slow")})),t(document).on("click","#back-to-top",(function(e){return t("html, body").animate({scrollTop:0},0),!1})),t(".cover-image").each((function(){var o=t(this).attr("data-bs-image-src");"undefined"!==e(o)&&!1!==o&&t(this).css("background","url("+o+") center center")})),t(".add").on("click",(function(){var e=t(this).closest("div").find(".qty"),o=parseInt(e.val());isNaN(o)||e.val(o+1)})),t(".minus").on("click",(function(){var e=t(this).closest("div").find(".qty"),o=parseInt(e.val());!isNaN(o)&&o>0&&e.val(o-1)})),t(".chart-circle").length&&t(".chart-circle").each((function(){var e=t(this);e.circleProgress({fill:{color:e.attr("data-bs-color")},size:e.height(),startAngle:-Math.PI/4*2,emptyFill:"#edf0f5",lineCap:"round"})})),t(".modal-effect").on("click",(function(e){e.preventDefault();var o=t(this).attr("data-bs-effect");t("#modaldemo8").addClass(o)})),t("#modaldemo8").on("hidden.bs.modal",(function(e){t(this).removeClass((function(e,t){return(t.match(/(^|\s)effect-\S+/g)||[]).join(" ")}))}));var o="div.card";[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map((function(e){return new bootstrap.Tooltip(e)})),[].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map((function(e){return new bootstrap.Popover(e)}));t(document).on("click",(function(e){t('[data-toggle="popover"],[data-original-title]').each((function(){t(this).is(e.target)||0!==t(this).has(e.target).length||0!==t(".popover").has(e.target).length||(((t(this).popover("hide").data("bs.popover")||{}).inState||{}).click=!1)}))}));[].slice.call(document.querySelectorAll(".toast")).map((function(e){return new bootstrap.Toast(e)}));if(t(document).on("click","#liveToastBtn",(function(){t(".toast").toast("show")})),t(document).on("click",'[data-bs-toggle="card-remove"]',(function(e){return t(this).closest(o).remove(),e.preventDefault(),!1})),t(document).on("click",'[data-bs-toggle="card-collapse"]',(function(e){return t(this).closest(o).toggleClass("card-collapsed"),e.preventDefault(),!1})),t(document).on("click",'[data-bs-toggle="card-fullscreen"]',(function(e){return t(this).closest(o).toggleClass("card-fullscreen").removeClass("card-collapsed"),e.preventDefault(),!1})),t(document).on("change",".file-browserinput",(function(){var e=t(this),o=e.get(0).files?e.get(0).files.length:1,n=e.val().replace(/\\/g,"/").replace(/.*\//,"");e.trigger("fileselect",[o,n])})),t(".file-browserinput").on("fileselect",(function(e,o,n){var l=t(this).parents(".input-group").find(":text"),s=o>1?o+" files selected":n;l.length?l.val(s):s&&alert(s)})),t(document).on("click",'[data-bs-toggle="collapse"]',(function(){t(this).toggleClass("active").siblings().removeClass("active")})),t(".clickable-row").on("click",(function(){window.location=t(this).data("href")})),t(".layout-setting").on("click",(function(e){document.querySelector("body").classList.contains("dark-mode")?(t("body").removeClass("dark-mode"),t("body").addClass("light-mode"),localStorage.setItem("sashlightMode",!0),localStorage.removeItem("sashtransparentMode"),localStorage.removeItem("sashdarkMode")):(t("body").addClass("dark-mode"),t("body").removeClass("light-mode"),t("body").removeClass("transparent-mode"),localStorage.setItem("sashdarkMode",!0),localStorage.removeItem("sashlightMode"),localStorage.removeItem("sashtransparentMode"))})),t("body").hasClass("rtl")){t("body").addClass("rtl"),t("#slide-left").removeClass("d-none"),t("#slide-right").removeClass("d-none"),t("html[lang=en]").attr("dir","rtl"),t("body").removeClass("ltr"),t("head link#style").attr("href",t(this)),document.getElementById("style").setAttribute("href","../assets/plugins/bootstrap/css/bootstrap.rtl.min.css");var n=t(".owl-carousel");t.each(n,(function(e,o){var n=t(o).data("owl.carousel");n.settings.rtl=!0,n.options.rtl=!0,t(o).trigger("refresh.owl.carousel")}))}if(t("body").hasClass("horizontal")){var l;if(document.querySelector(".login-img")||(ActiveSubmenu(),checkHoriMenu(),responsive()),window.innerWidth>=992){document.querySelectorAll(".side-menu li").forEach((function(e,t){e.classList.remove("is-expanded")}));var s=300;t("[data-bs-toggle='sub-slide']").parents("ul").find("ul:visible").slideUp(s).removeClass("open"),t("[data-bs-toggle='sub-slide2']").parents("ul").find("ul:visible").slideUp(s).removeClass("open")}t("body").addClass("horizontal"),t(".main-content").addClass("hor-content"),t(".main-content").removeClass("app-content"),t(".main-container").addClass("container"),t(".main-container").removeClass("container-fluid"),t(".app-header").addClass("hor-header"),t(".hor-header").removeClass("app-header"),t(".app-sidebar").addClass("horizontal-main"),t(".main-sidemenu").addClass("container"),t("body").removeClass("sidebar-mini"),t("body").removeClass("sidenav-toggled"),t("body").removeClass("horizontal-hover"),t("body").removeClass("default-menu"),t("body").removeClass("icontext-menu"),t("body").removeClass("icon-overlay"),t("body").removeClass("closed-leftmenu"),t("body").removeClass("hover-submenu"),t("body").removeClass("hover-submenu1"),t("#slide-left").removeClass("d-none"),t("#slide-right").removeClass("d-none"),null===(l=document.querySelector(".horizontal .side-menu"))||void 0===l||l.classList.add("flex-nowrap")}if(document.querySelector("body").classList.contains("light-mode")&&(t("#myonoffswitch8").prop("checked",!0),t("#myonoffswitch12").prop("checked",!0)),t("body").hasClass("horizontal-hover")){var a;if(document.querySelector(".login-img")||(checkHoriMenu(),responsive()),window.innerWidth>=992){document.querySelectorAll(".side-menu li").forEach((function(e,t){e.classList.remove("is-expanded")}));s=300;t("[data-bs-toggle='sub-slide']").parents("ul").find("ul:visible").slideUp(s).removeClass("open"),t("[data-bs-toggle='sub-slide2']").parents("ul").find("ul:visible").slideUp(s).removeClass("open")}t("body").addClass("horizontal-hover"),t("body").addClass("horizontal"),t("#slide-left").addClass("d-none"),t("#slide-right").addClass("d-none"),null===(a=document.querySelector(".horizontal .side-menu"))||void 0===a||a.classList.add("flex-nowrap"),t(".main-content").addClass("hor-content"),t(".main-content").removeClass("app-content"),t(".main-container").addClass("container"),t(".main-container").removeClass("container-fluid"),t(".app-header").addClass("hor-header"),t(".app-header").removeClass("app-header"),t(".app-sidebar").addClass("horizontal-main"),t(".main-sidemenu").addClass("container"),t("body").removeClass("sidebar-mini"),t("body").removeClass("sidenav-toggled"),t("body").removeClass("default-menu"),t("body").removeClass("icontext-menu"),t("body").removeClass("icon-overlay"),t("body").removeClass("closed-leftmenu"),t("body").removeClass("hover-submenu"),t("body").removeClass("hover-submenu1")}}(jQuery),function(){"use strict";var e=document.querySelectorAll(".reply a"),t=document.createElement("div");t.setAttribute("class","comment mt-5 d-grid");var o=document.createElement("textarea");o.setAttribute("class","form-control"),o.setAttribute("rows","5"),o.innerText="Your Comment";var n=document.createElement("button");n.setAttribute("class","btn btn-danger"),n.innerText="Cancel";var l=document.createElement("div");l.setAttribute("class","btn-list ms-auto mt-2");var s=document.createElement("button");s.setAttribute("class","btn btn-success ms-3"),s.innerText="Submit",t.append(o),t.append(l),l.append(n),l.append(s),e.forEach((function(e,o){e.addEventListener("click",(function(){$(e).parent().append(t),n.addEventListener("click",(function(){t.remove()}))}))}))}(),$(".off-canvas").on("click",(function(){$("body").addClass("overflow-y-scroll"),$("body").addClass("pe-0")}))})();