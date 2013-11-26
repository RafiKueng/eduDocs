
var fn = {};

fn.toggle = function(target){
  $("#_"+target).slideToggle();
};

fn.showgoto = function(target){
  $("#_"+target).slideDown(200);
  $('html, body').animate({
        scrollTop: $( "#_"+target ).offset().top - $(window).height()/3.
    }, 200);
  $("#_"+target).animateHighlight(200,500,1);
};


$.fn.animateHighlight = function(delay, duration, steps) {
    var delay = delay || 0;
    var duration = duration || 2000;
    var steps = steps || 3;
    var dt = duration / steps / 2;
    this.delay(delay);
    for (var i=0; i<steps;i++) {
      this.fadeTo(dt,0.01).fadeTo(dt,1.0);
    }
};

fn.createTOC = function() {
  var list = [];
  $("h2").add("h3").each(function(){
    var clean =  fn.clean(this.textContent);
    $(this).attr('id','__'+clean);
    var level = parseInt(this.tagName[1])-1;
    var title = this.textContent;
    list.push([level, title, this, clean]);
    console.log(level + ' : ' + title);
  });
  
  var lvl = 1;
  $curr = $('<ul>',{id:'TOCtop'});
  $top = $curr;
  for (var i=0; i<list.length; i++){
    var $elem = $('<li>').append($('<i>',{id:'_'+list[i][3],text:list[i][1]}));
    if (list[i][0]>lvl){
      $n = $('<ul>').append($elem);
      $curr = $curr.append($n);
      $curr = $n;
    }
    else if (list[i][0]==lvl){
      $curr.append($elem);
    }
    else if (list[i][0]<lvl){
      $curr=$curr.parent();
      $curr.append($elem);
    }
    lvl = list[i][0];
  }
  
  $toc = $('<div class="topic">')
          .append($('<h2>'+$('#TOC').attr('name')+'</h2>'))
          .append($('<div class="topicgroup">')
            .append($('<div class="topicbox">')
              .append($('#TOC')[0].innerHTML)
              .append($top)
            )
          );
  $('#TOC').replaceWith($toc);
};

fn.clean = function(s){
  return s.replace(/[_\s]/g, '-').replace(/[^a-z0-9-\s]/gi, '');
}


$( document ).ready(function() {
  
  fn.createTOC();
  
  $("i").each(function(count){
    $target = $('#_'+this.id);
    if ($target.hasClass('ezy')) {type = 'ezy';}
    else if ($target.hasClass('adv')) {type = 'adv';}
    else if ($target.hasClass('exp')) {type = 'exp';}
    else {type = '';}
    
    $(this)
      .click(function(evt){fn.showgoto(this.id)})
      .addClass(type) //this colors the links acccording to target
      ;
  });
  
  $("div.ezy, div.adv, div.exp").hide();
  
  $('h3, h4').click(function(){
    if ($(this).parent().hasClass('ezy') ||
        $(this).parent().hasClass('adv') ||
        $(this).parent().hasClass('exp') ){
      $(this).parent().slideUp();
    } 
  })
  
  
  $('div.video').each(function(){
    /*
    $tbox = $('<div class="topicbox">');
    $tbox.append('<h3>Video</h3>');
    $tbox.append('<p>[[watch video]]</p>');
    $tbox.append('<p>'+$(this).data('url')+'</p>');
    $(this).append($tbox);
    $(this).hide(); //hinde until its implemented
    */
  })

});


$( window ).load(function() {
  console.log("load");
  $("body").fadeIn();
});