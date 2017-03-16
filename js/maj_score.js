function maj_score(increment)
{
	if ((increment>0) && (valeur<=12))
	{
		valeur+=increment;
		document.getElementById('score').value=valeur;
	}
	else
	{
		if ((increment<0) && (valeur >=1))
		{
			valeur+=increment;
			document.getElementById('score').value=valeur;	
		}
	}	
}