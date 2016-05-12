/**
 * Created by Administrator on 2016/5/2.
 */
function resetForm(obj){
    $(obj.form).find(":input").not(":button,:submit,:reset,input:hidden").val("").removeAttr("checked").find('option').removeAttr("selected");
}
function  refreshSelectbox(){
    // SelectBoxIt Dropdown replacement
    if($.isFunction($.fn.selectBoxIt))
    {
        $("select.selectboxit").each(function(i, el)
        {
            var $this = $(el),
                opts = {
                    showFirstOption: attrDefault($this, 'first-option', true),
                    'native': attrDefault($this, 'native', false),
                    defaultText: attrDefault($this, 'text', ''),
                };

            $this.addClass('visible');
            $this.selectBoxIt(opts);
        });
    }
}
function refreshFormUI(){
    refreshSelectbox();
    replaceCheckboxes();
}

function ajaxModal(url){
    var $modal = $('div#ajax-modal');
    $.get(url,function(resp){
        $modal.find('div.modal-content').html(resp);
        refreshFormUI();
        $modal.modal('show', {backdrop: 'static'});
    },'html');
}


(function($){
    $(document).ready(function(){
        $('a.ajax-form-modal').click(function(){
            ajaxModal($(this).data('content-url'));

        });
    })
})($ || jQuery);