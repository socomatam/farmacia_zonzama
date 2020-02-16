window.onload = function() { 

	var oneArticle = new Vue ({ 
		el: '#one_article',
		data:{
			article: 0,	
		},
		methods:{
    		addArticle: function(n){
      		this.article+=n;
    	}
		}//end methosds
	});//end one article
	
};