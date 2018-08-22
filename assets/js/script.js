    /*
    *
    User Deatils
    *
    */

  //Edit user
  $(".editUser").click(function(){
    let id = $(this).attr('id');
      $.ajax({
        url:"users/fetch/"+id,
        method:"GET",
        dataType:"JSON",
        success: function(data){
          $('#staffId').val(data.staffId);
          $('#firstname').val(data.firstname);
          $('#lastname').val(data.lastname);
          $('#email').val(data.email);
          $('#username').val(data.username);
          $('#level').val(data.level);
          $('#userid').val(data.id);
          $('#editusers').modal("show");
        },
        error:function(){
        console.error();
    }
    });
});

// Update User Details

$("#userUpt").click(function(){
    let id = $('#userid').val();
    $.ajax({
        method :"POST",
        url  :"users/update/"+id,
        data :{
            'staffId' : $('#staffId').val(),
            'firstname' : $('#firstname').val(),
            'lastname' : $('#lastname').val(),
            'email' : $('#email').val(),
            'username' : $('#username').val(),
            'level' : $('#level').val(),
            'id' : $('#userid').val(),
        },
        success:function(data){
            $('#userEdit')[0].reset();
            window.location.reload();
        },
        error:function(){
        console.error();
      }
    });
});

  // Delete user
$(".delUser").click(function(){
    let id = $(this).attr('id');
    $('.modal-title').text("CAUTION!!");
    $('#deletemsg').html("Are you sure you want to delete?<input type='hidden' value='"+id+"'>");
    $('#deleteConf').modal("show");
    $(".confirm").click(function(){
        $.ajax({
            url:"users/delete/"+id,
            method:"POST",
            success: function(msg){
            $('#warn').modal('hide');
            window.location.reload();
            },
            error:function(){
            console.error();
        }
        });
    });
});


  //JQUery Documnet dot Ready Function
  $( document ).ready(function() {
    //Event delegation
    $(document).on('click', '#id', function(){});
    $(document).on('submit', '#id', function(){});
    $(document).on('change', '#id', function(){});
    //Data Tables
    $('#tables').DataTable({
    responsive: true,
    "bFilter": true,
    });

  });

  // Fuction to get all elements by IDs
  function _(x){
    return document.getElementById(x);
    }

    //Making the navbar sticky

window.onscroll = function() {scrollCheck()};

