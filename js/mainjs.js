//una mateixa vista carregarà diferents templates segons la pestanya que sigui --> un per wines, wineCellar, events
//wines i events--> dos templates 
//

//$(document).ready( function() {

	$('#wineCellarbar').click(function() {
  		$('#wineCellar_panel').show();
  		$('#wines_panel').hide();
  		$('#events_panel').hide();
  		if(!$('#wineCellarbar').hasClass('active')) $('#wineCellarbar').addClass('active');
  		if($('#winesbar').hasClass('active')){
  			$('#winesbar').removeClass('active');
  		}
  		if($('#eventsbar').hasClass('active')){
  			$('#eventsbar').removeClass('active');
  		}
	});

	$('#winesbar').click(function() {
  		$('#wineCellar_panel').hide();
  		$('#wines_panel').show();
  		$('#events_panel').hide();
  		if(!$('#winesbar').hasClass('active')) $('#winesbar').addClass('active');
  		if($('#wineCellarbar').hasClass('active')){
  			$('#wineCellarbar').removeClass('active');
  		}
  		if($('#eventsbar').hasClass('active')){
  			$('#eventsbar').removeClass('active');
  		}
	});

	$('#eventsbar').click(function() {
  		$('#wineCellar_panel').hide();
  		$('#wines_panel').hide();
  		$('#events_panel').show();
  		if(!$('#eventsbar').hasClass('active')) $('#eventsbar').addClass('active');
  		if($('#wineCellarbar').hasClass('active')){
  			$('#wineCellarbar').removeClass('active');
  		}
  		if($('#winesbar').hasClass('active')){
  			$('#winesbar').removeClass('active');
  		}
	});


  



//}