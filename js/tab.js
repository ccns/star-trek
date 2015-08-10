$(function(){
  $('ul.tabs li:first').addClass('active');
  $('.block article').hide();
  $('.block article:first').show();
  $('ul.tabs li').on('click',function(){
		$('ul.tabs li').removeClass('active');
		
		$(this).addClass('active')
		$('.block article').hide();
		
		var activeTab = $(this).attr('id');
		var tab_first = activeTab.split('#');
		$('.typeGroup').val(tab_first[1]);
		
		var track_load = 0; //total loaded record group(s)
		var loading  = false; //to prevents multipal ajax loads
		var total_groups = 1000; //total record group(s)
		var group_type = $('.typeGroup').val();
		//alert(group_type);
		//var group_search = $('.searchGroup').val();
		
		//load first group
		if(group_type == 'tab1')
		{$('#results').load("libraries/autoload.php", {'group_no':track_load,'group_type':group_type}, function() {track_load++;});}
		else if(group_type == 'tab2')
		{$('#results_2').load("libraries/autoload.php", {'group_no':track_load,'group_type':group_type}, function() {track_load++;});}
		else if(group_type == 'tab3')
		{$('#results_3').load("libraries/autoload.php", {'group_no':track_load,'group_type':group_type}, function() {track_load++;});}
		else if(group_type == 'tab4')
		{$('#results_4').load("libraries/autoload.php", {'group_no':track_load,'group_type':group_type}, function() {track_load++;});}
		else if(group_type == 'tab5')
		{$('#results_5').load("libraries/autoload.php", {'group_no':track_load,'group_type':group_type}, function() {track_load++;});}
		else if(group_type == 'tab6')
		{$('#results_6').load("libraries/autoload.php", {'group_no':track_load,'group_type':group_type}, function() {track_load++;});}
		else if(group_type == 'tab7')
		{$('#results_7').load("libraries/autoload.php", {'group_no':track_load,'group_type':group_type}, function() {track_load++;});}
		else if(group_type == 'tab8')
		{$('#results_8').load("libraries/autoload.php", {'group_no':track_load,'group_type':group_type}, function() {track_load++;});}
	
		//alert(track_load);
		$(window).scroll(function() { //detect page scroll
		
		if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
		{
			
			if(track_load <= total_groups && loading==false) //there's more data to load
			{
				loading = true; //prevent further ajax loading
				$('.animation_image').show(); //show loading image
				
				//load data from the server using a HTTP POST request
				if(group_type == 'tab1')
				{
					$.post('libraries/autoload.php',{'group_no': track_load,'group_type':group_type}, function(data){
						
						//append received data into the element
						
						$("#results").append(data);
											

						//hide loading image
						$('.animation_image').hide(); //hide loading image once data is received
						track_load++; //loaded group increment
						loading = false; 
					
					}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
						
						console.log(thrownError); //alert with HTTP error
						$('.animation_image').hide(); //hide loading image
						loading = false;
					
					});
				}
				else if(group_type == 'tab2')
				{
					$.post('libraries/autoload.php',{'group_no': track_load,'group_type':group_type}, function(data){
						
						//append received data into the element
						
						$("#results_2").append(data);
											

						//hide loading image
						$('.animation_image').hide(); //hide loading image once data is received
						track_load++; //loaded group increment
						loading = false; 
					
					}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
						
						console.log(thrownError); //alert with HTTP error
						$('.animation_image').hide(); //hide loading image
						loading = false;
					
					});					
				}
				else if(group_type == 'tab3')
				{
					$.post('libraries/autoload.php',{'group_no': track_load,'group_type':group_type}, function(data){
						
						//append received data into the element
						
						$("#results_3").append(data);
											

						//hide loading image
						$('.animation_image').hide(); //hide loading image once data is received
						track_load++; //loaded group increment
						loading = false; 
					
					}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
						
						console.log(thrownError); //alert with HTTP error
						$('.animation_image').hide(); //hide loading image
						loading = false;
					
					});					
				}
				else if(group_type == 'tab4')
				{
					$.post('libraries/autoload.php',{'group_no': track_load,'group_type':group_type}, function(data){
						
						//append received data into the element
						
						$("#results_4").append(data);
											

						//hide loading image
						$('.animation_image').hide(); //hide loading image once data is received
						track_load++; //loaded group increment
						loading = false; 
					
					}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
						
						console.log(thrownError); //alert with HTTP error
						$('.animation_image').hide(); //hide loading image
						loading = false;
					
					});					
				}
				else if(group_type == 'tab5')
				{
					$.post('libraries/autoload.php',{'group_no': track_load,'group_type':group_type}, function(data){
						
						//append received data into the element
						
						$("#results_5").append(data);
											

						//hide loading image
						$('.animation_image').hide(); //hide loading image once data is received
						track_load++; //loaded group increment
						loading = false; 
					
					}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
						
						console.log(thrownError); //alert with HTTP error
						$('.animation_image').hide(); //hide loading image
						loading = false;
					
					});					
				}
				else if(group_type == 'tab6')
				{
					$.post('libraries/autoload.php',{'group_no': track_load,'group_type':group_type}, function(data){
						
						//append received data into the element
						
						$("#results_6").append(data);
											

						//hide loading image
						$('.animation_image').hide(); //hide loading image once data is received
						track_load++; //loaded group increment
						loading = false; 
					
					}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
						
						console.log(thrownError); //alert with HTTP error
						$('.animation_image').hide(); //hide loading image
						loading = false;
					
					});					
				}
				else if(group_type == 'tab7')
				{
					$.post('libraries/autoload.php',{'group_no': track_load,'group_type':group_type}, function(data){
						
						//append received data into the element
						
						$("#results_7").append(data);
											

						//hide loading image
						$('.animation_image').hide(); //hide loading image once data is received
						track_load++; //loaded group increment
						loading = false; 
					
					}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
						
						console.log(thrownError); //alert with HTTP error
						$('.animation_image').hide(); //hide loading image
						loading = false;
					
					});					
				}
				else if(group_type == 'tab8')
				{
					$.post('libraries/autoload.php',{'group_no': track_load,'group_type':group_type}, function(data){
						
						//append received data into the element
						
						$("#results_8").append(data);
											

						//hide loading image
						$('.animation_image').hide(); //hide loading image once data is received
						track_load++; //loaded group increment
						loading = false; 
					
					}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
						
						console.log(thrownError); //alert with HTTP error
						$('.animation_image').hide(); //hide loading image
						loading = false;
					
					});					
				}
				
			}
		}
	});
	
		$(activeTab).show();
		return false;
  });
})