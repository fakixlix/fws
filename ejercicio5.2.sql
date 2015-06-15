SELECT sum(p.stock) FROM product p, category c, category_products cp WHERE p.id = cp.product_id AND cp.category_id = 3;

/*SELECT name FROM category WHERE name = 'Accesorios';*/