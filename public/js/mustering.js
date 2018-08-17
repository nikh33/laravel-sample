/*
Jose - Javascript for commanding the mustering process 
*/

	var isWorking = true;
	 var time = 0;
	 
	//load the occupation in the selected area
	function getAreaPersonCount(areaId)
	{            
		$.ajax({
			type: 'GET',
			url: '../ajaxGetAreaCount/' + areaId,
			success: function(data) {
				var tdElement = document.getElementById('countMustering');
				tdElement.innerText  = data.count;
				
			}
		});
	}
	
	//remove lines from the table and update counting
	function checkClick(badgeId)
	{
		var checkElement = document.getElementById(badgeId);
		var trElement = document.getElementById('tr_' + badgeId);
		if (checkElement.checked === true)
			trElement.style.display = "none";
		else
			trElement.style.display = "table-row";
		
		var trArray = document.getElementsByClassName("countTr");
		var idsArray = '';
		var i = 0;
		for (i = 0; i < trArray.length; i++)
		{
			if (trArray[i].style.display == "none")
				continue;
			idsArray = idsArray + "," + trArray[i].id;
		}
		idsArray = idsArray.toString().substring(1, idsArray.length);
		idsArray = idsArray.replace(/tr_/gi, '');
		var ids = idsArray.split(",");
		
		var peopleCount = document.getElementById('peopleCount');
		peopleCount.innerText = ids.length;
	}
		
	//start tracking
	function onInit()
	{
		var btnStart = document.getElementById("btnStart");
		var btnStop = document.getElementById("btnStop");
		btnStart.className = "btn btn-block btn-success disabled";
		btnStop.className = "btn btn-block btn-danger enabled";
		isWorking = true;
		timer = setTimeout(setTimeValue, 1000);
		
	}
	
	function setTimeValue()
	{
		if (!isWorking)
			return;
		time = time + 1;
		var timerElement = document.getElementById("timer");
		if (time < 10)
			timerElement.innerHTML = "00:0" + time;
		else if (time < 60)
			timerElement.innerHTML = "00:" + time;
		else
		{
			min = Math.floor(time / 60);
			if (min < 10)
			{
				timerElement.innerHTML = "0" + min + ":" + time % 60;
				if (time % 60 < 10)
					timerElement.innerHTML = "0" + min + ":0" + time % 60;
				else if (time % 60 < 60)
					timerElement.innerHTML = "0" + min + ":" + time % 60;
			}
			else
			{
				if (time % 60 < 10)
					timerElement.innerHTML = min + ":" + "0" + time % 60;
				else if (time % 60 < 60)
					timerElement.innerHTML = min + ":" + time % 60;
			}
		}
		if (time % 60 === 0)
			updateCountTable();
		setTimeout(setTimeValue, 1000);
	}
	
	
	function onStop(areaId)
	{
		var btnStart = document.getElementById("btnStart");
		var btnStop = document.getElementById("btnStop");
		btnStart.className = "btn btn-block btn-success enabled";
		btnStop.className = "btn btn-block btn-danger disabled";
		isWorking = false;
		
		var timerElement = document.getElementById("timer");
		var ss = timerElement.text;
		$.ajax({
			type: 'GET',
			url: '../ajaxStopTrack/' + areaId + '/' + getTimeFormat(),
			success: function(data) {
				//addItemCountPersons(data.persons);
				changeState(data.persons, idsArray);
				//addItemPersons(data.persons);
				//addItemInState(data.persons);
				//addItemOutState(data.persons);
				//addItemInState(data.in_person);
				//addItemOutState(data.out_person);


			}
		});
	}
		
	function changeState(persons, idsArray)
	{
		//alert(idsArray);
		var ids = idsArray.split(",");
		var countOff = 0;
		for (i = 0; i < ids.length; i++)
		{
			var k = 0;
			for (j = 0; j < persons.length; j++)
			{
				personInfo = persons[j];
				if (personInfo.id === ids[i])
				{
					k = 1;
					break;
				}
			}
			var tdElement = document.getElementById('state_' + ids[i]);
			if (k == 0)
			{                    
				tdElement.className = "fa fa-fw fa-user-times";
				countOff++;
			}
			else
				tdElement.className = "fa fa-fw fa-user";
		}
		if (ids.length == countOff)
			onStop();
	}	



	function getTimeFormat()
	{
		var result = "";
		if (time < 10)
			result = "00:0" + time;
		else if (time < 60)
			result = "00:" + time;
		else
		{
			min = Math.floor(time / 60);
			if (min < 10)
			{
				result = "0" + min + ":" + time % 60;
				if (time % 60 < 10)
					result= "0" + min + ":0" + time % 60;
				else if (time % 60 < 60)
					result = "0" + min + ":" + time % 60;
			}
			else
			{
				if (time % 60 < 10)
					result = min + ":" + "0" + time % 60;
				else if (time % 60 < 60)
					result = min + ":" + time % 60;
			}
		}
		return result;
	}		
	
		
		
		
		
		
		