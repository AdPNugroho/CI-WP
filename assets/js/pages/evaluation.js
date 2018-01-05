$(document).ready(function(){
    loadTable()
});
function loadTable(){
    $('#theadEvaluation').empty();
    $('#tbodyEvaluation').empty();
    $.post('evaluation/data',function(data){
        console.log(data);
        var alternative = data.alternative;
        var criteria = data.criteria;
        var evaluation = data.evaluation;
        var header;
        var body;
        header += "<tr><td>Name</td>";
        if(Object.keys(evaluation).length>0){
            $.each(criteria,function(i,v){
                header += "<td><center>"+v.nama_kriteria+"</center></td>";
            });
            header += "<td>Action</td>";
            $.each(alternative,function(iAlternative,vAlternative){
                body = "";
                body += "<tr><td>"+vAlternative.nama_alternatif+"</td>";
                $.each(criteria,function(iCriteria,vCriteria){
                    body += "<td><center>"+evaluation[vCriteria.id_kriteria][vAlternative.id_alternatif]+"</center></td>";
                });
                body += "<td><button class='btn btn-primary btn-xs btnEdit' data-id="+vAlternative.id_alternatif+"><span class='fa fa-cogs'></span></button></td>";
                body += "</tr>";
                $('#tbodyEvaluation').append(body);    
            });
        }else{
            $('#tbodyEvaluation').append("<tr><td>No data available</td></tr>");
        }
        header += "</tr>";
        $('#theadEvaluation').append(header);
    },"json");
}
$(document).on('click','.btnEdit',function(){
    var id = $(this).attr('data-id');
    $.post('evaluation/get',{id_alternatif:id},function(data){
        console.log(data);
        var no = 1;
        $('#idAlternativeTable').val(data[0].id_alternatif);
        $('#nameAlternativeTable').val(data[0].nama_alternatif);
        console.log(data[0].id_alternatif);
        $('#bodyModalEvaluation').empty();
        $.each(data,function(i,v){
            $('#bodyModalEvaluation').append("<tr><td>"+no+"</td><td>"+v.nama_kriteria+"</td><td><input type='hidden' name='id_evaluasi[]' value='"+v.id_evaluasi+"'><input type='number' name='nilai_evaluasi[]' class='form-control input-sm' value='"+v.nilai_evaluasi+"'></td></tr>");
            no++;
        });
    },"json").done(function(){
        $('#modal-edit-evaluation').modal('show');
    });
});
$(document).on('click','#save',function(){
    var data = $('#formEvaluationEdit').serializeArray();
    $.post('evaluation/update',data,function(data){
        $.toast({
            heading: 'Information',
            text: data.message,
            icon: data.status,
            loader: true,
            loaderBg: '#9EC600'
        });
    },"json").done(function(){
        $('#modal-edit-evaluation').modal('hide');
        loadTable()
    });
});