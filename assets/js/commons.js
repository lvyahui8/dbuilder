/**
 * Created by Administrator on 2016/5/2.
 */
function resetForm(obj){
    $(obj.form).find(":input").not(":button,:submit,:reset,input:hidden").val("").removeAttr("checked").find('option').removeAttr("selected");
}


function refreshFormUI(){
    refreshSelectbox();
    replaceCheckboxes();
    refreshTagsInput();
    refreshPopAndTips();
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
        //$('a.ajax-form-modal').click(function(){
        //    ajaxModal($(this).data('content-url'));
        //
        //});
    })
})($ || jQuery);