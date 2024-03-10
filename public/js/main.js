console.log("testing JS")


// Typed JS
$(function(){
    $(".typed").typed({
        strings: ["У Вас проблема", "с транспортом?", "Мы найдем Вам решение", "Выберите проблему ниже..."],
        // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        stringsElement: null,
        // typing speed
        typeSpeed: 30,
        // time before typing starts
        startDelay: 1200,
        // backspacing speed
        backSpeed: 20,
        // time before backspacing
        backDelay: 500,
        // loop
        loop: true,
        // false = infinite
        loopCount: 5,
        // show cursor
        showCursor: false,
        // character for cursor
        cursorChar: "|",
        // attribute to type (null == text)
        attr: null,
        // either html or text
        contentType: 'html',
        // call when done callback function
        callback: function() {},
        // starting callback function before each string
        preStringTyped: function() {},
        //callback for every typed string
        onStringTyped: function() {},
        // callback for reset
        resetCallback: function() {}
    });
});


// Masonry
$('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  gutter: 0,
  percentPosition: true,
  columnWidth: 0,
  horizontalOrder: true
});

// MAsonry 2nd
$('.grid-sec').masonry({
  // options
  itemSelector: '.grid-item-sec',
  gutter: 0,
  percentPosition: true,
  columnWidth: 0,
  horizontalOrder: true
});

$( ".big_grid_item" ).hover(function() {
  $( ".big_grid_span",this ).toggleClass( "d-none" );
});




// For the sake of the example we update the chart every time it's created with a delay of 10 seconds
// chart2.on('created', function() {
//   if(window.__exampleAnimateTimeout) {
//     clearTimeout(window.__exampleAnimateTimeout);
//     window.__exampleAnimateTimeout = null;
//   }
//   window.__exampleAnimateTimeout = setTimeout(chart2.update.bind(chart2), 12000);
//   console.log(2);
// });


// Product_checks
$(document).ready(function() {
  $('.checks').click(function() {
     $(this).toggleClass('checks_active');
     if ( $(this).hasClass('checks_active') ) {
       var active_id=($(this).attr('id'));
       console.log(active_id);
     }
     else{
      active_id=($(this).attr('id')+0);
      console.log(active_id);
     }
   })})

   

$(function(){
  $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
  $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
});
	
     