window.onload = function() { 
	var categorieList = new Vue({
  		el: '#list_categorie',
  		data: {
			items: [
     			{ category: 'Categoría 1' },
      			{ category: 'Categoría 2' },
				{ category: 'Categoría 3' },
				{ category: 'Categoría 4' },
				{ category: 'Categoría 5' },
    		]
  		}
	})
	
};