INSERT INTO qtp_dw.dim_categories_courses (
		SELECT
			(SELECT NULL),
			T1.name AS CategoryName,
			T3.name AS CourseName
			FROM  categories AS T1
				INNER JOIN categories_courses AS T2 ON T1.id_category = T2.id_category
				INNER JOIN courses AS T3 ON T2.id_course = T3.id_course
 					ORDER BY 2 ASC 
);