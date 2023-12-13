var autoFill = new function () {
    var that = this;
    this.setData = function (alljobs_info) {
        if (!(alljobs_info && alljobs_info.data)) {
            return;
        }
        var edu_stage = $('#edu_stage').val();
        var edu_mas = $('#edu_mas').val();
        var job_exp = $('#job_exp').val();

        var student = alljobs_info.data;
        if (student.jobseeker_info.length) {
            var basicInfo = student.jobseeker_info[0];
            $("#photo_view").attr("src", 'data:image/jpg;base64,' + alljobs_info.files.image).show();
            $("#signature_view").attr("src", 'data:image/jpg;base64,' + alljobs_info.files.signature).show();

            if (student.jobseeker_user.length) {
                $('#alljobs_id').text(student.jobseeker_user[0].userid);
                $('#app_form').prepend('<input type="hidden" name="alljobs_id" value="' + student.jobseeker_user[0].userid + '">');
            }

            $('#app_form').prepend('<input type="hidden" name="imageurl" value="' + basicInfo.image + '">');
            $('#app_form').prepend('<input type="hidden" name="signatureurl" value="' + basicInfo.signature + '">');

            $('#app_form').prepend('<input type="hidden" name="image" value="' + alljobs_info.files.image + '">');
            $('#app_form').prepend('<input type="hidden" name="signature" value="' + alljobs_info.files.signature + '">');


            $('#name').val(basicInfo.name_en && basicInfo.name_en.toUpperCase());
            $('#fathername').val(basicInfo.father_name && basicInfo.father_name.toUpperCase());
            $('#mothername').val(basicInfo.mother_name && basicInfo.mother_name.toUpperCase());
            $('#b_day').val(('0' + new Date(basicInfo.dob).getDate()).slice(-2));
            $('#b_month').val(('0' + (new Date(basicInfo.dob).getMonth() + 1)).slice(-2));
            $('#b_year').val(new Date(basicInfo.dob).getFullYear());
            $('#religion').val(basicInfo.religion);

            if (basicInfo.gender == 'Male') {
                $("#sex_01").prop("checked", true);
                $("#sex_01").attr('checked', 'checked');
            } else if (basicInfo.gender == 'Female') {
                $("#sex_02").prop("checked", true);
                $("#sex_02").attr('checked', 'checked');
            }
            if (basicInfo.nid_no) {
                $("#nid_01").prop("checked", true);
                $("#nid_01").attr('checked', 'checked');
                $("#nid_01").closest('td').find('#xplod').val(basicInfo.nid_no);
            } else {
                $("#nid_02").prop("checked", true);
                $("#nid_02").attr('checked', 'checked');
            }

            if (basicInfo.birth_certificate_no) {
                $("#breg_01").prop("checked", true);
                $("#breg_01").attr('checked', 'checked');
                $("#breg_01").closest('td').find('#xplod').val(basicInfo.birth_certificate_no);
            } else {
                $("#breg_02").prop("checked", true);
                $("#breg_02").attr('checked', 'checked');
            }

            if (basicInfo.passport_no) {
                $("#passpost_01").prop("checked", true);
                $("#passpost_01").attr('checked', 'checked');
                $("#passpost_01").closest('td').find('#xplod').val(basicInfo.passport_no);
            } else {
                $("#passpost_02").prop("checked", true);
                $("#passpost_02").attr('checked', 'checked');
            }

            if (basicInfo.marital_status == 'Single') {
                $("#mstatus_02").prop("checked", true);
                $("#mstatus_02").attr('checked', 'checked');
            } else if (basicInfo.marital_status == 'Married') {
                $("#mstatus_01").prop("checked", true);
                $("#mstatus_01").attr('checked', 'checked');
                $("#mstatus_01").closest('td').find('#xplod').val(basicInfo.spouse_name && basicInfo.spouse_name.toUpperCase());
            }
            this.selectValue($("#ffq option"), basicInfo.quota);

            $('#present_care').val(basicInfo.present_care_of);
            $('#present_vill').val(basicInfo.present_address);
            this.selectValue($("#menu_one option"), basicInfo.present_district);
            document.getElementById("menu_one").onchange();
            $('#present_post').val(basicInfo.present_post_office);
            $('#present_pcode').val(basicInfo.present_post_code);

            if (!basicInfo.same_as_present_address) {
                $('#permanent_care').val(basicInfo.permanent_care_of);
                $('#permanent_vill').val(basicInfo.permanent_address);
                this.selectValue($("#menu_two option"), basicInfo.permanent_district);
                document.getElementById("menu_two").onchange();
                $('#permanent_post').val(basicInfo.permanent_post_office);
                $('#permanent_pcode').val(basicInfo.permanent_post_code);
            } else {
                $("#copy").prop("checked", true);
                $("#copy").attr('checked', 'checked');
                document.getElementById("copy").onclick();
            }

            $('#mobileno').val(basicInfo.mobile_phone);
            $('#confirmmobile').val(basicInfo.mobile_phone);
            $('#Email').val(student.jobseeker_user.length && student.jobseeker_user[0].email);
        }

        if (student.jobseeker_edu.length) {
            var eduInfo = student.jobseeker_edu[0];
            this.selectValue($("#exam1 option"), eduInfo.ssc_exam);
            document.getElementById("exam1").onchange();
            this.selectValue($("#institute1 option"), eduInfo.ssc_board);
            $('#roll1').val(eduInfo.ssc_roll);
            this.selectValue($("#result1 option"), eduInfo.ssc_result_type);
            document.getElementById("result1").onchange();
            $('#result_gpa1').val(eduInfo.ssc_result);
            this.selectValue($("#year1 option"), eduInfo.ssc_year);

            if (edu_stage > 1) {
                this.selectValue($("#exam2 option"), eduInfo.hsc_exam);
                document.getElementById("exam2").onchange();
                this.selectValue($("#institute2 option"), eduInfo.hsc_board);
                $('#roll2').val(eduInfo.hsc_roll);
                this.selectValue($("#result2 option"), eduInfo.hsc_result_type);
                document.getElementById("result2").onchange();
                $('#result_gpa2').val(eduInfo.hsc_result);
                this.selectValue($("#year2 option"), eduInfo.hsc_year);
            }

            if (edu_stage > 2 && eduInfo.gra_exam) {
                this.selectValue($("#exam3 option"), eduInfo.gra_exam);
                document.getElementById("exam3").onchange();
                this.selectValue($("#institute3 option"), eduInfo.gra_institute);
                this.selectValue($("#result3 option"), eduInfo.gra_result_type);
                document.getElementById("result3").onchange();
                $('#result_gpa3').val(eduInfo.gra_result);
                this.selectValue($("#year3 option"), eduInfo.gra_year);
                this.selectValue($("#duration3 option"), eduInfo.gra_duration);
            }

            if (edu_mas >= 1 && eduInfo.mas_exam) {
                $("#masters").prop("checked", true);
                $("#masters").attr('checked', 'checked');
                document.getElementById("masters").onclick();
                this.selectValue($("#exam4 option"), eduInfo.mas_exam);
                document.getElementById("exam4").onchange();
                this.selectValue($("#institute4 option"), eduInfo.mas_institute);
                this.selectValue($("#result4 option"), eduInfo.mas_result_type);
                document.getElementById("result4").onchange();
                $('#result_gpa4').val(eduInfo.mas_result);
                this.selectValue($("#year4 option"), eduInfo.mas_year);
                this.selectValue($("#duration4 option"), eduInfo.mas_duration);
            }
        }

        var expCnt = student.jobseeker_experience.length;
        if (job_exp >= 1 && expCnt) {
            $("#job_no").prop("checked", true);
            $("#job_no").attr('checked', 'checked');
            document.getElementById("job_no").onclick();
            if (expCnt > 1) {
                for (var i = 1; i < expCnt; i++) {
                    document.getElementById("job_button").onclick();
                }
                student.jobseeker_experience.sort(function (a, b) {
                    return new Date(b.ending_date) - new Date(a.ending_date);
                });
            }
            var id = 1;
            student.jobseeker_experience.forEach(expInfo => {
                $('#job_post' + id).val(expInfo.exp_title);
                $('#organization' + id).val(expInfo.company_name);
                $('#job_res' + id).val(expInfo.exp_description);
                $('#t_day' + id).val(('0' + new Date(expInfo.starting_date).getDate()).slice(-2));
                $('#t_month' + id).val(('0' + (new Date(expInfo.starting_date).getMonth() + 1)).slice(-2));
                $('#t_year' + id).val(new Date(expInfo.starting_date).getFullYear());

                if (expInfo.is_running) {
                    $("#till_now").prop("checked", true);
                    $("#till_now").attr('checked', 'checked');
                    document.getElementById("till_now").onclick();
                } else {
                    $('#f_day' + id).val(('0' + new Date(expInfo.ending_date).getDate()).slice(-2));
                    $('#f_month' + id).val(('0' + (new Date(expInfo.ending_date).getMonth() + 1)).slice(-2));
                    $('#f_year' + id).val(new Date(expInfo.ending_date).getFullYear());
                }
                id++;
            });
        }

        setTimeout(() => {
            if (student.jobseeker_info.length) {
                this.selectValue($("#menu_one_list option"), basicInfo.present_thana);
                if (!basicInfo.same_as_present_address) {
                    this.selectValue($("#menu_two_list option"), basicInfo.permanent_thana);
                }
            }

            if (student.jobseeker_edu.length) {
                this.selectValue($("#subject1 option"), eduInfo.ssc_subject);

                if (edu_stage > 1) {
                    this.selectValue($("#subject2 option"), eduInfo.hsc_subject);
                }

                if (edu_stage > 2) {
                    this.selectValue($("#subject3 option"), eduInfo.gra_subject);
                }

                if (edu_mas >= 1) {
                    this.selectValue($("#subject4 option"), eduInfo.mas_subject);
                }
            }
        }, 3000);
    };
    this.selectValue = function (elm, value) {
        elm.filter(function () {
            return $(this).text() && value && $(this).text().toString().trim() == value.toString().trim();
        }).prop('selected', true);
    };
};