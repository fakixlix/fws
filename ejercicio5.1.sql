﻿SELECT c.name FROM category c, category_products cp WHERE cp.product_id = 5 AND c.id = cp.category_id;