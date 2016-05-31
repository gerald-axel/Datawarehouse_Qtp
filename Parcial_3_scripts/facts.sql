INSERT INTO qtp_dw.facts (
		SELECT
			T7.Id AS CategoryCourseID,
			T12.Id AS StatusId,
			T13.Id AS TimeId,
			T6.Id AS AssistantID,
			T8.Id AS EmalingID,
			T10.Id AS PromotionID,
			T9.Id AS PaymentType,
			T11.Id AS RegionId,
			COALESCE(((T2.price * (T5.percent / 100))), 0) AS MoneyLoose
			FROM  categories AS T1
				INNER JOIN courses AS T2
				INNER JOIN categories_courses AS T3 ON T1.id_category = T3.id_category AND T3.id_course = T2.id_course
				INNER JOIN assistants AS T4 ON T4.id_course = T2.id_course
				LEFT JOIN courses_discounts AS T5 ON T5.id_discount = T4.id_discount
				INNER JOIN qtp_dw.dim_assistants AS T6 ON T6.name = T4.name AND T6.Paternal_last_name = T4.paternal_last_name AND T6.maternal_last_name = T4.maternal_last_name
				INNER JOIN qtp_dw.dim_categories_courses AS T7 ON T7.CategoryName = T1.name AND T7.CourseName = T2.name
				INNER JOIN qtp_dw.dim_emailing AS T8 ON T8.Type = T4.emailing
				INNER JOIN qtp_dw.dim_payment_type AS T9 ON T9.Type = T4.payment_type
				LEFT JOIN qtp_dw.dim_promotions AS T10 ON T10.Percent = T5.Percent AND T10.code = T5.code AND T10.author = T5.author
				INNER JOIN qtp_dw.dim_regions AS T11 ON T11.Region = T4.region AND T11.Country = T4.country
				INNER JOIN qtp_dw.dim_status AS T12 ON T12.Type = T2.status
 	 			INNER JOIN qtp_dw.dim_time AS T13 ON T13.StartDate = T2.start_event_date AND T13.EndDate = T2.end_event_date
);
