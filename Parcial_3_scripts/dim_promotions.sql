INSERT INTO qtp_dw.dim_promotions
	(SELECT null,
				percent, 
				code, 
				author FROM courses_discounts)