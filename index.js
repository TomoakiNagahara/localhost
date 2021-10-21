
(function(){
	/** D is alias of console.log.
	 * 
	 */
	function D(v){
		console.log(v);
	}

	/**
	 * 
	 */
	function init(){
		//	...
		let select = document.querySelector('#switch_php_version');
		if(!select ){
			return;
		}

		//	...
		let current_version = location.port.substr(2);
		select.value = current_version;
		if( select.value !== current_version ){
			message('Port number is unmatch PHP version.',false);
		}

		//	...
		select.addEventListener('change', OnChangeSelect);
	}

	/**
	 * 
	 */
	function OnChangeSelect(){
		//	...
		if(!this.value ){
			document.location.port = 80;
			return;
		}

		//	...
		let port = document.location.port;
		if(!port ){
			port = '8000';
		}

		//	...
		let pfix = port.substr(0, port.length -2);
			port = pfix + this.value;

		//	...
		document.location.port = port;
	}

	/**
	 * 
	 */
	function message(message, io=true){
		//	...
		let span = document.querySelector('#message');

		//	...
		span.innerText = message;

		//	...
		if( io ){
			span.classList.add('blue');
			span.classList.remove('red');
		}else{
			span.classList.add('red');
			span.classList.remove('blue');
		}
	}

	/**
	 * 
	 */
	init();
})();
