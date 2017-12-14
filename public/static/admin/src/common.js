/**
 * ajax 列表删除数据
 * @param url 请求地址
 * @param id 当前数据的id
 */
function confirm (url, id) {
    bootbox.confirm({
        title: "系统提示！",
        message: "确认要删除吗？",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> 取消',
                className: 'btn-danger'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> 确定',
                className: 'btn-success'
            }
        },
        backdrop: true,
        callback: function (result) {
            if (result) {
                $.get(url, {id: id}, function (res) {
                    if (res) {
                        layer.msg('操作成功', {
                            time: 2000,
                            icon: 6,
                            offset: '80px',
                            anim: 1
                        })
                    }else {
                        layer.msg('操作失败', {
                            time: 2000,
                            icon: 5,
                            offset: '80px',
                            anim: 1
                        })
                    }
                })
            }
        }
    });
}

/**
 * ajax 动态改变状态
 * @param obj 当前元素
 * @param url 请求地址
 * @param id 当前数据的id
 */
function getChangeStatus(obj, url, id) {
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        data: {id: id},
        success: function (res) {
            if (res == 1) {
                $(obj).removeClass('label-warning').addClass('label-danger').html('禁用');
            }else {
                $(obj).removeClass('label-danger').addClass('label-warning').html('启用');
            }
        }
    })
}




























