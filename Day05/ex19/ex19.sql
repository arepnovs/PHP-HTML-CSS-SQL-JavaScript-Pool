SELECT
    ABS(DATEDIFF(MIN(DATE),
    MAX(DATE))) AS "uptime"
FROM
    member_history;
