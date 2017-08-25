!function(a){"use strict";"function"==typeof define&&define.amd?define(["jquery","tmpl","./jquery.fileupload-image","./jquery.fileupload-audio","./jquery.fileupload-video","./jquery.fileupload-validate"],a):a(window.jQuery,window.tmpl)}(function(a,b){"use strict";a.blueimp.fileupload.prototype._specialOptions.push("filesContainer","uploadTemplateId","downloadTemplateId"),a.widget("blueimp.fileupload",a.blueimp.fileupload,{options:{autoUpload:!1,uploadTemplateId:"template-upload",downloadTemplateId:"template-download",filesContainer:void 0,prependFiles:!1,dataType:"json",messages:{unknownError:"Unknown error"},getNumberOfFiles:function(){return this.filesContainer.children().not(".processing").length},getFilesFromResponse:function(b){return b.result&&a.isArray(b.result.files)?b.result.files:[]},add:function(b,c){if(b.isDefaultPrevented())return!1;var d=a(this),e=d.data("blueimp-fileupload")||d.data("fileupload"),f=e.options;c.context=e._renderUpload(c.files).data("data",c).addClass("processing"),f.filesContainer[f.prependFiles?"prepend":"append"](c.context),e._forceReflow(c.context),e._transition(c.context),c.process(function(){return d.fileupload("process",c)}).always(function(){c.context.each(function(b){a(this).find(".size").text(e._formatFileSize(c.files[b].size))}).removeClass("processing"),e._renderPreviews(c)}).done(function(){c.context.find(".start").prop("disabled",!1),!1!==e._trigger("added",b,c)&&(f.autoUpload||c.autoUpload)&&!1!==c.autoUpload&&c.submit()}).fail(function(){c.files.error&&c.context.each(function(b){var d=c.files[b].error;d&&a(this).find(".error").text(d)})})},send:function(b,c){if(b.isDefaultPrevented())return!1;var d=a(this).data("blueimp-fileupload")||a(this).data("fileupload");return c.context&&c.dataType&&"iframe"===c.dataType.substr(0,6)&&c.context.find(".progress").addClass(!a.support.transition&&"progress-animated").attr("aria-valuenow",100).children().first().css("width","100%"),d._trigger("sent",b,c)},done:function(b,c){if(b.isDefaultPrevented())return!1;var d,e,f=a(this).data("blueimp-fileupload")||a(this).data("fileupload"),g=c.getFilesFromResponse||f.options.getFilesFromResponse,h=g(c);c.context?c.context.each(function(g){var i=h[g]||{error:"Empty file upload result"};e=f._addFinishedDeferreds(),f._transition(a(this)).done(function(){var g=a(this);d=f._renderDownload([i]).replaceAll(g),f._forceReflow(d),f._transition(d).done(function(){c.context=a(this),f._trigger("completed",b,c),f._trigger("finished",b,c),e.resolve()})})}):(d=f._renderDownload(h)[f.options.prependFiles?"prependTo":"appendTo"](f.options.filesContainer),f._forceReflow(d),e=f._addFinishedDeferreds(),f._transition(d).done(function(){c.context=a(this),f._trigger("completed",b,c),f._trigger("finished",b,c),e.resolve()}))},fail:function(b,c){if(b.isDefaultPrevented())return!1;var d,e,f=a(this).data("blueimp-fileupload")||a(this).data("fileupload");c.context?c.context.each(function(g){if("abort"!==c.errorThrown){var h=c.files[g];h.error=h.error||c.errorThrown||c.i18n("unknownError"),e=f._addFinishedDeferreds(),f._transition(a(this)).done(function(){var g=a(this);d=f._renderDownload([h]).replaceAll(g),f._forceReflow(d),f._transition(d).done(function(){c.context=a(this),f._trigger("failed",b,c),f._trigger("finished",b,c),e.resolve()})})}else e=f._addFinishedDeferreds(),f._transition(a(this)).done(function(){a(this).remove(),f._trigger("failed",b,c),f._trigger("finished",b,c),e.resolve()})}):"abort"!==c.errorThrown?(c.context=f._renderUpload(c.files)[f.options.prependFiles?"prependTo":"appendTo"](f.options.filesContainer).data("data",c),f._forceReflow(c.context),e=f._addFinishedDeferreds(),f._transition(c.context).done(function(){c.context=a(this),f._trigger("failed",b,c),f._trigger("finished",b,c),e.resolve()})):(f._trigger("failed",b,c),f._trigger("finished",b,c),f._addFinishedDeferreds().resolve())},progress:function(b,c){if(b.isDefaultPrevented())return!1;var d=Math.floor(c.loaded/c.total*100);c.context&&c.context.each(function(){a(this).find(".progress").attr("aria-valuenow",d).children().first().css("width",d+"%")})},progressall:function(b,c){if(b.isDefaultPrevented())return!1;var d=a(this),e=Math.floor(c.loaded/c.total*100),f=d.find(".fileupload-progress"),g=f.find(".progress-extended");g.length&&g.html((d.data("blueimp-fileupload")||d.data("fileupload"))._renderExtendedProgress(c)),f.find(".progress").attr("aria-valuenow",e).children().first().css("width",e+"%")},start:function(b){if(b.isDefaultPrevented())return!1;var c=a(this).data("blueimp-fileupload")||a(this).data("fileupload");c._resetFinishedDeferreds(),c._transition(a(this).find(".fileupload-progress")).done(function(){c._trigger("started",b)})},stop:function(b){if(b.isDefaultPrevented())return!1;var c=a(this).data("blueimp-fileupload")||a(this).data("fileupload"),d=c._addFinishedDeferreds();a.when.apply(a,c._getFinishedDeferreds()).done(function(){c._trigger("stopped",b)}),c._transition(a(this).find(".fileupload-progress")).done(function(){a(this).find(".progress").attr("aria-valuenow","0").children().first().css("width","0%"),a(this).find(".progress-extended").html("&nbsp;"),d.resolve()})},processstart:function(b){if(b.isDefaultPrevented())return!1;a(this).addClass("fileupload-processing")},processstop:function(b){if(b.isDefaultPrevented())return!1;a(this).removeClass("fileupload-processing")},destroy:function(b,c){if(b.isDefaultPrevented())return!1;var d=a(this).data("blueimp-fileupload")||a(this).data("fileupload"),e=function(){d._transition(c.context).done(function(){a(this).remove(),d._trigger("destroyed",b,c)})};c.url?(c.dataType=c.dataType||d.options.dataType,a.ajax(c).done(e).fail(function(){d._trigger("destroyfailed",b,c)})):e()}},_resetFinishedDeferreds:function(){this._finishedUploads=[]},_addFinishedDeferreds:function(b){return b||(b=a.Deferred()),this._finishedUploads.push(b),b},_getFinishedDeferreds:function(){return this._finishedUploads},_enableDragToDesktop:function(){var b=a(this),c=b.prop("href"),d=b.prop("download");b.bind("dragstart",function(a){try{a.originalEvent.dataTransfer.setData("DownloadURL",["application/octet-stream",d,c].join(":"))}catch(a){}})},_formatFileSize:function(a){return"number"!=typeof a?"":a>=1e9?(a/1e9).toFixed(2)+" GB":a>=1e6?(a/1e6).toFixed(2)+" MB":(a/1e3).toFixed(2)+" KB"},_formatBitrate:function(a){return"number"!=typeof a?"":a>=1e9?(a/1e9).toFixed(2)+" Gbit/s":a>=1e6?(a/1e6).toFixed(2)+" Mbit/s":a>=1e3?(a/1e3).toFixed(2)+" kbit/s":a.toFixed(2)+" bit/s"},_formatTime:function(a){var b=new Date(1e3*a),c=Math.floor(a/86400);return(c=c?c+"d ":"")+("0"+b.getUTCHours()).slice(-2)+":"+("0"+b.getUTCMinutes()).slice(-2)+":"+("0"+b.getUTCSeconds()).slice(-2)},_formatPercentage:function(a){return(100*a).toFixed(2)+" %"},_renderExtendedProgress:function(a){return this._formatBitrate(a.bitrate)+" | "+this._formatTime(8*(a.total-a.loaded)/a.bitrate)+" | "+this._formatPercentage(a.loaded/a.total)+" | "+this._formatFileSize(a.loaded)+" / "+this._formatFileSize(a.total)},_renderTemplate:function(b,c){if(!b)return a();var d=b({files:c,formatFileSize:this._formatFileSize,options:this.options});return d instanceof a?d:a(this.options.templatesContainer).html(d).children()},_renderPreviews:function(b){b.context.find(".preview").each(function(c,d){a(d).append(b.files[c].preview)})},_renderUpload:function(a){return this._renderTemplate(this.options.uploadTemplate,a)},_renderDownload:function(a){return this._renderTemplate(this.options.downloadTemplate,a).find("a[download]").each(this._enableDragToDesktop).end()},_startHandler:function(b){b.preventDefault();var c=a(b.currentTarget),d=c.closest(".template-upload"),e=d.data("data");c.prop("disabled",!0),e&&e.submit&&e.submit()},_cancelHandler:function(b){b.preventDefault();var c=a(b.currentTarget).closest(".template-upload,.template-download"),d=c.data("data")||{};d.context=d.context||c,d.abort?d.abort():(d.errorThrown="abort",this._trigger("fail",b,d))},_deleteHandler:function(b){b.preventDefault();var c=a(b.currentTarget);this._trigger("destroy",b,a.extend({context:c.closest(".template-download"),type:"DELETE"},c.data()))},_forceReflow:function(b){return a.support.transition&&b.length&&b[0].offsetWidth},_transition:function(b){var c=a.Deferred();return a.support.transition&&b.hasClass("fade")&&b.is(":visible")?b.bind(a.support.transition.end,function(d){d.target===b[0]&&(b.unbind(a.support.transition.end),c.resolveWith(b))}).toggleClass("in"):(b.toggleClass("in"),c.resolveWith(b)),c},_initButtonBarEventHandlers:function(){var b=this.element.find(".fileupload-buttonbar"),c=this.options.filesContainer;this._on(b.find(".start"),{click:function(a){a.preventDefault(),c.find(".start").click()}}),this._on(b.find(".cancel"),{click:function(a){a.preventDefault(),c.find(".cancel").click()}}),this._on(b.find(".delete"),{click:function(a){a.preventDefault(),c.find(".toggle:checked").closest(".template-download").find(".delete").click(),b.find(".toggle").prop("checked",!1)}}),this._on(b.find(".toggle"),{change:function(b){c.find(".toggle").prop("checked",a(b.currentTarget).is(":checked"))}})},_destroyButtonBarEventHandlers:function(){this._off(this.element.find(".fileupload-buttonbar").find(".start, .cancel, .delete"),"click"),this._off(this.element.find(".fileupload-buttonbar .toggle"),"change.")},_initEventHandlers:function(){this._super(),this._on(this.options.filesContainer,{"click .start":this._startHandler,"click .cancel":this._cancelHandler,"click .delete":this._deleteHandler}),this._initButtonBarEventHandlers()},_destroyEventHandlers:function(){this._destroyButtonBarEventHandlers(),this._off(this.options.filesContainer,"click"),this._super()},_enableFileInputButton:function(){this.element.find(".fileinput-button input").prop("disabled",!1).parent().removeClass("disabled")},_disableFileInputButton:function(){this.element.find(".fileinput-button input").prop("disabled",!0).parent().addClass("disabled")},_initTemplates:function(){var a=this.options;a.templatesContainer=this.document[0].createElement(a.filesContainer.prop("nodeName")),b&&(a.uploadTemplateId&&(a.uploadTemplate=b(a.uploadTemplateId)),a.downloadTemplateId&&(a.downloadTemplate=b(a.downloadTemplateId)))},_initFilesContainer:function(){var b=this.options;void 0===b.filesContainer?b.filesContainer=this.element.find(".files"):b.filesContainer instanceof a||(b.filesContainer=a(b.filesContainer))},_initSpecialOptions:function(){this._super(),this._initFilesContainer(),this._initTemplates()},_create:function(){this._super(),this._resetFinishedDeferreds(),a.support.fileInput||this._disableFileInputButton()},enable:function(){var a=!1;this.options.disabled&&(a=!0),this._super(),a&&(this.element.find("input, button").prop("disabled",!1),this._enableFileInputButton())},disable:function(){this.options.disabled||(this.element.find("input, button").prop("disabled",!0),this._disableFileInputButton()),this._super()}})});