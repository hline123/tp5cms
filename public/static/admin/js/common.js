// 表格数据的删除操作
function del(obj, id, url) {
    bootbox.confirm({
        message: '确认要删除吗？',
        buttons: {
            confirm: {
                label: '确定',
                className: 'btn-success'
            },
            cancel: {
                label: '取消',
                className: 'btn-danger'
            }
        },
        callback: function () {
            $.ajax({
                url: url,
                type: "GET",
                data: {id:id},
                dataType: 'json',
                success: function (res) {
                    if (res == 1) {
                        bootbox.alert({
                            size: "small",
                            backdrop: true,
                            title: "信息提示",
                            message: "删除成功"
                        });
                        $(obj).parents('tr').remove();
                    }else {
                        console.log('error');
                    }
                }
            })
        }
    });
}