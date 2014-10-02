function radioImage()
{
 var selected=$('.myRadioImg input[name=cc]:checked').attr("id");
if(selected=='male')
{
	$("#maleLabel").removeClass().addClass("radioMaleCheck");
	$("#femaleLabel").removeClass().addClass("radioFemaleUnCheck");
}
if(selected=='female')
{
	$("#maleLabel").removeClass().addClass("radioMaleUnCheck");
	$("#femaleLabel").removeClass().addClass("radiolFemaleCheck");
}
	
}