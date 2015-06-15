DELETE FROM category_products AS cp
	WHERE cp.category_id = ( SELECT c.id FROM category c WHERE c.id = 3 );