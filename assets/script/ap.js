// JavaScript Document
	var swbl = document.getElementById("SwoblDataPrice");
	var btc = document.getElementById("BitcoinDataPrice");	
	var eth = document.getElementById("EthereumDataPrice");	
		
		
	var liveprice = {
		"async":true,
		"scroosDomain": true,
		"url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum%2Cdogecoin&vs_currencies=usd",
		"method":"GET",
		"headers":{}
	}
	$.ajax(liveprice).done(function(response){
	///console.log.(response);
	swbl.innerHTML = response.dogecoin.usd;	
	btc.innerHTML = response.bitcoin.usd;
	eth.innerHTML = response.ethereum.usd;	
	});	
