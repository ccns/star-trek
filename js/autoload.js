$(document).ready(function(){
	var track_load = 0; //total loaded record group(s)
	var loading  = false; //to prevents multipal ajax loads
	//var total_groups = $('.totalGroup').val(); //total record group(s)
	//var group_type = $('.typeGroup').val();
	//var group_search = $('.searchGroup').val();
	

	$('#results').load("libraries/autoload.php", {'group_no':track_load}, function() {track_load++;});//load first group

	$(window).scroll(function() { //detect page scroll
		
		if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
		{
			
			if(track_load <= total_groups && loading==false) //there's more data to load
			{
				loading = true; //prevent further ajax loading
				$('.animation_image').show(); //show loading image
				
				//load data from the server using a HTTP POST request
				if(group_type == 'all')
				{
					$.post('libraries/autoload.php',{'group_no': track_load}, function(data){
										
						$("#results").append(data); //append received data into the element

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
	
});