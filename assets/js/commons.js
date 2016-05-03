/**
 * Created by Administrator on 2016/5/2.
 */
function resetForm(obj){
    $(obj.form).find(":input").not(":button,:submit,:reset,:hidden").val("").removeAttr("checked").removeAttr("selected");
}