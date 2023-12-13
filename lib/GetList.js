var ajax = new Array();

function get_one_list(sel) {
    var one_value = sel.options[sel.selectedIndex].value;
    document.getElementById('menu_one_list').options.length = 0; // Empty city select box
    if (one_value.length > 0) {
        var index = ajax.length;
        ajax[index] = new sack();

        ajax[index].requestFile = 'list_one.php?one_value=' + one_value; // Specifying which file to get
        ajax[index].onCompletion = function() { create_menu_one(index) }; // Specify function that will be executed after file has been found
        ajax[index].runAJAX(); // Execute AJAX function
    }
}

function create_menu_one(index) {
    var obj = document.getElementById('menu_one_list');
    eval(ajax[index].response); // Executing the response from Ajax as Javascript code
    if (document.images['loading1']) {
        document.images['loading1'].style.visibility = "hidden";
    }
}


function get_two_list(sel) {
    var two_value = sel.options[sel.selectedIndex].value;
    document.getElementById('menu_two_list').options.length = 0; // Empty city select box
    if (two_value.length > 0) {
        var index = ajax.length;
        ajax[index] = new sack();

        ajax[index].requestFile = 'list_one.php?one_value=' + two_value; // Specifying which file to get
        ajax[index].onCompletion = function() { create_menu_two(index) }; // Specify function that will be executed after file has been found
        ajax[index].runAJAX(); // Execute AJAX function
    }
}

function create_menu_two(index) {
    var obj = document.getElementById('menu_two_list');
    eval(ajax[index].response); // Executing the response from Ajax as Javascript code
    if (document.images['loading2']) {
        document.images['loading2'].style.visibility = "hidden";
    }
}

function get_sub_gra(sel) {
    var two_value = sel.options[sel.selectedIndex].value;
    document.getElementById('subject3').options.length = 0; // Empty city select box
    if (two_value.length > 0) {
        var index = ajax.length;
        ajax[index] = new sack();

        ajax[index].requestFile = 'list_sub.php?one_value=' + two_value; // Specifying which file to get
        ajax[index].onCompletion = function() { create_menu_gra(index) }; // Specify function that will be executed after file has been found
        ajax[index].runAJAX(); // Execute AJAX function
    }
}

function create_menu_gra(index) {
    var obj = document.getElementById('subject3');
    eval(ajax[index].response); // Executing the response from Ajax as Javascript code
    if (document.images['loading3']) {
        document.images['loading3'].style.visibility = "hidden";
    }
}

function get_sub_hsc(sel) {
    var two_value = sel.options[sel.selectedIndex].value;
    document.getElementById('subject2').options.length = 0; // Empty city select box
    if (two_value.length > 0) {
        var index = ajax.length;
        ajax[index] = new sack();

        ajax[index].requestFile = 'list_sub_hsc.php?one_value=' + two_value; // Specifying which file to get
        ajax[index].onCompletion = function() { create_menu_hsc(index) }; // Specify function that will be executed after file has been found
        ajax[index].runAJAX(); // Execute AJAX function
    }
}

function create_menu_hsc(index) {
    var obj = document.getElementById('subject2');
    eval(ajax[index].response); // Executing the response from Ajax as Javascript code
    if (document.images['loading_hsc']) {
        document.images['loading_hsc'].style.visibility = "hidden";
    }
}





function get_sub_ssc(sel) {
    var two_value = sel.options[sel.selectedIndex].value;
    document.getElementById('subject1').options.length = 0; // Empty city select box
    if (two_value.length > 0) {
        var index = ajax.length;
        ajax[index] = new sack();

        ajax[index].requestFile = 'list_sub_ssc.php?one_value=' + two_value; // Specifying which file to get
        ajax[index].onCompletion = function() { create_menu_ssc(index) }; // Specify function that will be executed after file has been found
        ajax[index].runAJAX(); // Execute AJAX function
    }
}

function create_menu_ssc(index) {
    var obj = document.getElementById('subject1');
    eval(ajax[index].response); // Executing the response from Ajax as Javascript code
    if (document.images['loading_ssc']) {
        document.images['loading_ssc'].style.visibility = "hidden";
    }
}