function scrollCheck() {
  const navOffset = document.body.scrollTop;
  const navOff = document.documentElement.scrollTop;
    if (navOffset > 50|| navOff > 50) {
        _("myP").classList.add("gone");
        _("navnu").classList.add("test");
        _("navnu1").classList.add("test");
        _("navnu2").classList.add("test");

    } else if (navOffset <100 || navOff <100){
      _("myP").classList.remove("gone");
      _("navnu").classList.remove("test");
      _("navnu1").classList.remove("test");
      _("navnu2").classList.remove("test");
    }
}
  /*
  *
  Custom Javascript for the job grading system
  *
  */

  // Create a multidimensional array to represent the intersect
  let intersect = [
    [33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460, 528, 608, 700, 800, 920, 1056, 1216, 1400, 1600, 1840, 2112, 2432, 2800],
    [29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460, 528, 608, 700, 800, 920, 1056, 1216, 1400, 1600, 1840, 2112, 2432],
    [25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460, 528, 608, 700, 800, 920, 1056, 1216, 1400, 1600, 1840, 2112],
    [22, 25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460, 528, 608, 700, 800, 920, 1056, 1216, 1400, 1600, 1840],
    [19, 22, 25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460, 528, 608, 700, 800, 920, 1056, 1216, 1400, 1600],
    [16, 19, 22, 25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460, 528, 608, 700, 800, 920, 1056, 1216, 1400],
    [14, 16, 19, 22, 25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460, 528, 608, 700, 800, 920, 1056, 1216],
    [12, 14, 16, 19, 22, 25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460, 528, 608, 700, 800, 920, 1056],
    [10, 12, 14, 16, 19, 22, 25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460, 528, 608, 700, 800, 920],
    [9, 10, 12, 14, 16, 19, 22, 25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460, 528, 608, 700, 800],
    [8, 9, 10, 12, 14, 16, 19, 22, 25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460, 528, 608, 700],
    [7, 8, 9, 10, 12, 14, 16, 19, 22, 25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460, 528, 608],
    [6, 7, 8, 9, 10, 12, 14, 16, 19, 22, 25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460, 528],
    [5, 6, 7, 8, 9, 10, 12, 14, 16, 19, 22, 25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400, 460],
    [4, 5, 6, 7, 8, 9, 10, 12, 14, 16, 19, 22, 25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350, 400],
    [3, 4, 5, 6, 7, 8, 9, 10, 12, 14, 16, 19, 22, 25, 29, 33, 38, 43, 50, 57, 66, 76, 87, 100, 115, 132, 152, 175, 200, 230, 264, 304, 350],
  ];


  // Variables for the used DIVs, form values
  let hm = _("instruction");
  let phase1 = _("knowhow");
  let phase2 = _("problemsolving");
  let phase3 = _("accountability");
  let phase4 = _("intersect");

  // validation to avoid submitting blanks
  function check1(){
    let jobTitle, khval, psval, acval, errMessage,succMessage,i,j;
    const newjob = document.jobpost.newjob;
    if(newjob.value =="" ){
      errMessage = "Please Enter the Job Title";
      $('#warnmsg').html(errMessage);
      $('#warn').modal("show");
      return false;
    }else{
    jobTitle = newjob.value;
   localStorage.setItem("jobTitle",jobTitle);
    }
      phase1.style.display = "block";
      hm.style.display = "none";
  }

  /* Next button on the know how page */
  //Picking the radio button value and validation to avoid submitting blanks

  function check2(){
      const kh = document.jogs.kh;
      for (var i in kh) {
      if(kh[i].checked){
        khval = kh[i].value;
      }
    }
    if(khval==undefined){
      errMessage = "You did not select know how";
      $('#warnmsg').html(errMessage);
      $('#warn').modal("show");
      return false;
    }else{
  //Do nothing in this case..............
    }

      phase1.style.display = "none";
      phase2.style.display = "block";
    }

   /* Back button on the problem solving page */
  function back1(){
      phase1.style.display = "block";
      phase2.style.display = "none";
  }

  /* Next button on the problem solving page */
  //Picking the radio button value and validation to avoid submitting blanks
  function check3(){
    const ps = document.jogs.ps;
    for (var i in ps) {
      if(ps[i].checked){
        psval = ps[i].value;
      }
    }
    if(psval==undefined){
      errMessage = "You did not select anything";
      $('#warnmsg').html(errMessage);
      $('#warn').modal("show");
      return false;
    }else{
  //Do nothing in this case..............
      phase2.style.display = "none";
      phase3.style.display = "block";
    }
  }

  /* Back button on phase3ountability page */

  function back2()
  {
    phase3.style.display = "none";
    phase2.style.display = "block";
    }

  /* Next button on the phase3ountability page */
  //Picking the radio button value and validation to avoid submitting blanks

  function check4(){
    const acc = document.jogs.acc;
      for (var i in acc) {
        if(acc[i].checked){
          acval = acc[i].value;
        }
      }
    if(acval==undefined){
      errMessage = "You did not select anything";
      $('#warnmsg').html(errMessage);
      $('#warn').modal("show");
      return false;
    }else{
    //Create a mapping for problem solving into array positions

    if (psval == 87||psval > 87){i = 0;}
      else if(psval==76){i = 1;}  else if(psval==66){i = 2;}  else if(psval==57){i = 3;}  else if(psval==50){i = 4;}
      else if(psval==43){i = 5;}  else if(psval==38){i = 6;}  else if(psval==33){i = 7;}  else if(psval==29){i = 8;}
      else if(psval==25){i = 9;}  else if(psval==22){i = 10;}  else if(psval==19){i = 11;}  else if(psval==16){i = 12;}
      else if(psval==14){i = 13;}  else if(psval==12){i = 14;}  else if(psval==10){i = 15;}  else{}

      //Create a mapping for know how into array positions

      if (khval==38){j = 0;}    else if(khval==43){j = 1;}    else if(khval==50){j = 2;}    else if(khval==57){j = 3;}
      else if(khval==66){j = 4;}    else if(khval==76){j = 5;}    else if(khval==87){j = 6;}    else if(khval==100){j = 7;}
      else if(khval==115){j = 8;}    else if(khval==132){j = 9;}  else if(khval==152){j = 10;}   else if(khval==175){j = 11;}
      else if(khval==200){j = 12;}   else if(khval==230){j = 13;} else if(khval==264){j = 14;}   else if(khval==304){j = 15;}
      else if(khval==350){j = 16;}   else if(khval==400){j = 17;} else if(khval==460){j = 18;}   else if(khval==528){j = 19;}
      else if(khval==608){j = 20;}   else if(khval==700){j = 21;} else if(khval==800){j = 22;}   else if(khval==920){j = 23;}
      else if(khval==1056){j = 24;}  else if(khval==1216){j = 25;} else if(khval==1400){j = 26;} else if(khval==1600){j = 27;}
      else if(khval==1840){j = 28;}  else if(khval==2112){j = 29;} else if(khval==2432){j = 30;} else if(khval==2800){j = 31;}
      else if(khval==3200){j = 32;}   else{}

      // Pick a figure as per the given cordinates
      let ftotal = intersect[i][j];
      let jobTitle = localStorage.getItem("jobTitle")
     //Change the text to figures
      let khv = parseInt(khval);
      let acv = parseInt(acval);
      let ftot = parseInt(ftotal);
      let sumUp = khv+acv+ftot;
      //Display results in a bootstrap modal..............
      $('#display_title').val(jobTitle);
      $('#display_kh').val(khval);
      $('#display_ps').val(ftotal);
      $('#display_ac').val(acval);
      $('#display_ft').val(sumUp);
      $('#product').modal("show");
      }
    }
  //Save the data to the database..............

  function saveData(){
    $.ajax({
        url:'home/store',
        method:'POST',
        data:$('#matched').serialize(),
        dataType:'json',
        success:function(data){
          $("#matched")[0].reset();
        },
        error:function(){

        }
    });
  }
