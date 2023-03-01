<div class="markdown">
TEST
===

This is test.

</div>
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script>
//	...
document.addEventListener('DOMContentLoaded', async function(){
	//	...
	marked.setOptions({
		gfm:         true,
		tables:      true,
		breaks:      false,
		/*
		pedantic:    false,
		smartLists:  true,
		smartypants: false,
		sanitize:    true,
		langPrefix: 'language-',
		highlight:   function(code, lang) {
			return   code;
		}
		*/
	});
	//	Apply markdown
	if( typeof marked !== 'undefined' ){
		//	..
		document.querySelectorAll('div.markdown').forEach( async function(code){
		//	console.log(code.innerText, marked.parse(code.innerText));
			code.innerHTML = marked.parse(code.innerText);
		});
	}
});
</script>
