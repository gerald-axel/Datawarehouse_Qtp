INSERT INTO qtp_dw.dim_assistants 
	(SELECT null,
				name, 
				paternal_last_name, 
				maternal_last_name FROM assistants)