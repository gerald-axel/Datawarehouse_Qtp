INSERT INTO qtp_dw.dim_time (
	SELECT NULL,
	DATE(T.start_event_date) AS Date,
	YEAR(T.start_event_date) AS Year,
	Quarter(T.start_event_date) AS Quarter,
	DATE_FORMAT(T.start_event_date, '%M') AS Month,
	DATE_FORMAT(T.start_event_date, '%U') AS Week,
	
	DATE(T.end_event_date) AS Date,
	YEAR(T.end_event_date) AS Year,
	Quarter(T.end_event_date) AS Quarter,
	DATE_FORMAT(T.end_event_date, '%M') AS Month,
	DATE_FORMAT(T.end_event_date, '%U') AS Week
		FROM courses AS T
		GROUP BY T.start_event_date, T.end_event_date
);