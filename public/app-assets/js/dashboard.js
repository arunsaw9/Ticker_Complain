$(document).ready(function () {
    $(".select2").change(function () { 
        var selectid = $(this).val();
        alert(selectid);
        var html = '';
        if(selectid == 'Regular Workforce'){
            html += '<div id="inputFormRow">';
            html += '<div class="input-group " style="margin: 10px 0;">';
                html += '<input type="text" name="rwf_officers_actual" class="form-control m-input" placeholder="officers" autocomplete="off">';
            html += '</div>';
            html += '<div class="input-group " style="margin: 10px 0;">';
                html += '<input type="text" name="rwf_staff_actual" class="form-control m-input" placeholder="staff" autocomplete="off">';
            html += '</div>';
            html += '<div class="input-group " style="margin: 10px 0;">';
                html += '<input type="text" name="rwf_contractors_actual" class="form-control m-input" placeholder="contractors" autocomplete="off">';
            html += '</div>';
        html += '</div>';
        }
        else if(selectid == 'Hiring Target Achievement'){
            html += '<div id="inputFormRow">';
                html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="achievement_actual" class="form-control m-input" placeholder="actual" autocomplete="off">';
                html += '</div>';
                 html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="achievement_target" class="form-control m-input" placeholder="target" autocomplete="off">';
                html += '</div>';
            html += '</div>';
        }
        else if(selectid == 'MoU Target'){
            html += '<div id="inputFormRow">';
                html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="PAR_Completion" class="form-control m-input" placeholder="PAR Completion" autocomplete="off">';
                html += '</div>';
                html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="Training_in_CoE" class="form-control m-input" placeholder="Training in CoE" autocomplete="off">';
                html += '</div>';
            html += '</div>';
        }
        else if(selectid == 'Secondary Workforce'){
            html += '<div id="inputFormRow">';
                html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="Tenure_Based" class="form-control m-input" placeholder="Tenure Based" autocomplete="off">';
                html += '</div>';
                 html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="Term_Based" class="form-control m-input" placeholder="Term Based" autocomplete="off">';
                html += '</div>';

                html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="Contract_Workers" class="form-control m-input" placeholder="Contract Workers" autocomplete="off">';
                html += '</div>';
                 html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="Casual_Contingent" class="form-control m-input" placeholder="Casual/Contingent" autocomplete="off">';
                html += '</div>';
            html += '</div>';
        }
        else if(selectid == 'CSR Target Achievement'){
            html += '<div id="inputFormRow">';
                html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="achievement_actual" class="form-control m-input" placeholder="actual" autocomplete="off">';
                html += '</div>';
                 html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="achievement_target" class="form-control m-input" placeholder="target" autocomplete="off">';
                html += '</div>';
            html += '</div>';
        }
        else if(selectid == 'NAPS Target'){
            html += '<div id="inputFormRow">';
                html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="NPS_actual" class="form-control m-input" placeholder="actual" autocomplete="off">';
                html += '</div>';
                 html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="NPS_target" class="form-control m-input" placeholder="target" autocomplete="off">';
                html += '</div>';
            html += '</div>';

        }else{
            html += '<div id="inputFormRow">';
                html += '<p style="margin-top: 12px;"> Traning Days </p>';
                html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="TraningDays_actual" class="form-control m-input" placeholder="actual" autocomplete="off">';
                html += '</div>';
                 html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="TraningDays_target" class="form-control m-input" placeholder="target" autocomplete="off">';
                html += '</div>';

                html += '<p> Participants </p>';
                html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="Participants_actual" class="form-control m-input" placeholder="actual" autocomplete="off">';
                html += '</div>';
                 html += '<div class="input-group " style="margin: 10px 0;">';
                    html += '<input type="text" name="Participants_target" class="form-control m-input" placeholder="target" autocomplete="off">';
                html += '</div>';
            html += '</div>';
        }
        

        $('#newRow').empty();
        $('#newRow').append(html);

    });
});