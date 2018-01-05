$(document).ready(function(){
    loadData()
});
$(document).on('click','#add',function(){
    $('#addCriteria').trigger('reset');
});
function loadData(){
    $.post("criteria/data",function(data){
        $('#tbodyCriteria').empty();
        if(data.length>0){
            $.each(data,function(i,v){
                $('#tbodyCriteria').append('<tr><td>'+v.id_kriteria+'</td><td>'+v.nama_kriteria+'</td><td>'+v.type_kriteria+'</td><td>'+v.nilai_kriteria+'</td><td><button data-id="'+v.id_kriteria+'" class="editBtn btn btn-primary btn-xs"><span class="fa fa-gears"></span></button><button data-id="'+v.id_kriteria+'" class="deleteBtn btn btn-danger btn-xs"><span class="fa fa-trash"></span></button></td></tr>');
            });
        }else{
            $('#tbodyCriteria').append('<tr><td colspan="4"><center>No data available</center></td></tr>');
        }
    },"json");
}
$(document).on('click','#save',function(){
    var data = $('#addCriteria').serializeArray();
    $.post("criteria/save",data,function(data){
        $.toast({
            heading: 'Information',
            text: data.message,
            icon: data.status,
            loader: true,
            loaderBg: '#9EC600'
        });
    },"json").done(function(){
        loadData()
        $('#modal-add-criteria').modal('hide');
    });
});
$(document).on('click','.editBtn',function(){
    var id = $(this).attr('data-id');
    $.post("criteria/get",{id_kriteria:id},function(data){
        $('#criteriaID').val(data.id_kriteria);
        $('#criteriaName').val(data.nama_kriteria);
        $('#typeCriteria').val(data.type_kriteria);
        $('#weightCriteria').val(data.nilai_kriteria);
    },"json").done(function(){
        $('#modal-edit-criteria').modal('show');
    });
});
$(document).on('click','.deleteBtn',function(){
    var id = $(this).attr('data-id');
    $.post("criteria/delete",{id_kriteria:id},function(data){
        $.toast({
            heading: 'Information',
            text: data.message,
            icon: data.status,
            loader: true,
            loaderBg: '#9EC600'
        });
    },"json").done(function(){
        loadData();
    });
});
$(document).on('click','#saveUpdate',function(){
    var data = $('#editCriteria').serializeArray();
    $.post('criteria/update',data,function(data){
        $.toast({
            heading: 'Information',
            text: data.message,
            icon: data.status,
            loader: true,
            loaderBg: '#9EC600'
        });
    },"json").done(function(){
        loadData()
        $('#modal-edit-criteria').modal('hide');
    });
});