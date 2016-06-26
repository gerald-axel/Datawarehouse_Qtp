INSERT INTO qtp_dw.dim_regions (
		SELECT NULL,
			Region AS Region,
			Country AS Country
				FROM  assistants
					GROUP BY 2,3
);