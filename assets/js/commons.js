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

function confirmModal(opts){
    var $modal = $('div#confirm-modal');
    $modal.find('div.modal-body').text(opts.message);
    $modal.modal('show');
    if(opts.hasOwnProperty('onOk')){
        $modal.find('button.ok').click(opts.onOk);
    }
    if(opts.hasOwnProperty('onCancel')){
        $modal.find('button.cancel').click(opts.onCancel);
    }
}

(function($){
    $(document).ready(function(){
        //$('a.ajax-form-modal').click(function(){
        //    ajaxModal($(this).data('content-url'));
        //
        //});
    })
})($ || jQuery);