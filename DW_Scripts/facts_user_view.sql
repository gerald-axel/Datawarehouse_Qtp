SELECT
			T3.CategoryName AS CategoryName,
			T3.CourseName As CourseName,
			T8.Description AS StatusId,
			T9.StartDate AS StartDate,
			T9.EndDate AS EndDate,
			T2.Name AS AssistantID,
			T4.Description AS EmalingID,
			(SELECT IF(T1.PromotionID = 0, 'No', 'Si')) AS PromotionID,
			T5.Type AS PaymentType,
			T7.Region AS Region,
			T7.Country AS Country,
			T1.MoneyLoose As MoneyLoose,
			T1.MoneyOwe As MoneyOwe
			FROM  facts AS T1
				INNER JOIN dim_assistants AS T2 ON T2.Id = T1.AssistantId
				INNER JOIN dim_categories_courses AS T3 ON T3.Id = T1.CategoryCourseID
				INNER JOIN dim_emailing AS T4 ON T4.Id = T1.EmalingID
				INNER JOIN dim_payment_type AS T5 ON T5.Id = T1.PaymentType
				LEFT JOIN dim_promotions AS T6 ON T6.Id = T1.PromotionID
				INNER JOIN dim_regions AS T7 ON T7.Id = T1.RegionID
			   INNER JOIN dim_status AS T8 ON T8.Id = T1.StatusID
 	 			INNER JOIN dim_time AS T9 ON T9.Id = T1.TimeID AND T9.EndDate
