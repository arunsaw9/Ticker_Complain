$(document).ready(function(){

  //===================code for front page ==============================

    $("#assets_location").change(function () {
            
        var assets_location = $('#assets_location').val();
        
        $('#fnivel').prop("disabled", false);

        $('#fnivel').empty();

        $('#fnivel').append('<option hidden >Select Services</option>'+'<option value="1">Production</option>'+
                              '<option value="2">Drilling</option>');
        //alert('Please select Services.');
    });

    $("#fnivel").change(function () {
        var selected_option = $('#fnivel').val();
        var assets_location = $('#assets_location').val();

        var id1 = $('#assets_location').val();
        var id2 = $('#fnivel').val();

        //alert('fdf' + id1 + 'and'+ id2);

        if( selected_option !="" ) {

            var token = $('meta[name="csrf-token"]').attr('content');
                var url = 'getlocation/' + id1 +'&'+ id2;    
                $.ajax( {
                    method:'POST',
                    header:{
                      'X-CSRF-TOKEN': token
                    },
                    url: url,
                    data:{
                      _token: token,
                      dataType: 'json', 
                      contentType:'application/json',
                      id1: assets_location,
                      id2: selected_option
                    }        
                })
                .done(function(data) {
                    //alert('success'+ data[0].location);

                    $('#sublocation').empty();
                    for (var i in data) {
                       //console.log(data[i],i)
                       $('#sublocation').append("<option value='" +data[i].location+ "'>"+data[i].location+"</option>");
                    }

                })
                .fail(function() {
                    alert("error");
                });

        }

    });



//===================code for complain status page ==============================

    $("#assets").change(function () {
        $('#services').prop("disabled", false);
        $('#services').empty();
        $('#services').append('<option hidden >Select Services</option>'+'<option value="1">Production</option>'+
                              '<option value="2">Drilling</option>');
        $('#location').empty();
    });

    $("#services").change(function () {
        $('#location').empty();
        $('#location').prop("disabled", false);
        $('#location').append('<option>Select Location<option>');
    });

    $("#services").change(function () {
        var services = $('#services').val();
        var assets = $('#assets').val();

        var id1 = $('#assets').val();
        var id2 = $('#services').val();

        if( services !="" ) {
            var token = $('meta[name="csrf-token"]').attr('content');
                var url = 'statusajax/' + id1 +'&'+ id2;    
                $.ajax( {
                    method:'POST',
                    header:{
                      'X-CSRF-TOKEN': token
                    },
                    url: url,
                    data:{
                      _token: token,
                      dataType: 'json', 
                      contentType:'application/json',
                      id1: assets,
                      id2: services
                    }        
                })
                .done(function(data) {
                    if(Object.keys(data).length === 0){
                        alert('There is no location found. Check your information.');
                    }

                    for (var i in data) {
                       //$('#location').empty()
                       $('#location').append('<option value="'+data[i].location+'">'+data[i].location+'</option>');
                    }
                })
                .fail(function() {
                    alert("error");
                });

        }
    });





    $("#location").change(function () {
        
        var assets = $('#assets').val();
        var location = $('#location').val();
        if ( $('#services').val() == 1) {
            var services = 'Production';
            var id2 = 'Production';
        }else{
            var services = 'Drilling';
            var id2 = 'Drilling';
        }
        var id1 = $('#assets').val();
        var id3 = $('#location').val();
        //alert(id1 +'&'+ id2 +'&'+ id3);

        if( id3 !="" ) {
            var token = $('meta[name="csrf-token"]').attr('content');
            var url = 'search/' + id1 +'&'+ id2 +'&'+ id3;  
            $.ajax( {
                method:'POST',
                header:{
                  'X-CSRF-TOKEN': token
                },
                url: url,
                data:{
                  _token: token,
                  dataType: 'json', 
                  contentType:'application/json',
                  id1: assets,
                  id2: services,    
                  id3: location,    
                }        
            })
            .done(function(data) {
                console.log(data);
                if(Object.keys(data).length === 0){
                    alert('No data found. Check your information.');
                    var table = $('#example').DataTable();
                    table.clear().draw();
                }else{
                    $('#example').DataTable({
                         "processing": true,
                         "info": true,
                         "stateSave": true,
                         data: data,
                         "bDestroy": true,
                         "columns": [
                             { "data": "name" },
                             { "data": "email" },
                             { "data": "mobile" },
                             { "data": "project_type" },
                             { "data": "assets.asset" },
                             { "data": "sub_location" },
                             {
                                 "data": "Inquiry", "bSearchable": false, "bSortable": false, "sWidth": "40px",
                                 "data": function (data) {
                                     return '<button class="btn btn-success" type="button">' + data.status + '</button>'
                                 }
                             }
                         ]
                     });   
                }
                    
                
            })
            .fail(function() {
                alert("error");
            });
        }
    });

});


