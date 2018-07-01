window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    var body = $("html, body");
body.stop().animate({scrollTop:0}, 500, 'swing', function() { 
   
});
}
/*
function ShowCard(id) {
	ids=['num1','num2','num3','num4'];
	cards = ['card1','card2','card3','card4'];

	for(var i = 0 ; i < ids.length ; i++)
	{
		if(ids[i]==id)
		{
				alert(cards[i]);
			document.getElementById(cards[i]).style.display='block';
		}
		else
		{
			document.getElementById(cards[i]).style.display='none';
		}
	}
}*/
	var text = document.getElementById('ManageText').innerHTML;
	var res;
	if(text.length > 96)
	{
		var res = text[0];
		for (var i =1; i <= 96; i++)
		{
			res = res+text[i];
		}
		res = res + '...'
		document.getElementById('ManageText').style.display ='none';
		document.getElementById('More').innerHTML = res;
		document.getElementById('SeeMore').style.display='block';
	}
	function SeeMore ()
	{
		 document.getElementById('ManageText').style.display='block';
	 	document.getElementById('More').style.display='none';
	 	document.getElementById('SeeMore').style.display='none';
	}
function SeeMore ()
{
	 document.getElementById('ManageText').style.display='block';
	 document.getElementById('More').style.display='none';
}

function MobShowFeedBack(id) {
	cards=['imgMob1','imgMob2','imgMob3','imgMob4'];
	ids = ['MobName1','MobName2','MobName3','MobName4'];
	for(var i = 0 ; i < ids.length ; i++)
	{
		if(ids[i]==id)
		{
			document.getElementById(cards[i]).style.display='block';
			document.getElementById(ids[i]).style.color='red';
		}
		else
		{
			document.getElementById(cards[i]).style.display='none';
			document.getElementById(ids[i]).style.color='black';
		}
	}
}