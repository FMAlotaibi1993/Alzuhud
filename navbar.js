$(document).ready(function(){
  var checkDiv = $('body');
  // console.log(checkDiv);
  var secondCheck = $('a');
  var checkObj = {
    mainpage: 'homelink',
    sndpage: '2ndlink',
    trdpage: '3rdlink'
  }
// $('a.nav-item')
  console.log(checkObj["trdpage"]);
  // key : value
  // .each();
  // secondCheck.each(function(){
  //   if($(this).attr("id") == "true"){
  //     $(this).addClass ("navcontent");
  //   }else{
  //     console.log(false);
  //   }
  // })
  // li li li

  // $('selector').addClass('navcontent');
  $('a#'+checkObj[checkDiv.attr('id')]).addClass('navcontent');
  console.log($('a#'+checkObj[checkDiv.attr('id')]));

// secondCheck.each(function() {
//   if(checkDiv.attr('id') == )
//   // first ('a#homelink');
//
// //   var bodyid = checkDiv.attr('id');
// //   var aId = $(this).attr('id');
// //   if(bodyid == "mainpage" && aId == "homelink") {
// //   $(this).addClass ("navcontent");
// // } else if(bodyid == "2ndpage" && aId == "2ndlink") {
// //     $(this).addClass ("navcontent");
// //   } else if(bodyid == "3rdpage" && aId == "3rdlink") {
// //       $(this).addClass ("navcontent");
// //     }
// //
// //   })
})
