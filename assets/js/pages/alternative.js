$(document).ready(function(){
    loadData()
});
$(document).on('click','#add',function(){
    $('#addAlternative').trigger('reset');
});
function loadData(){
    $.post("alternative/data",function(data){
        $('#tbodyAlternative').empty();
        if(data.length>0){
            $.each(data,function(i,v){
                $('#tbodyAlternative').append('<tr><td>'+v.id_alternatif+'</td><td>'+v.nama_alternatif+'</td><td><button data-id="'+v.id_alternatif+'" class="editBtn btn btn-primary btn-xs"><span class="fa fa-gears"></span></button><button data-id="'+v.id_alternatif+'" class="deleteBtn btn btn-danger btn-xs"><span class="fa fa-trash"></span></button></td></tr>');
            });
        }else{
            $('#tbodyAlternative').append('<tr><td colspan="3"><center>No data available</center></td></tr>');
        }
    },"json");
}
$(document).on('click','#save',function(){
    var data = $('#addAlternative').serializeArray();
    $.post("alternative/save",data,function(data){
        $.toast({
            heading: 'Information',
            text: data.message,
            icon: data.status,
            loader: true,
            loaderBg: '#9EC600'
        });
    },"json").done(function(){
        loadData()
        $('#modal-add-alternative').modal('hide');
    });
});
$(document).on('click','.editBtn',function(){
    var id = $(this).attr('data-id');
    $.post("alternative/get",{id_alternatif:id},function(data){
        $('#idAlternative').val(data.id_alternatif);
        $('#alternativeName').val(data.nama_alternatif);
    },"json").done(function(){
        $('#modal-edit-alternative').modal('show');
    });
});
$(document).on('click','.deleteBtn',function(){
    var id = $(this).attr('data-id');
    $.post("alternative/delete",{id_alternatif:id},function(data){
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
    var data = $('#editAlternative').serializeArray();
    $.post('alternative/update',data,function(data){
        $.toast({
            heading: 'Information',
            text: data.message,
            icon: data.status,
            loader: true,
            loaderBg: '#9EC600'
        });
    },"json").done(function(){
        loadData()
        $('#modal-edit-alternative').modal('hide');
    });
});